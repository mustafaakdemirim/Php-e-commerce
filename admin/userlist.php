<?php 
require_once('baglan.php');
require_once('islem.php');

$komut=$db->prepare('SELECT * FROM ürünler');
$komut->execute();
$ürünler = $komut->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/boxed.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-header opened -->
			<div class="main-header nav nav-item hor-header">
				<div class="container">
					<div class="main-header-left ">
						<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
						<a class="header-brand" href="index.html">
							<img src="assets/img/brand/logo-white.png" class="desktop-dark">
							<img src="assets/img/brand/logo.png" class="desktop-logo">
							<img src="assets/img/brand/favicon.png" class="desktop-logo-1">
							<img src="assets/img/brand/favicon-white.png" class="desktop-logo-dark">
						</a>
						<div class="main-header-center  ml-4">
							<input class="form-control" placeholder="Search for anything..." type="search"><button class="btn"><i class="fe fe-search"></i></button>
						</div>
					</div><!-- search -->
					<div class="main-header-right">
						<ul class="nav">
							<li class="">
								<div class="dropdown  nav-itemd-none d-md-flex">
									<a href="#" class="d-flex  nav-item nav-link pr-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
										<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="assets/img/flags/us_flag.jpg" alt="img"></span>
										<div class="my-auto">
											<strong class="mr-2 ml-2 my-auto">English</strong>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
										<a href="#" class="dropdown-item d-flex ">
											<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/french_flag.jpg" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">French</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/germany_flag.jpg" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Germany</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/italy_flag.jpg" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Italy</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/russia_flag.jpg" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Russia</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/spain_flag.jpg" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">spain</span>
											</div>
										</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-link" id="bs-example-navbar-collapse-1">
								<form class="navbar-form" role="search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-default nav-link resp-btn">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
											</button>
										</span>
									</div>
								</form>
							</div>
							<div class="dropdown nav-item main-header-message ">
								<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary text-left">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
											<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-image-src="assets/img/faces/3.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Petey Cruiser</h5>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
												<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/2.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Jimmy Changa</h5>
												</div>
												<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
												<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 06 01:12 AM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/9.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Graham Cracker</h5>
												</div>
												<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
												<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 25 10:35 AM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/12.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Donatella Nobatti</h5>
												</div>
												<p class="mb-0 desc">Here are some products ...</p>
												<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 12 05:12 PM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/5.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Anne Fibbiyon</h5>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
												<p class="time mb-0 text-left float-left ml-2 mt-2">Jan 29 03:16 PM</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="text-center">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary text-left">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications</h6>
											<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
									</div>
									<div class="main-notification-list Notification-scroll">
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-pink">
												<i class="la la-file-alt text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New files available</h5>
												<div class="notification-subtext">10 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3" href="#">
											<div class="notifyimg bg-purple">
												<i class="la la-gem text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Updates Available</h5>
												<div class="notification-subtext">2 days ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-success">
												<i class="la la-shopping-basket text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<div class="notification-subtext">1 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-warning">
												<i class="la la-envelope-open text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New review received</h5>
												<div class="notification-subtext">1 day ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-danger">
												<i class="la la-user-check text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">22 verified registrations</h5>
												<div class="notification-subtext">2 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-primary">
												<i class="la la-check-circle text-white"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Project has been approved</h5>
												<div class="notification-subtext">4 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="assets/img/faces/6.jpg"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="assets/img/faces/6.jpg" class=""></div>
											<div class="ml-3 my-auto">
												<h6>Petey Cruiser</h6><span>Premium Member</span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
									<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
									<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
									<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
									<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
									<a class="dropdown-item" href="page-signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->

			<!--Horizontal-main -->
			<div class="sticky">
				<div class="horizontal-main hor-menu clearfix side-header">
					<div class="horizontal-mainwrapper container clearfix">
						<!--Nav-->
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="index.php" class=""><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>Dashboard</a></li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg> Charts<i class="fe fe-chevron-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="chart-morris.html" class="slide-item">Morris Charts</a></li>
										<li aria-haspopup="true"><a href="chart-flot.html" class="slide-item">Flot Charts</a></li>
										<li aria-haspopup="true"><a href="chart-chartjs.html" class="slide-item">ChartJS</a></li>
										<li aria-haspopup="true"><a href="chart-echart.html" class="slide-item">Echart</a></li>
										<li aria-haspopup="true"><a href="chart-sparkline.html" class="slide-item">Sparkline</a></li>
										<li aria-haspopup="true"><a href="chart-peity.html" class="slide-item"> Chart-peity</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="userlist.php" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> Ürünler<!--<i class="fe fe-chevron-down horizontal-icon"></i>--></a>
									<!--<ul class="sub-menu">
										<li aria-haspopup="true"><a href="products.html" class="slide-item"> Products</a></li>
										<li aria-haspopup="true"><a href="product-details.html" class="slide-item">Product-Details</a></li>
										<li aria-haspopup="true"><a href="product-cart.html" class="slide-item">Shopping Cart</a></li>
									</ul>-->
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg> Elements<i class="fe fe-chevron-down horizontal-icon"></i></a>
									<div class="horizontal-megamenu clearfix">
										<div class="container">
											<div class="mega-menubg hor-mega-menu">
												<div class="row">
													<div class="col-lg-3 col-md-12 col-xs-12 link-list">

														<ul>
															<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Elements</h3></li>
															<li aria-haspopup="true"><a href="alerts.html" class="slide-item">Alerts</a></li>
															<li aria-haspopup="true"><a href="avatar.html" class="slide-item">Avatar</a></li>
															<li aria-haspopup="true"><a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a></li>
															<li aria-haspopup="true"><a href="buttons.html" class="slide-item">Buttons</a></li>
															<li aria-haspopup="true"><a href="badge.html" class="slide-item">Badge</a></li>
															<li aria-haspopup="true"><a href="dropdown.html" class="slide-item">Dropdown</a></li>
															<li aria-haspopup="true"><a href="thumbnails.html" class="slide-item">Thumbnails</a></li>
															<li aria-haspopup="true"><a href="images.html" class="slide-item">Images</a></li>
															<li aria-haspopup="true"><a href="list-group.html" class="slide-item">List Group</a></li>

														</ul>
													</div>
													<div class="col-lg-3 col-md-12 col-xs-12 link-list">
														<ul>
															<li aria-haspopup="true"><a href="navigation.html" class="slide-item">Navigation</a></li>
															<li aria-haspopup="true"><a href="pagination.html" class="slide-item">Pagination</a></li>
															<li aria-haspopup="true"><a href="popover.html" class="slide-item">Popover</a></li>
															<li aria-haspopup="true"><a href="progress.html" class="slide-item">Progress</a></li>
															<li aria-haspopup="true"><a href="spinners.html" class="slide-item">Spinners</a></li>
															<li aria-haspopup="true"><a href="media-object.html" class="slide-item">Media Object</a></li>
															<li aria-haspopup="true"><a href="typography.html" class="slide-item">Typography</a></li>
															<li aria-haspopup="true"><a href="tooltip.html" class="slide-item">Tooltip</a></li>
															<li aria-haspopup="true"><a href="toast.html" class="slide-item">Toast</a></li>
															<li aria-haspopup="true"><a href="tags.html" class="slide-item">Tags</a></li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-12 col-xs-12 link-list">
														<ul>
															<li aria-haspopup="true"><a href="tabs.html" class="slide-item">Tabs</a></li>
															<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Apps</h3></li>
															<li aria-haspopup="true"><a href="cards.html" class="slide-item">Cards</a></li>
															<li aria-haspopup="true"><a href="darggablecards.html" class="slide-item">Darggablecards</a></li>
															<li aria-haspopup="true"><a href="rangeslider.html" class="slide-item">Range-slider</a></li>
															<li aria-haspopup="true"><a href="calendar.html" class="slide-item">Calendar</a></li>
															<li aria-haspopup="true"><a href="contacts.html" class="slide-item">Contacts</a></li>
															<li aria-haspopup="true"><a href="image-compare.html" class="slide-item">Image-compare</a></li>
															<li aria-haspopup="true"><a href="notification.html" class="slide-item">Notification</a></li>
															<li aria-haspopup="true"><a href="widget-notification.html" class="slide-item">Widget-notification</a></li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-12 col-xs-12 link-list">
														<ul>
															<li aria-haspopup="true"><a href="treeview.html" class="slide-item">Treeview</a></li>
															<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Icons <span class="badge badge-danger ">New</span></h3></li>
															<li aria-haspopup="true"><a href="icons.html" class="slide-item">Icons</a></li>
															<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Maps</h3></li>
															<li aria-haspopup="true"><a href="map-leaflet.html" class="slide-item">Mapel Maps</a></li>
															<li aria-haspopup="true"><a href="map-vector.html" class="slide-item">Vector Maps</a></li>

															<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Tables</h3></li>
															<li aria-haspopup="true"><a href="table-basic.html" class="slide-item">Basic Tables</a></li>
															<li aria-haspopup="true"><a href="table-data.html" class="slide-item">Data Tables</a></li>

														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg> Advanced UI <i class="fe fe-chevron-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="accordion.html" class="slide-item"> Accordion</a></li>
										<li aria-haspopup="true"><a href="carousel.html" class="slide-item" >Carousel</a></li>
										<li aria-haspopup="true"><a href="collapse.html" class="slide-item">Collapse</a></li>
										<li aria-haspopup="true"><a href="modals.html" class="slide-item">Modals</a></li>
										<li aria-haspopup="true"><a href="timeline.html" class="slide-item">Timeline</a></li>
										<li aria-haspopup="true"><a href="sweet-alert.html" class="slide-item">Sweet Alert</a></li>
										<li aria-haspopup="true"><a href="rating.html" class="slide-item">Ratings</a></li>
										<li aria-haspopup="true"><a href="counters.html" class="slide-item">Counters</a></li>
										<li aria-haspopup="true"><a href="search.html" class="slide-item">Search</a></li>
										<li aria-haspopup="true"><a href="userlist.html" class="slide-item"> Userlist</a></li>
										<li aria-haspopup="true"><a href="blog.html" class="slide-item">Blog</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg> Utilities <i class="fe fe-chevron-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="background.html" class="slide-item">Background</a></li>
										<li aria-haspopup="true"><a href="border.html" class="slide-item">Border</a></li>
										<li aria-haspopup="true"><a href="display.html" class="slide-item">Display</a></li>
										<li aria-haspopup="true"><a href="flex.html" class="slide-item">Flex</a></li>
										<li aria-haspopup="true"><a href="height.html" class="slide-item">Height</a></li>
										<li aria-haspopup="true"><a href="margin.html" class="slide-item">Margin</a></li>
										<li aria-haspopup="true"><a href="padding.html" class="slide-item">Padding</a></li>
										<li aria-haspopup="true"><a href="position.html" class="slide-item">Position</a></li>
										<li aria-haspopup="true"><a href="width.html" class="slide-item">Width</a></li>
										<li aria-haspopup="true"><a href="extras.html" class="slide-item">Extras</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g><rect fill="none"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg>Pages <i class="fe fe-chevron-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="profile.html" class="slide-item">Profile</a></li>
										<li aria-haspopup="true"><a href="editprofile.html" class="slide-item">Edit-profile</a></li>
										<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
											<ul class="sub-menu">
												<li aria-haspopup="true"><a href="mail.html" class="slide-item">Mail-inbox</a></li>
												<li aria-haspopup="true"><a href="mail-compose.html" class="slide-item">Mail-compose</a></li>
												<li aria-haspopup="true"><a href="mail-read.html" class="slide-item">Mail-read</a></li>
												<li aria-haspopup="true"><a href="mail-settings.html" class="slide-item">Mail-settings</a></li>
												<li aria-haspopup="true"><a href="chat.html" class="slide-item">Chat</a></li>

											</ul>
										</li>
										<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Forms</a>
											<ul class="sub-menu">
												<li aria-haspopup="true"><a href="form-elements.html" class="slide-item">Form Elements</a></li>
												<li aria-haspopup="true"><a href="form-advanced.html" class="slide-item">Advanced Forms</a></li>
												<li aria-haspopup="true"><a href="form-layouts.html" class="slide-item">Form Layouts</a></li>
												<li aria-haspopup="true"><a href="form-validation.html" class="slide-item">Form Validation</a></li>
												<li aria-haspopup="true"><a href="form-wizards.html" class="slide-item">Form Wizards</a></li>
												<li aria-haspopup="true"><a href="form-editor.html" class="slide-item">WYSIWYG Editor</a></li>
											</ul>
										</li>
										<li aria-haspopup="true"><a href="invoice.html" class="slide-item">Invoice</a></li>
										<li aria-haspopup="true"><a href="todotask.html" class="slide-item">Todotask</a></li>
										<li aria-haspopup="true"><a href="pricing.html" class="slide-item">Pricing</a></li>
										<li aria-haspopup="true"><a href="gallery.html" class="slide-item">Gallery</a></li>
										<li aria-haspopup="true"><a href="faq.html" class="slide-item">Faqs</a></li>
										<li aria-haspopup="true"><a href="empty.html" class="slide-item">Empty Page</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="widgets.html" class=""><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> Widgets </a></li>
								<li aria-haspopup="true"><a href="logout.php" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg> Çıkış <!--<i class="fe fe-chevron-down horizontal-icon"></i>--></a>
									<ul class="sub-menu">
										<!--<li aria-haspopup="true"><a href="signin.html" class="slide-item">Sign In</a></li>
										<li aria-haspopup="true"><a href="signup.html" class="slide-item">Sign Up</a></li>
										<li aria-haspopup="true"><a href="forgot.html" class="slide-item">Forgot Password</a></li>
										<li aria-haspopup="true"><a href="reset.html" class="slide-item">Reset Password</a></li>
										<li aria-haspopup="true"><a href="lockscreen.html" class="slide-item">Lock screen</a></li>
										<li aria-haspopup="true"><a href="underconstruction.html" class="slide-item">UnderConstruction</a></li>
										<li aria-haspopup="true"><a href="404.html" class="slide-item">404 Error</a></li>
										<li aria-haspopup="true"><a href="500.html" class="slide-item">500 Error</a></li>-->
									</ul>
								</li>
							</ul>
						</nav>
						<!--Nav-->
					</div>
				</div>
			</div>
			<!--Horizontal-main -->

			<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Userlist</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-3 mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!--Row-->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">USERS TABLE</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
								</div>
								<div style="margin: 20px;" class="card-title mg-b-0">
									<a href="#modaldemoYeni" data-effect="effect-fall" data-toggle="modal" ><button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button></a>

									<!--<a href="#modaldemo8" onclick="updateProduct(<?= $ürün->ıd ?>)" class="modal-effect btn btn-sm btn-info" data-effect="effect-fall" data-toggle="modal">
															<i class="las la-pen"></i>
														</a>-->
								</div>
								<div class="card-body">
									<div class="table-responsive border-top userlist-table">
										<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-lg-8p"><span>Ürün Adı</span></th>
													<th class="wd-lg-20p"><span></span></th>
													<th class="wd-lg-20p"><span>Stok</span></th>
													<th class="wd-lg-20p"><span>Status</span></th>
													<th class="wd-lg-20p"><span>Email</span></th>
													<th class="wd-lg-20p">Action</th>
												</tr>
											</thead>
											<tbody id="product">
												<?php foreach ($ürünler as $ürün) {?>
													
												
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="..\<?= $ürün->urun_resim ?>">
													</td>
													<td><?= $ürün->urun_adi ?></td>
													<td>
														<?= $ürün->urun_stok?>
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
														<a onclick="productcancel(<?= $ürün->ıd ?>)" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
											<?php }?>
												<!--<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/2.jpg">
													</td>
													<td>George Clooney</td>
													<td>
														12/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success mr-1"></div>Active</span>
													</td>
													<td>
														<a href="#">marlon@brando.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/13.jpg">
													</td>
													<td>Ryan Gossling</td>
													<td>
														14/06/2020
													</td>
													<td class="text-center">
														<span class="label text-danger d-flex"><div class="dot-label bg-danger mr-1"></div> Banned</span>
													</td>
													<td>
														<a href="#">jack@nicholson</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/1.jpg">
													</td>
													<td> Emma Watson</td>
													<td>
														16/06/2020
													</td>
													<td class="text-center">
														<span class="label text-warning d-flex"><div class="dot-label bg-warning mr-1"></div>Pending</span>
													</td>
													<td>
														<a href="#">jack@nicholsonm</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/12.jpg">
													</td>
													<td>Mila Kunis</td>
													<td>
														18/06/2020
													</td>
													<td class="text-center">
														<span class="label text-muted d-flex"><div class="dot-label bg-gray-300 mr-1"></div>Inactive</span>
													</td>
													<td>
														<a href="#">mila@kunis.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/4.jpg">
													</td>
													<td>Phil Watson</td>
													<td>
														23/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success mr-1"></div>active</span>
													</td>
													<td>
														<a href="#">phil@watson.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/5.jpg">
													</td>
													<td>Sonia Robertson</td>
													<td>
														25/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success mr-1"></div>active</span>
													</td>
													<td>
														<a href="#">robertson@sonia.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/7.jpg">
													</td>
													<td>Adam Hamilton</td>
													<td>
														31/06/2020
													</td>
													<td class="text-center">
														<span class="label text-danger d-flex"><div class="dot-label bg-danger mr-1"></div>Banned</span>
													</td>
													<td>
														<a href="#">mila@kunis.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/9.jpg">
													</td>
													<td>Leah Morgan</td>
													<td>
														02/07/2020
													</td>
													<td class="text-center">
														<span class="label text-warning d-flex"><div class="dot-label bg-warning mr-1"></div>pending</span>
													</td>
													<td>
														<a href="#">morganleah@.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/11.jpg">
													</td>
													<td>Amelia McDonald</td>
													<td>
														08/07/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success mr-1"></div>active</span>
													</td>
													<td>
														<a href="#">amelia23@kunis.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="assets/img/faces/17.jpg">
													</td>
													<td>Paul Molive</td>
													<td>
														12/07/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success mr-1"></div>active</span>
													</td>
													<td>
														<a href="#">paul45@kunis.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-primary">
															<i class="las la-search"></i>
														</a>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>-->
											</tbody>
										</table>
									</div>
									<ul class="pagination mt-4 mb-0 float-right">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- COL END -->
					</div>
					<!-- row closed  -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ml-auto">
							<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
								<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
								<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-blue brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-left hidden-xs d-flex ml-2">
									<div class="img_cont mr-3">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-2">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
											<i class="si si-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
											<i class="si si-camrecorder"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-toggle="dropdown" aria-expanded="true">
											<i class="si si-options-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
										</ul>
									</li>
									<li>
										<a href=""  class="" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="si si-close text-white"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">February 1st, 2019</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content bg-dark border-0 text-white">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Video call</h5>
							<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content border-0">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Voice call</h5>
							<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-success"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->
			
			<div class="modal" id="modaldemo8">
					<!--<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title"><?php  ?></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<h6>Modal Body</h6>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-primary" type="button">Save changes</button>
								<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
							</div>
						</div>
					</div>-->
				</div>

				<div class="modal" id="modaldemoYeni">
					<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content modal-content-demo">
								<div class="modal-header">
									<h6 class="modal-title"><?php  ?></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Yeni Ürün Ekle</h6>
										<div class="form-group">
											<input type="text" class="form-control" id="y-urun-adi" name="y_urun_adi" placeholder="Ürün Adı" >
										</div>
										<div class="form-group">
											<input type="number" class="form-control" id="y-urun-stok" name="y_urun_stock" placeholder="Stok" >
										</div>
										<div class="input-group file-browser">
													<input type="text" class="form-control browse-file" placeholder="choose" readonly>
													<label class="input-group-btn">
														<span class="btn btn-default">
															Browse <input type="file" name="y-resim" id="y-dosya" style="display: none;" multiple>
														</span>
													</label>
												</div>
								</div>
								<div class="modal-footer">
									<button onclick="ekle()" type="submit" data-dismiss="modal" class="btn ripple btn-primary" >Ekle</button>
									<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
								</div>
							</div>
						</div>
				</div>
			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2020 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!--Internal  Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- Internal Select2 js-->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- P-scroll js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Custom Scroll bar Js-->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Horizontalmenu js-->
		<script src="assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>

		<!-- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- custom js -->
		<script src="assets/js/custom.js"></script>
		<script>
			
			function productcancel($id){
				$.ajax({
					url: "islem.php",
					method: "POST",
					data: {$id},
					success: function(data){
						document.getElementById('product').innerHTML = data;
						//alert(data);
					}
				})
	}

	function updateProduct($product_id){

		$.ajax({
					url: "islem.php",
					method: "POST",
					data: {$product_id},
					success: function(data){
						document.getElementById('modaldemo8').innerHTML = data;
						//alert(data);
					}
				})
	}

	function güncelle($ıd){//,$urun_adi,$urun_stock){
		//window.alert("geldi");
		var urun_adi = document.getElementById('urun-adi').value;
		var urun_stock = document.getElementById('urun-stok').value;
		var post_data_obir = new FormData();
		var resim_dosya = $("#dosya")[0].files[0];
		post_data_obir.append("resim", resim_dosya);
		post_data_obir.append("$ıd",$ıd);
		post_data_obir.append("urun_adi",urun_adi);
		post_data_obir.append("urun_stock",urun_stock);
		

		$.ajax({
					url: "islem.php",
					method: "POST",
					data: post_data_obir,//{$ıd:$ıd,urun_adi:urun_adi,urun_stock:urun_stock},//,resim:resim},//urun_adi,urun_stock},//,$urun_adi,$urun_stock},
					contentType:false,
					cache:false, 
					processData:false, 
					success: function(data){
						//document.getElementById('product').innerHTML = data;
						document.getElementById('product').innerHTML=data;
						//alert(data);
					}
				})
			}

		
		function deneme(){
			var post_data_obir = new FormData();
			var resim_dosya = $("#dosya")[0].files[0];
			post_data_obir.append("resim", resim_dosya);

			// Ajax ile dosyamıza oluşturduğumuz form'u gönderelim ve alert ile dosyadan gelen çıktıyı alalım
			$.ajax(
					{
					url:'islem.php',
					method:'POST',
					data:post_data_obir,
					contentType:false,
					cache:false,
					processData:false,
						success: function (cikti)
								{
							alert(cikti);
								},
					}
				);
		}
				
				//$.ajax({
				//		url: "islem.php",
				//		method: "POST",
				//		data: new FormData(this),//{$ıd:$ıd,urun_adi:urun_adi,urun_stock:urun_stock,form:form},//{$ıd:$ıd,urun_adi:urun_adi,urun_stock:urun_stock},//,resim:resim},//urun_adi,urun_stock},//,$urun_adi,$urun_stock},
				//		contentType: false, 
				//		processData:false, 
				//		success: function(data){
							//document.getElementById('product').innerHTML = data;
				//			document.getElementById('product').innerHTML=data;
							//alert(data);
				//		}
				//	})
	
	
	

	//}



	
					

	

	

