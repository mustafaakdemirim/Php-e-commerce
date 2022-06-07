<?php 
require_once('baglan.php');
ob_start();
session_start();

if (isset($_POST['giris'])) {
    $eposta=$_POST['eposta'];
    $sifre=$_POST['sifre'];
    $kullanici=$db->prepare('SELECT * FROM admin WHERE email = ? && password = ?');
    $kullanici->execute([$eposta,md5($sifre)]);
    $kullaniciBilgileri=$kullanici->fetch();
    $_SESSION['admin']=array("ıd"=>$kullaniciBilgileri["ıd"],"name"=>$kullaniciBilgileri["name"],"email"=>$kullaniciBilgileri["email"],"password"=>$kullaniciBilgileri["password"]);
    
            //echo $kullaniciBilgileri["first_name"];
    if (!$eposta) {
        echo "Lütfen epostanızı giriniz!";
    }
    elseif (!$sifre) {
        echo "Lütfen şifrenizi giriniz!";
    }
    else {
        $kullanici_sor = $db->prepare('SELECT * FROM admin WHERE email = ? && password = ?');
        $kullanici_sor->execute([$eposta,md5($sifre)]);
        //$kullaniciBilgileri=$kullanici_sor->fetchAll(PDO::FETCH_ASSOC);
        $say = $kullanici_sor->rowCount();
        if ($say==1) {
            $_SESSION['admin']['email']=$eposta;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz...";
            //echo $kullaniciBilgileri['first_name'];
            header('Refresh:2,index.php');
        }
        else {
            echo "Bir hata oluştu, tekrar deneyin";
        }
    }
}


if ($_POST['$id']) {
    $id = $_POST['$id'];
    $cart_delete_sorgu = $db->prepare('DELETE FROM ürünler WHERE ıd = ?');
    $cart_delete_sorgu->execute([$id]);
    if ($cart_delete_sorgu) {
        $komut=$db->prepare('SELECT * FROM ürünler');
        $komut->execute();
        $ürünler = $komut->fetchAll(PDO::FETCH_OBJ);

        foreach ($ürünler as $ürün) {
            
        echo '<?php foreach ($ürünler as $ürün) {?>
													
												
            <tr>
                <td>
                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src="'.$ürün->urun_resim.'">
                </td>
                <td>'.$ürün->urun_adi.'</td>
                <td>
                    '.$ürün->urun_stok.'
                </td>
                <td class="text-center">
                    <span class="label text-muted d-flex"><div class="dot-label bg-gray-300 mr-1"></div>Inactive</span>
                </td>
                <td>
                    <a href="#">mila@kunis.com</a>
                </td>
                <td>
                    <!--<a href="#" class="btn btn-sm btn-primary">
                        <i class="las la-search"></i>
                    </a>-->
                    <a href="#modaldemo8" onclick="updateProduct(<?= $ürün->ıd ?>)" class="modal-effect btn btn-sm btn-info" data-effect="effect-fall" data-toggle="modal">
					<i class="las la-pen"></i>
					</a>
                    <a onclick="productcancel('.$ürün->ıd.')" class="btn btn-sm btn-danger">
                        <i class="las la-trash"></i>
                    </a>
                </td>
            </tr>
        <?php }?>';
        }
    }
    else {
        echo "Silinemedi";
    }

    
}


if ($_POST['$product_id']) {
    $komut=$db->prepare('SELECT * FROM ürünler WHERE ıd = ?');
    $komut->execute([$_POST['$product_id']]);
    $ürün = $komut->fetch();

    echo '<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title"><?php  ?></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<h6>Güncelle</h6>
                                <!--<form action"#" id="form" enctype="multipart/form-data" class="form-horizontal" onsubmit="return window.alert("geldi");">-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="urun-adi" name="urun_adi" value="'.$ürün['urun_adi'].'">
                                        <input type="text" style="display : none;" class="form-control" id="ıd" name="ıd" value="'.$ürün['ıd'].'">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="urun-stok" name="urun_stock" value="'.$ürün['urun_stok'].'">
                                    </div>
                                    <div class="input-group file-browser">
												<input type="text" class="form-control browse-file" placeholder="choose" readonly>
												<label class="input-group-btn">
													<span class="btn btn-default">
														Browse <input type="file" name="resim" id="dosya" style="display: none;" multiple>
													</span>
												</label>
											</div>
                                <!--</form>-->
							</div>
							<div class="modal-footer">
								<button onclick="güncelle('.$ürün['ıd'].')" type="submit" data-dismiss="modal" class="btn ripple btn-primary" >Gönder</button>
								<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
							</div>
						</div>
					</div>';
}
//href="#modaldemo8" 

