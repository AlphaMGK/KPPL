<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Tables</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/assets/styles.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/assets/DT_bootstrap.css');?>" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
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
                            
                            <li class="unactive">
                                <a href="<?php echo base_url().'index.php/admControl/showListOrder';?>" role="button" >Order </i></a>

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
                <div class="span1"></div>
                <!--/span-->
                <div class="span10" id="content">
                     
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar Paket</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="<?php echo base_url().'index.php/admControl/form_tambah';?>"><button class="btn btn-success">Tambahkan Paket<i class="icon-plus icon-white"></i></button></a>
                                      </div>

                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Kategori Paket<span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url().'index.php/admControl/show_paket/konvensional';?>">Konvensional</a></li>
                                            <li><a href="<?php echo base_url().'index.php/admControl/show_paket/elektrostatis';?>">Elektrostatis</a></li>
                                            
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Harga</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($paket as $pkt){ ?>

                                            <tr class="gradeU">
                                                    <td><img style="height: 85px ; width:100px" src="<?php echo base_url('images/'.$pkt->gambar_pkt) ?>"></td>
                                                    <td><?php echo $pkt->nama_pkt ?></td>
                                                    <td><?php echo $pkt->kategori_pkt ?></td>
                                                    <td><?php echo $pkt->deskripsi_pkt ?></td>
                                                    <td><?php echo $pkt->harga_pkt ?></td>
                                                    <td><a href="<?php echo base_url().'index.php/admControl/show_data/'.$pkt->id_pkt;?>"><button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button>
                                           
                                                    <td><a href="<?php echo base_url().'index.php/admControl/delete_paket/'.$pkt->kategori_pkt.'/'.$pkt->id_pkt;?>"> <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button></a></td></a></td>

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
        


        <script src="<?php echo base_url('assets2/assets/scripts.js');?>"></script>
        <script src="<?php echo base_url('assets2/assets/DT_bootstrap.js');?>"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>