//$("#Form1").on("submit", function(event){ //infoForm id li form post edildiğinde
	//event.preventDefault();
	//$.ajax({
	//	url: "islem.php", 
	//	type: "POST",             
	//	data: (new FormData(this),$ıd),
	//	contentType: false,       
		//cache: false,             
	//	processData:false, 
	//	success: function(data) {
			//alert(data["result"]); //post sonucunu yazdir
			//console.log(data['data']); //girilen verileri console ekranina yazdır
	//		alert(data);
	//	}
	//});
//});

		function ekle(){
			
			var y_urun_adi = document.getElementById('y-urun-adi').value;
			var y_urun_stock = document.getElementById('y-urun-stok').value;
			var y_post_data_obir = new FormData();
			var y_resim_dosya = $("#y-dosya")[0].files[0];
			y_post_data_obir.append("y_resim", y_resim_dosya);
			y_post_data_obir.append("y_urun_adi",y_urun_adi);
			y_post_data_obir.append("y_urun_stock",y_urun_stock);
			$.ajax({
					url: "islem.php",
					method: "POST",
					data: y_post_data_obir,
					contentType:false,
					cache:false, 
					processData:false, 
					success: function(data){
						document.getElementById('product').innerHTML=data;
						var y_urun_adi = document.getElementById('y-urun-adi').value="";
						var y_urun_stock = document.getElementById('y-urun-stok').value="";
						//alert(data);
					}
				})
		}
		</script>
	</body>
</html>