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
                    <a class="brand" href="#">Admin Panel</a>
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
						                  <th>Alamat Lokasi</th>
                                          <th>Luas Gedung</th>
                                          <th>Tinggi Gedung</th>
                                          <th>Jenis Tanah</th>
                                          <th>Foto Gedung</th>
                                          <th>Email</th>
                                          <th>Nomer Telepon</th>
                                          <th>Status Penawaran</th>
                                          <th>Delete</th>
						                </tr>
						              </thead>

						              <tbody>
                                       <?php 
                                        foreach($order as $ord){ ?>
						                <tr class="error">
                                          <td><?php echo $ord->tanggal_order ?></td>
						                  <td><?php echo $ord->kode_paket ?></td>
						                  <td><?php echo $ord->alamat ?></td>
						                  <td><?php echo $ord->luas ?></td>
                                          <td><?php echo $ord->tinggi ?></td>
                                          <td><?php echo $ord->tanah ?></td>
                                          <td><img style="height: 85px ; width:100px" src="<?php echo base_url('order/'.$ord->image) ?>"></td>
                                          <td><?php echo $ord->email ?></td>
                                          <td><?php echo $ord->notelp?></td>
                                          <td><?php 
                                                if($ord->validasi==0){
                                                   

                                                    echo "<a href=".base_url().'index.php/admControl/validasiOrder/'.$ord->no_order."><button class='btn btn-primary'>Belum</button></a>";
                                                }else{
                                                    
                                                    echo "<a href=''><button class='btn'>Sudah</button></a>";

                                                }
                                          ?> 

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