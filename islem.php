<?php
require_once('baglan.php');
ob_start();
session_start();

if (isset($_POST['kayit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$first_name) {
        echo "Lütfen adınızı giriniz!";
    }
    elseif (!$last_name) {
        echo "Lütfen soyadınızı giriniz!";
    }
    elseif (!$email) {
        echo "Lütfen email adresinizi giriniz!";
    }
    elseif (!$password) {
        echo "Lütfen şifrenizi giriniz";
    }
    else {
        $sorgu = $db->prepare('INSERT INTO users SET first_name = ?, last_name = ?, email = ?, password = ?');
        $ekle = $sorgu->execute([$first_name,$last_name,$email,md5($password)]);
        if ($ekle) {
            echo "Kayıt başarılı, anasayfaya yönlendiriliyorsunuz...";
            $_SESSION['user']=array("first_name"=>$first_name,"last_name"=>$last_name,"email"=>$email,"password"=>md5($password));
            header('Refresh:2; authentication-signin.php');

        }
        else {
            echo "Bir hata oluştu, tekrar deneyin";
        }
    }
}

if (isset($_POST['giris'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $kullanici=$db->prepare('SELECT * FROM users WHERE email = ? && password = ?');
    $kullanici->execute([$email,md5($password)]);
    $kullaniciBilgileri=$kullanici->fetch();
    $_SESSION['user']=array("ıd"=>$kullaniciBilgileri["ıd"],"first_name"=>$kullaniciBilgileri["first_name"],"last_name"=>$kullaniciBilgileri["last_name"],"email"=>$kullaniciBilgileri["email"],"password"=>$kullaniciBilgileri["password"]);
    
            //echo $kullaniciBilgileri["first_name"];
    if (!$email) {
        echo "Lütfen epostanızı giriniz!";
    }
    elseif (!$password) {
        echo "Lütfen şifrenizi giriniz!";
    }
    else {
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE email = ? && password = ?');
        $kullanici_sor->execute([$email,md5($password)]);
        //$kullaniciBilgileri=$kullanici_sor->fetchAll(PDO::FETCH_ASSOC);
        $say = $kullanici_sor->rowCount();
        if ($say==1) {
            $_SESSION['user']['email']=$email;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz...";
            //echo $kullaniciBilgileri['first_name'];
            header('Refresh:2,index.php');
        }
        else {
            echo "Bir hata oluştu, tekrar deneyin";
        }
    }
}

if (isset($_POST['güncelle'])) {
    $g_first_name = $_POST['first_name'];
    $g_last_name = $_POST['last_name'];
    $g_email = $_POST['email'];
    $g_password = $_POST['password'];
    $g_new_password = $_POST['new_password'];
    $g_password_again = $_POST['password_again'];

    if (!$g_first_name) {
        echo "Lütfen adınızı giriniz!";
    }
    elseif (!$g_last_name) {
        echo "Lütfen soyadınızı giriniz!";
    }
    elseif (!$g_email) {
        echo "Lütfen email adresinizi giriniz!";
    }
    elseif (!$g_password) {
        echo "Lütfen güncel şifrenizi giriniz";
    }
    elseif (!($g_new_password && $g_password_again)) {
        echo "Lütfen yeni şifrelerinizi giriniz";
    }
    else {
        $sorgu = $db->prepare('UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ? WHERE email = ? && password = ?');
        $guncelle = $sorgu->execute([$g_first_name,$g_last_name,$g_email,md5($g_new_password),$_SESSION['user']["email"],$_SESSION['user']["password"]]);
        if ($guncelle) {
            echo "Güncelleme başarılı...";
            $kullanici=$db->prepare('SELECT * FROM users WHERE email = ? && password = ?');
            $kullanici->execute([$g_email,md5($g_new_password)]);
            $kullaniciBilgileri=$kullanici->fetch();
            $_SESSION['user']=array("ıd"=>$kullaniciBilgileri["ıd"],"first_name"=>$kullaniciBilgileri["first_name"],"last_name"=>$kullaniciBilgileri["last_name"],"email"=>$kullaniciBilgileri["email"],"password"=>$kullaniciBilgileri["password"]);
            header('Refresh:2;account-user-details.php');

        }
        else {
            echo "Bir hata oluştu, tekrar deneyin";
        }
    }
}

//extract($_POST); 
if ($_POST['$tiklanan']) {
    $ıd = $_POST['$tiklanan'];
    $ürün_sorgu = $db->prepare('SELECT * FROM ürünler WHERE ıd = ?');
    $ürün_sorgu->execute([$ıd]);
    $ürün = $ürün_sorgu->fetch();
    $ürün_ıd = $ürün["ıd"];
    $ürün_adi = $ürün["urun_adi"];
    $ürün_stok = $ürün["urun_stok"];
    $ürün_resim = $ürün["urun_resim"];
    
    $cart_sorgu = $db->prepare('SELECT * FROM cart WHERE user_ıd = ? && product_ıd = ?');
    $cart_sorgu->execute([$_SESSION['user']["ıd"],$ıd]);
    $cart = $cart_sorgu->fetch();
    
    //print_r($cart);
        if ($cart['product_ıd'] != $ıd) {
            $sepet_sorgu = $db->prepare('INSERT INTO cart SET product_name = ?, price = 20, user_ıd = ?, product_image = ?,quantity = 1, product_ıd = ?');
            $sorgu_sonucu = $sepet_sorgu->execute([$ürün_adi,$_SESSION['user']["ıd"],$ürün_resim,$ürün_ıd]);
        }
        if ($cart['product_ıd'] == $ıd)  {
            $new_quantity = $cart['quantity'] + 1;
            $sepet_sorgu = $db->prepare('UPDATE cart SET product_name = ?, price = 20, user_ıd = ?, product_image = ?, quantity = ?, product_ıd = ? WHERE product_ıd = ? && user_ıd = ?');
            $sorgu_sonucu = $sepet_sorgu->execute([$ürün_adi,$_SESSION['user']["ıd"],$ürün_resim,$new_quantity,$ıd,$ıd,$_SESSION['user']["ıd"]]);
        
    }
    if ($sorgu_sonucu) {
        echo "Ürün Sepete Eklendi!";
    }
    else {
        echo "Hata!";
    }

}
else {
    //echo "gelmiyor";
}

if ($_POST['$user_id']) {
    $user_ıd = $_POST['$user_id'];
    //echo $user_ıd;

    $cart_sorgu = $db->prepare('SELECT * FROM cart WHERE user_ıd = ?');
    $cart_sorgu->execute([$user_ıd]);
    $count = $cart_sorgu->rowCount();
    $cart = $cart_sorgu->fetchAll();

    $toplam = 0;
    foreach ($cart as $product) {
        $toplam += $product['price']*$product['quantity'];
    }
    
    
        //echo $product['product_name'];
        

        
        
        echo '<a href="javascript:;">
		    <div class="cart-header">
			    <p class="cart-header-title mb-0">'.$count.' ITEMS</p>
				<p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
			</div>
		</a>
	    <div class="cart-list">';
        foreach ($cart as $product) {
        echo '<a class="dropdown-item" href="javascript:;">
				<div class="d-flex align-items-center">
					<div class="flex-grow-1">
					<h6 class="cart-product-title">'.$product['product_name'].'</h6>
					<p class="cart-product-price">'.$product['quantity'].' X '.$product['price'].'</p>
					</div>
					<div class="position-relative">
					<div class="cart-product-cancel position-absolute"><i onclick="productcancel('.$product['ıd'],$user_id.')" id="'.$product['ıd'].'" class="bx bx-x"></i>
					</div>
					<div class="cart-product">
					<img src="'.$product['product_image'].'" class="" alt="product image">
					</div>
					</div>
				</div>
			</a>';
            
        }
		echo '</div>
                <a href="javascript:;">
			    <div class="text-center cart-footer d-flex align-items-center">
			        <h5 class="mb-0">TOTAL</h5>
			        <h5 class="mb-0 ms-auto">$'.$toplam.'</h5>
			    </div>
			</a>
			<div class="d-grid p-3 border-top">	<a href="javascript:;" class="btn btn-dark btn-ecomm">CHECKOUT</a>
			</div>';
    }
        //echo '<h6 class="cart-product-title">'.$cart['product_name'].'</h6>';


if ($_POST['$id']) {
    $id = $_POST['$id'];
    $cart_delete_sorgu = $db->prepare('DELETE FROM cart WHERE ıd = ?');
    $cart_delete_sorgu->execute([$id]);
    if ($cart_delete_sorgu) {
        
        if ($_POST['$user_id']) {
            $user_ıd = $_POST['$user_id'];
            //echo $user_ıd;
        
            $cart_sorgu = $db->prepare('SELECT * FROM cart WHERE user_ıd = ?');
            $cart_sorgu->execute([$user_ıd]);
            $count = $cart_sorgu->rowCount();
            $cart = $cart_sorgu->fetchAll();
        
            $toplam = 0;
            foreach ($cart as $product) {
                $toplam += $product['price']*$product['quantity'];
            }
            
            
                //echo $product['product_name'];
                
        
                
                
                echo '<a href="javascript:;">
                    <div class="cart-header">
                        <p class="cart-header-title mb-0">'.$count.' ITEMS</p>
                        <p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
                    </div>
                </a>
                <div class="cart-list">';
                foreach ($cart as $product) {
                echo '<a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                            <h6 class="cart-product-title">'.$product['product_name'].'</h6>
                            <p class="cart-product-price">'.$product['quantity'].' X '.$product['price'].'</p>
                            </div>
                            <div class="position-relative">
                            <div class="cart-product-cancel position-absolute"><i onclick="productcancel('.$product['ıd'],$user_id.')" id="'.$product['ıd'].'" class="bx bx-x"></i>
                            </div>
                            <div class="cart-product">
                            <img src="'.$product['product_image'].'" class="" alt="product image">
                            </div>
                            </div>
                        </div>
                    </a>';
                    
                }
                echo '</div>
                        <a href="javascript:;">
                        <div class="text-center cart-footer d-flex align-items-center">
                            <h5 class="mb-0">TOTAL</h5>
                            <h5 class="mb-0 ms-auto">$'.$toplam.'</h5>
                        </div>
                    </a>
                    <div class="d-grid p-3 border-top">	<a href="javascript:;" class="btn btn-dark btn-ecomm">CHECKOUT</a>
                    </div>';
            }
    }
    else {
        echo "silinemedi";
    }
}

if (isset($_POST['$product_id'])) {
    $product_ıd = $_POST['$product_id'];
    $ürün_detay_sorgu = $db->prepare('SELECT * FROM ürünler WHERE ıd = ?');
    $ürün_detay_sorgu->execute([$_POST['$product_id']]);
    $ürün_detay = $ürün_detay_sorgu->fetch();
    //print_r($ürün_detay);
    echo $ürün_detay['urun_adi'];
    
}
?>