<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Panah Cakrawala || Beranda</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url('js/jquery.min.js');?>"></script>
<!-- //js -->
<!-- cart -->
	<script src="<?php echo base_url('js/simpleCart.min.js');?>"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery-ui.css');?>">
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-3.1.1.min.js');?>"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="<?php echo base_url('css/animate.min.css');?>" rel="stylesheet">
<script src="<?php echo base_url('js/wow.min.js');?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">panahcakrawala@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>082 <span>331</span> <span>468</span> 555</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.html">Panah <span>Cakrawala</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active" > <a href="<?php echo base_url(); ?>" class="act">Beranda</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Penangkal Petir <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6><a href="<?php echo base_url().'index.php/MyController/show_paket_kon';  ?>">Konvensional</a></h6>
												<li><a href="<?php echo base_url().'index.php/MyController/show_detail_kon/kon_1';  ?>">Paket 1 Tombak</a></li>
												<li><a href="<?php echo base_url().'index.php/MyController/show_detail_kon/kon_2';  ?>">Paket 2 Tombak</a></li>
												<li><a href="<?php echo base_url().'index.php/MyController/show_detail_kon/kon_3';  ?>">Paket 3 Tombak</a></li>

											</ul>
										</div>
										<div class="col-sm-8">
												<ul class="multi-column-dropdown">
													<h6><a href="<?php echo base_url().'index.php/MyController/show_paket_el';  ?>">Elektrostatis</a></h6>
													<div class="col-sm-6">
													<ul>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_gent35';?>">Paket GENT T35 35 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_gent175';?>">Paket GENT T75 75 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_gent150';?> ">Paket GENT T150 150 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_guardianCat1';?>">Paket GUARDIAN Tipe LPI CAT 1</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_guardianCat2';?>">Paket GUARDIAN Tipe LPI CAT 2</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_guardianCat3';?>">Paket GUARDIAN Tipe LPI CAT 3</a></li>
													</ul>
													</div>

													<div class="col-sm-6">
													<ul>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_kurn85';?>">Paket KURN 85 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_kurn150';?> ">Paket KURN 150 Meter</a></li>

													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_thomas';?>">Paket THOMAS 100 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_viking70';?>">Paket VIKING V3 70 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_viking120';?>">Paket VIKING V6 120 Meter</a></li>
													</ul>
													</div>
												</ul>

										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="#footer">Tentang Kami</a></li>
							<li><a href="#footer">Kontak</a></li>
						</ul>
					</div>
					</nav>
				</div>

				<div class="header-right">
					<div class="box_1">
						<a href="#">
							<h3> <div >
								<img src="<?php echo $this->session->userdata('usericon') ;?>" alt="" />
								<?php echo $this->session->userdata('first_name') ." ". $this->session->userdata('last_name'); ?></div>
							</h3>
						</a>
						<p><a href="<?php echo base_url().'index.php/MyController/logout' ;?>" class="simpleCart_empty"><?php echo $this->session->userdata('logout') ;?></a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Panah Cakrawala</h3>
				<h4>Tersebar di <span>13++ <i>Kota</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Memiliki Tenaga Yang Berpengalaman</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Memberikan Layanan Produk dan Jasa Terbaik</p>
								</div>
							</div> </article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Kepuasan Konsumen Adalah Tujuan Utama Kami</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="<?php echo base_url('js/jquery.wmuSlider.js');?>"></script>
					<script>
						$('.example1').wmuSlider();
					</script>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="<?php echo base_url('images/a1.jpg');?>" alt=" " class="img-responsive" />
							<a href="<?php echo base_url().'index.php/MyController/show_paket_kon';  ?>">
							<figcaption>
								<h3>Paket <span>Tombak</span><i> Konvensional</i></h3>
								<div>
									<p>Splitzen Tembaga</p>
									<p>Pipa Penyangga Splitzer</p>
									<p>And More...</p>
								</div>
							</figcaption>
							</a>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_thomas';?>">
						<div class="banner-bottom-grid-left-grid1">
							<img src="<?php echo base_url('images/a4.jpg');?>"  alt=" " class="img-responsive" />
						</div>
						</a>
						<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_thomas';?>">
							<div class="banner-bottom-grid-left1-position">
								<div class="banner-bottom-grid-left1-pos1">
								<p><font color = "orange">Paket Thomas</p>
								</div>
							</div>
						</a>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_gent35';?>">
							<img src="<?php echo base_url('images/a5.jpg');?>"  alt=" " class="img-responsive" />
							</a>
						</div>
						<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_gent35';?>">
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p><font color = "orange">Paket Gent T35 Meter</p>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_viking70';?>">
								<img src="<?php echo base_url('images/a3.jpg');?>" alt=" " class="img-responsive" />
							</a>
						</div>
						<a href="<?php echo base_url().'index.php/MyController/show_detail_el/el_viking70';?>">
						<div class="grid-left-grid1-pos">
							<p>Paket VIKING <span>V3 70 Meter</span></p>
						</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->

<section id=footer>
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
				<h3>About Us</h3>
				<p>CV. PANAH CAKRAWALA adalah perusahaan baru yang terdiri dari orang orang yang berpengalaman di bidangnya yaitu pemasangan instalasi listrik dan instalasi penangkal petir
					<span>Pemasangan instalasi listrik dari awal pembangunan sampai selesai mulai rumah tinggal sampai dengan perkantoran, begitu juga dengan instalasi penangkal petir kami juga spesialis dalam pemasangan penangkal petir baik itu external maupun internal</span>
			</p>
			</div>
			<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
				<h3>Visi Perusahaan</h3>
				<p>Memberikan kenyamanan bagi konsumen yaitu dalam hal perlindungan terhadap sambaran petir dan bahaya yang ditimbulkannya, menjadikan perusahaan kami menjadi pilihan utama masyarakat di seluruh indonesia dalam hal pemasangan listrik maupun pemasangan penangkal petir
			</p>
			</div>
			<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
				<h3>Misi Perusahaan</h3>
				<p>Memberikan perlindungan terhadap bahaya sambaran petir dan induksinya, menjadikan kami sebagai mitra terpercaya bagi masyarakat seluruh indonesia.
			</p>
			</div>
			<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Bumi Wonorejo Asri A3/4<span>Rungkut Surabaya.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:panahcakrawala@gmail.com">panahcakrawala@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6282 331 468 555</li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6285 330 377 287</li>
				</ul>
			</div>
		<div class="clearfix"> </div>
		<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
			<h2><a href="index.html">PANAH CAKRAWALA<span>penangkal petir</span></a></h2>
		</div>
	</div>
</div>
</div>
</section>
<!-- //footer -->
</body>
</html>