if ($_POST['$ıd']){
    
    $g_ıd = $_POST['$ıd'];
    
    $g_product_name = $_POST['urun_adi'];
    $g_stock = $_POST['urun_stock'];
    
    
    $hatalar = array();
    $dosya_adi = $_FILES["resim"]["name"];
    
    $dosya_boyutu = $_FILES["resim"]["size"];
    $gecici_yol = $_FILES["resim"]["tmp_name"];
    $dosta_tipi = $_FILES["resim"]["type"];
    $uzanti = strtolower(end(explode('.',$_FILES["resim"]["name"])));

    $tip = array("jpeg","jpg","png");
    
    if(in_array($uzanti,$tip) === false){
        $hatalar = "Sadece JPEG ve PNG türünde dosyalar yükleyebilirsiniz.";
    }
    
    if($dosya_boyutu > 2097152){
        $hatalar = 'Maksimum Dosya Boyutu 2 MB olmalıdır.';
    } 
    
    if(empty($hatalar) == true){
        move_uploaded_file($gecici_yol,"/Applications/XAMPP/xamppfiles/htdocs/demo/assets/images/products/".$dosya_adi);
    }
    else{
        print_r($hatalar);
    }
        $resim_yolu = "assets/images/products/".$dosya_adi;
        $sorgu = $db->prepare('UPDATE ürünler SET urun_adi = ?, urun_stok = ?, urun_resim = ? WHERE ıd = ?');
        $guncelle = $sorgu->execute([$g_product_name,$g_stock,$resim_yolu,$g_ıd]);
        $count = $sorgu->rowCount();
        if ($count>0) {
            $komut=$db->prepare('SELECT * FROM ürünler');
            $komut->execute();
            $ürünler = $komut->fetchAll(PDO::FETCH_OBJ);
            foreach ($ürünler as $ürün) {
                
            echo '<?php foreach ($ürünler as $ürün) {?>
                                                        
                                                    
                <tr>
                    <td>
                        <img alt="avatar" class="rounded-circle avatar-md mr-2" src="..\\'.$ürün->urun_resim.'">
                    </td>
                    <td>'.$ürün->urun_adi.'</td>
                    <td>
                        '.$ürün->urun_stok.'
                    </td>
                    <td class="text-center">
                        <span class="label text-muted d-flex"><div class="dot-label bg-gray-300 mr-1"></div>Inactive</span>
                    </td>
                    <td>
                        <a href="#">mila@kunis.com</a>
                    </td>
                    <td>
                        <!--<a href="#" class="btn btn-sm btn-primary">
                            <i class="las la-search"></i>
                        </a>-->
                        <a href="#modaldemo8" onclick="updateProduct(<?= $ürün->ıd ?>)" class="modal-effect btn btn-sm btn-info" data-effect="effect-fall" data-toggle="modal">
                        <i class="las la-pen"></i>
                        </a>
                        <a onclick="productcancel('.$ürün->ıd.')" class="btn btn-sm btn-danger">
                            <i class="las la-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php }?>';
            }
        }
}
if ($_POST['y_urun_adi']) {
    
    $product_name = $_POST['y_urun_adi'];
    $stock = $_POST['y_urun_stock'];

    $hatalar = array();
    $dosya_adi = $_FILES["y_resim"]["name"];
    
    $dosya_boyutu = $_FILES["y_resim"]["size"];
    $gecici_yol = $_FILES["y_resim"]["tmp_name"];
    $dosta_tipi = $_FILES["y_resim"]["type"];
    $uzanti = strtolower(end(explode('.',$_FILES["y_resim"]["name"])));

    $tip = array("jpeg","jpg","png");
    
    if(in_array($uzanti,$tip) === false){
        $hatalar = "Sadece JPEG ve PNG türünde dosyalar yükleyebilirsiniz.";
    }
    
    if($dosya_boyutu > 2097152){
        $hatalar = 'Maksimum Dosya Boyutu 2 MB olmalıdır.';
    } 
    
    if(empty($hatalar) == true){
        move_uploaded_file($gecici_yol,"/Applications/XAMPP/xamppfiles/htdocs/demo/assets/images/products/".$dosya_adi);
    }
    else{
        print_r($hatalar);
    }
        $resim_yolu = "assets/images/products/".$dosya_adi;
        $sorgu = $db->prepare('INSERT INTO ürünler SET urun_adi = ?, urun_stok = ?, urun_resim = ?');
        $guncelle = $sorgu->execute([$product_name,$stock,$resim_yolu]);
        $count = $sorgu->rowCount();
        if ($count>0) {
            $komut=$db->prepare('SELECT * FROM ürünler');
            $komut->execute();
            $ürünler = $komut->fetchAll(PDO::FETCH_OBJ);
            foreach ($ürünler as $ürün) {
                
            echo '<?php foreach ($ürünler as $ürün) {?>
                                                        
                                                    
                <tr>
                    <td>
                        <img alt="avatar" class="rounded-circle avatar-md mr-2" src="..\\'.$ürün->urun_resim.'">
                    </td>
                    <td>'.$ürün->urun_adi.'</td>
                    <td>
                        '.$ürün->urun_stok.'
                    </td>
                    <td class="text-center">
                        <span class="label text-muted d-flex"><div class="dot-label bg-gray-300 mr-1"></div>Inactive</span>
                    </td>
                    <td>
                        <a href="#">mila@kunis.com</a>
                    </td>
                    <td>
                        <!--<a href="#" class="btn btn-sm btn-primary">
                            <i class="las la-search"></i>
                        </a>-->
                        <a href="#modaldemo8" onclick="updateProduct(<?= $ürün->ıd ?>)" class="modal-effect btn btn-sm btn-info" data-effect="effect-fall" data-toggle="modal">
                        <i class="las la-pen"></i>
                        </a>
                        <a onclick="productcancel('.$ürün->ıd.')" class="btn btn-sm btn-danger">
                            <i class="las la-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php }?>';
            }
        }
}
//if ($_FILES["resim"]) {
    
  //  echo "girdi";
    //$resim = $_FILES["resim"];
    //$hatalar = array();
    //$dosya_adi = $_FILES["resim"]["name"];
    //$dosya_boyutu = $_FILES["resim"]["size"];
    //$gecici_yol = $_FILES["resim"]["tmp_name"];
    //$dosta_tipi = $_FILES["resim"]["type"];
    //$uzanti = strtolower(end(explode('.',$_FILES["resim"]["name"])));

    //$tip = array("jpeg","jpg","png");
    
    //if(in_array($uzanti,$tip) === false){
    //    $hatalar = "Sadece JPEG ve PNG türünde dosyalar yükleyebilirsiniz.";
    //}
    
    //if($dosya_boyutu > 2097152){
    //    $hatalar = 'Maksimum Dosya Boyutu 2 MB olmalıdır.';
    //} 
    
    //if(empty($hatalar) == true){
    //    move_uploaded_file($gecici_yol,"assets/images/products/" . $dosya_adi);
    //    move_uploaded_file($gecici_yol,"/Applications/XAMPP/xamppfiles/htdocs/demo/assets/images/products/" . $dosya_adi);
     //   echo "Başarılı";
    //}else{
    //    print_r($hatalar);
    //}
//}

//if ($_FILES["resim"]) {
  //  echo $_FILES["resim"]["name"];
//}


?>
