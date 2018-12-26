<?php
	$current_page_uri = $_SERVER['REQUEST_URI'];
	$part_url = explode("/", $current_page_uri);
	$pagename = end($part_url);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nuswa - Home Page</title>
		<!-- Meta Start Here -->
		<meta charset="utf-8">
		<meta name="description" content="Nuswa-Indonesia">
		<meta name="description" content="know the future here">
		<meta name="description" content="media sosial bersama">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,sosial,unjunk,farda,avaron,future,legal,hotel,news,hot,popular,style,live">
		<meta name="author" content="Nuswa Indonesia">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Meta End Here -->
		<!-- Styles Start Here -->
		<link rel="icon" href="image/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-rating.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-nuswa-indonesia.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="css/video.res.css">
		<link rel="stylesheet" type="text/css" href="css/nuswa-home.css">
		<!-- Style End Here -->
		<!-- Javascript Start Here -->
		<script type="text/javascript" src="plugin/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="plugin/jqueryui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="plugin/jquerymobile/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript" src="plugin/owl.carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="plugin/bootstrap/bootstrap.min.js" async="" crossorigin="anonymous"></script>
		<script type="text/javascript" src="plugin/bootstrap/bootstrap-select.min.js" async="" crossorigin="anonymous"></script>
		<script type="text/javascript" src="plugin/bootstrap/bootstrap-rating.min.js" async="" crossorigin="anonymous"></script>
		<script type="text/javascript" src="plugin/jquerypriceformat/jquery.price_format.min.js"></script>
		<script type="text/javascript" src="plugin/jqueryzoom/jquery.zoom.min.js"></script>
		<script type="text/javascript" src="js/upload.js"></script><!-- Ga tau ini berguna atau engga :o -->
		<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/flot/jquery.flot.js"></script>
		<script type="text/javascript" src="js/nuswa-carousel-indicator.js" async="" crossorigin="anonymous"></script>
		<?php
			if ($pagename=='detailbrg.php') {
				echo '<script type="text/javascript" src="js/nuswa.002.premier.cr.js" async="" crossorigin="anonymous"></script>';
			}else {
				echo '<script type="text/javascript" src="js/nuswa.001.premier.cr.js" async="" crossorigin="anonymous"></script>';
			}
		?>
		<!-- Javascript End Here -->
	</head>
	<body id="body_home">
		<!-- Start Header -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container" style="padding:0px 5px;">
			<!-- start toggle Navigation -->
			<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
       	 			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="index.php">
      				<img src="image/logo.png" alt="Nuswa">Nuswa.com
      				<!-- Logo nuswa indonesia -->
      			</a>
    		</div><!-- end toggle Navigation -->
    		<!-- start navbar -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!-- Menu Utama -->
					<li><a href="pasar.php" class="btn btn-default navbar-btn btn-menu-nuswa btn-marketplace <?php if ($pagename=='pasar.php' || $pagename=='toko.php' || $pagename=='detailbrg.php' || $pagename=='detailtoko.php') { echo 'active'; } ?>">
							<span class="nf-nuswa-cart nav-font-size-junk"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-menu-nuswa">Pasar</span>
						</a>
					</li>
					<li><a href="#" class="btn btn-default navbar-btn btn-menu-nuswa ">
							<span class="nf-nuswa-profile-card nav-font-size-junk" style="font-size:16px;"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-menu-nuswa">Jasa  & Lowongan</span>
						</a>
					</li>
					<li><a href="organisasi.php" class="btn btn-default navbar-btn btn-menu-nuswa <?php if ($pagename=='organisasi.php') { echo 'active'; } ?>">
							<span class="nf-nuswa-lan nav-font-size-junk" style="font-size:16px;"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-menu-nuswa">Organisasi</span>
						</a>
					</li>
					<li><a href="dokumen.php" class="btn btn-default navbar-btn btn-menu-nuswa btn-edocuments <?php if ($pagename=='dokumen.php') { echo 'active'; } ?>">
							<span class="nf-nuswa-blue-books nav-font-size-junk" style="font-size:16px;"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-menu-nuswa">Dokumen</span>
						</a>
					</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<!-- login -->
					<li>
						<a href="#" class="btn btn-default navbar-btn btn-menu-nuswa nav-btn-login-nuswa" data-toggle="modal" data-target="#nuswa-form-login">
							<span class="nf-nuswa-gembok"></span>&nbsp;
							Masuk
						</a>
					</li>
					<li><a href="#" class="btn btn-default navbar-btn btn-menu-nuswa btn-marketplace" data-toggle="modal" data-target="#nuswa-search-modal">
						<span class="nf-nuswa-pencarianbaru nav-font-size-junk" style="font-size:16px;" data-toggle="tooltip" data-placement="bottom" title="Pencarian"></span>
						&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dropdown-nuswa"> Pencarian</span>
					</a></li>
					<li class="dropdown"><div class="btn btn-default navbar-btn btn-menu-nuswa dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<sup class="sup-nuswa" style="margin-right:-10px;">8</sup>
							<span class="nf-nuswa-chat-n nav-font-size-junk"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dropdown-nuswa"> Pesan</span>
						</div>
						<ul class="dropdown-menu nuswa-notifikasi" role="menu">
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 10 menit &nbsp;<span class="nf-nuswa-message"></span>
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 10 menit &nbsp;<span class="nf-nuswa-message"></span>
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 10 menit &nbsp;<span class="nf-nuswa-break-message" style="font-size:15px;"></span>
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#" class="nuswa-notifikasi-footer">Tampilkan Semua Pesan</a>
					    </li>
					  </ul>	
					</li>
					<li class="dropdown"><div class="btn btn-default navbar-btn btn-menu-nuswa btn-edocuments dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<sup class="sup-nuswa" style="margin-right:-10px;">8</sup>
							<span class="nf-nuswa-lonceng-n nav-font-size-junk" style="font-size:16px;"></span>
							&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dropdown-nuswa"> Pemberitahuan</span>
						</div>
						<ul class="dropdown-menu nuswa-notifikasi" role="menu">
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 15 Menit
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 15 Menit
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#">
					    		<span class="nuswa-notifikasi-photo">
									<img src="image/logo.png" alt="">
								</span>
								<span class="nuswa-notifikasi-subject">
									<span class="nuswa-notifikasi-from">
										 Lisa Wong
									</span>
									<span class="nuswa-notifikasi-time">
										 15 Menit
									</span>
								</span>
								<span class="nuswa-notifikasi-message">
									 Vivamus sed auctor nibh congue nibh...
								</span>
					    	</a>
					    </li>
					    <li>
					    	<a href="#" class="nuswa-notifikasi-footer">Tampilkan Semua Notifikasi</a>
					    </li>
					  </ul>	
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle nuswa-foto-profile" data-toggle="dropdown" role="button" aria-expanded="false" style="padding-right:25px;">
					  	<img src="image/user/004.jpg"></span><span class="text-dropdown-nuswa">&nbsp;&nbsp;Profile</span></a>
					  <ul class="dropdown-menu" role="menu" style="margin-top:6px;">
					  	<li><a href="profile.php" class="nuswa-border-left nuswa-foto-profile"><img src="image/user/004.jpg" style="border: 2px solid #fff; width: 28px; margin-right: 5px; margin-top: -4px;"> Ci OnyetCorp</a></li>
					  	<li class="divider"></li>
					    <li><a href="#" class="nuswa-border-left"><span class="nf-nuswa-price"></span> Toko Saya</a></li>
					    <li><a href="#" class="nuswa-border-left"><span class="nf-nuswa-file"></span> Dokumen Saya</a></li>
					    <li><a href="#" class="nuswa-border-left"><span class="nf-nuswa-org"></span> Organisasi Saya</a></li>
					    <li class="divider"></li>
					    <li><a href="ikhtisar-pengaturan.php" class="nuswa-border-left"><span class="nf-nuswa-gear"></span> Pengaturan</a></li>
					    <li><a href="#" class="nuswa-border-left"><span class="glyphicon glyphicon-off"></span> Keluar</a></li>
					  </ul>
					</li>
				</ul>
			</div>
			</div>
		</div><!-- End of Header -->
