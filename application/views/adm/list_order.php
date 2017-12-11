<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="no-js">
    
     <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/vendors/easypiechart/jquery.easy-pie-chart.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/assets/styles.css');?>" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets2/vendors/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panah Cakrawala</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>  <?php echo $this->session->userdata("username"); ?>  <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url().'index.php/admManager/logout';?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            
                            <li class="active">
                                <a href="#" role="button" >Order </i></a>

                            </li>
                             
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Paket<b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="<?php echo base_url().'index.php/admControl/show_paket/konvensional';?>">Konvensional</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'index.php/admControl/show_paket/elektrostatis';?>">Elektrostatis</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                
                <!--/span-->
                <div class="span12" id="content">

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h3>Daftar Order</h3></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
                                          <th>Tanggal</th>
						                              <th>Order Paket</th>
                                          <th>Foto Gedung</th>
						                              <th>Alamat Lokasi</th>
                                          <th>Spesifikasi Gedung</th>
                                          <th>Kontak Customer</th>
                                          <th>Harga Total</th>
                                          <th>Status Order</th>
                                          <th>Delete</th>
						                </tr>
						              </thead>

						              <tbody>
                                       <?php 
                                        foreach($order as $ord){ ?>
						                <tr class="error">
                                          <td><?php echo $ord->tanggal_order ?></td>
						                              <td><?php echo $ord->kode_paket ?></td>
                                          <td><img style="height: 85px ; width:100px" src="<?php echo base_url('order/'.$ord->image) ?>"></td>
                                          <td><?php echo $ord->alamat;  ?></td>
                                          <td>
                                              <ul>
                                                  <li>Luas Bangunan: <?php echo $ord->luas ?></li>
                                                  <li>Tinggi Bangunan: <?php echo $ord->tinggi ?></li>
                                                  <li>Jenis Tanah: <?php echo $ord->tanah ?></li>
                                              </ul>
                                          </td>
                                          <td>
                                              <ul>
                                                  <li>Email: <?php echo $ord->email ?></li>
                                                  <li>No Telpon: <?php echo $ord->notelp?></li>
                                              </ul>
                                          </td>
						                              <td> <?php echo $ord->harga_total?> </td>
                                          <td>
                                          <div class="btn-group pull-right">
                                            <button data-toggle="dropdown" class="btn dropdown-toggle"><?php echo $ord->status ?><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="<?php echo base_url().'index.php/admControl/update_status/'.$ord->no_order.'/Survey';?>">Survey</a></li>
                                                   <li><a href="<?php echo base_url().'index.php/admControl/update_status/'.$ord->no_order.'/Pengerjaan';?>">Pengerjaan</a></li>
                                                   <li><a href="<?php echo base_url().'index.php/admControl/update_status/'.$ord->no_order.'/Selesai';?>">Selesai</a></li>
                                                   <li><a href="<?php 
                                                                    $status = $ord->status;
                                                                    if ($status == 'Survey'){
                                                                          echo base_url().'index.php/admControl/update_status/'.$ord->no_order.'/Batal';
                                                                    }else {
                                                                      echo "#";
                                                                    }
                                                                ?>"
                                                        >Batal</a>
                                                    </li>
                                              </ul>
                                            </div>
                                          </td>
                                          <td> <a href="<?php echo base_url().'index.php/admControl/deleteOrder/'.$ord->no_order;?>"><button  class='btn btn-primary'>Delete</button></a></td>
						                </tr>
                                        <?php } ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                     
                     
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="<?php echo base_url('assets2/vendors/jquery-1.9.1.js');?>"></script>
        <script src="<?php echo base_url('assets2/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets2/vendors/datatables/js/jquery.dataTables.min.js');?>"></script>


        <script src="<?php echo base_url('assets2/assets/scripts.js');?>"></script>
        <script src="<?php echo base_url('assets2/assets/DT_bootstrap.js');?>"></script>
        <script>
        $(function() {
            
        }); 
        </script>
    </body>

</html>