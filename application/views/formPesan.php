
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pesan Paket</title>
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

<body onload="initialize()">
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:panahcakrawala@gmail.com">panahcakrawala@gmail.com</a></li>
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
							<li  > <a href="<?php echo base_url(); ?>" class="act">Beranda</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Penangkal Petir <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6><a href="<?php echo base_url().'index.php/CustControl/show_paket/konvensional';  ?>">Konvensional</a></h6>
												<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/kon_1';  ?>">Paket 1 Tombak</a></li>
												<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/kon_2';  ?>">Paket 2 Tombak</a></li>
												<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/kon_3';  ?>">Paket 3 Tombak</a></li>

											</ul>
										</div>
										<div class="col-sm-8">
												<ul class="multi-column-dropdown">
													<h6><a href="<?php echo base_url().'index.php/CustControl/show_paket/elektrostatis';  ?>">Elektrostatis</a></h6>
													<div class="col-sm-6">
													<ul>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_gent35';?>">Paket GENT T35 35 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_gent175';?>">Paket GENT T75 75 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_gent150';?> ">Paket GENT T150 150 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_guardianCat1';?>">Paket GUARDIAN Tipe LPI CAT 1</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_guardianCat2';?>">Paket GUARDIAN Tipe LPI CAT 2</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_guardianCat3';?>">Paket GUARDIAN Tipe LPI CAT 3</a></li>
													</ul>
													</div>

													<div class="col-sm-6">
													<ul>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_kurn85';?>">Paket KURN 85 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_kurn150';?> ">Paket KURN 150 Meter</a></li>

													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_thomas';?>">Paket THOMAS 100 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_viking70';?>">Paket VIKING V3 70 Meter</a></li>
													<li><a href="<?php echo base_url().'index.php/CustControl/show_detail/el_viking120';?>">Paket VIKING V6 120 Meter</a></li>
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
						<p><a href="<?php echo base_url().'index.php/custManager/logout' ;?>" class="simpleCart_empty"><?php echo $this->session->userdata('logout') ;?></a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Form Pesan</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Form Pesan</h3>
			<p class="est">Silahkan tuliskan kebutuhan dan kriteria bangunan anda yang akan dipasang dengan paket yang tersedia.</p>
			<div class="mail-grids">
				<input type="hidden" id="id_paket" value="<?php echo $id; ?>">
				<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
				<input type="hidden" id="hargadasar" value="<?php echo $harga; ?>">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form action="<?php echo base_url().'index.php/CustControl/do_order/'.$kategori.'/'.$id?>" method="post" enctype="multipart/form-data">
						<input type="text" value="Luas Bangunan.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Luas Bangunan..';}" name="luas" required="">
						<br>
						<br>
						<input type="text" value="Tinggi Bangunan (meter).." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tinggi Bangunan (meter)..';}" name="tinggi" id="tinggi" required="">
						<br>
						<br>
						<select name="tanah" id="country" class="frm-field required sect" required="" >
							<option value="null">Jenis Tanah...</option>
							<option value="Gambut">Gambut</option>
							<option value="Pasir">Pasir</option>
							<option value="Tanah Liat">Tanah Liat</option>
						</select>
						<!--<input type="text" value="Jenis Tanah Bangunan.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Jenis Tanah Bangunan..';}" name="tanah" required="">-->
                		<input type="text" value="alamat.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat..';}" name="alamat" id="alamat" />
                		<input type="text" value="kota.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Kota..';}" name="city" id="city" />
                		<select name="provinsi" id="provinsi" class="frm-field required sect" required="" >
							<option value="null">Provinsi</option>
							<option value="Banten">Banten</option>
							<option value="Jakarta">DKI Jakarta</option>
							<option value="Jabar">Jawa Barat</option>
							<option value="Jateng">Jawa Tengah</option>
							<option value="Jatim">Jawa Timur</option>
							<option value="Jogjakarta">Jogjakarta</option>
						</select>
                		<!-- <input type="button" value="Calculate Route" onclick="calcRoute()" /> -->
            			</p>
			            <p>
			                <label for="distance">Distance (km): </label>
			                <input type="text" name="distance" id="distance" readonly="true" />
			            </p>
			            <p>
			                <input type="button" value="Calculate Price" id="btn_hitung"/>
			            </p>
						<p>
			                <label for="harga" name="">Harga total: </label>
			                <input type="text" name="harga" id="harga" readonly="true" />
			            </p>
						<!-- <textarea type="text" value="Alamat tujuan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat tujuan..';}" name="alamat" required="">Alamat Tujuan..</textarea> -->
						<br>Upload Foto
						<input type="file" name="image" id="image_upload">
						<script type="text/javascript">
							$('#inputFile').bind('change', function(e) {
      							var data = e.originalEvent.target.files[0];
        						// var img_size = document.getElementById("image_upload").files[0].size/1024/1024;
        						var img_size = data.size/1024/1024;
        						console.log(img_size);
        						var img_upload = document.getElementById("image_upload").value="";
        						var max_size = 2;
        						if(img_size>max_size){
            						window.alert('Batas maksimal file yang dapat diupload sebesar 2 MB');
            						img_upload.value = "";
            					}
            				});
        						// alert("Ukuran File: " +this.files[0].size/1024/1024);
    					</script>

						<br>
						<input type="submit" value="Order" >
					</form>
				</div>				
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div style="width:300px; height:400px " id="map_canvas"></div>
					<!-- <div class="mail-grid-right1">
						<img src="<?php echo base_url('images/account.jpg');?>" alt=" " class="img-responsive" />
						<h4>CV. Panah Cakrawala <span>Surabaya</span></h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: 082 331 468 555/li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="#">panahcakrawala@gmail.com</a></li>
						</ul>

					</div> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
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
<!-- //footer -->
</body>
<!-- hitung jarak-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBjUEEcKihR6QltJJGHdDwNjZd4ak7mnlo"></script>
<script type="text/javascript">

        var directionDisplay;
        var map;
        var jarak;
        // var hargadasar = document.getElementById("harga_dasar").value;

        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var office = new google.maps.LatLng(-7.278346, 112.792559);
            var myOptions = {
                zoom:12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: office
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
        }

        function hitung() {
            var start = new google.maps.LatLng(-7.278346, 112.792559);
            var alamat = document.getElementById("alamat").value;
            var kota = document.getElementById("city").value;
            var provinsi = document.getElementById("provinsi").value;
            var location = alamat +" " +kota +" " +provinsi;
            var distanceInput = document.getElementById("distance");
            var id_paket = document.getElementById("id_paket").value;
	        var baseurl = document.getElementById("base_url").value;
    	    var tinggi = document.getElementById("tinggi").value;
        	var hargadasar = document.getElementById("hargadasar").value;
        	var hargatotalInput = document.getElementById("harga");
        	var directionsService = new google.maps.DirectionsService();
            var request = {
                    origin:start,
                    destination:location,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
            	console.log("POINT1");
                if (status == google.maps.DirectionsStatus.OK) {
                	console.log("POINT2");
                    directionsDisplay.setDirections(response);
                    if(kota=="surabaya"){
                    	jarak = 0;
                    }else{
                        jarak = response.routes[0].legs[0].distance.value / 1000;
                    }
                    console.log("JARAK: " +jarak);
                    distanceInput.value = jarak;
                    var hargatotal = (parseInt(jarak)*5000)+(parseInt(tinggi)*25000)+parseInt(hargadasar);
					hargatotalInput.value = hargatotal;;
                }
            });
		}

        $(document).ready(function(){
    		$('#btn_hitung').click(function(){
				event.preventDefault();
				hitung();
			});
		});
    </script>
<!-- //hitung jarak-->
</html>