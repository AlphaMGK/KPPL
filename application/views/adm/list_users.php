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
                                        <a tabindex="-1" href="<?php echo base_url().'index.php/admControl/logout';?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#" role="button"> Users</a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url().'index.php/admControl/listOrder';?>" role="button" >Order</i></a>
                                
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
                                <div class="muted pull-left">Users</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Id</th>
						                  <th>Username</th>
						                  <th>Passowrd</th>
										  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Gender</th>
						                  <th>Email</th>
						                  <th>Telepon</th>
						                  
						                </tr>
						              </thead>
						              
						              <tbody>
						              <?php 
										foreach($user as $usr){ ?>
						                <tr>
						                  <td><?php echo $usr->userid ?></td>
						                  <td><?php echo $usr->username ?></td>
						                  <td><?php echo $usr->password ?></td>
						                  <td><?php echo $usr->first_name ?></td>
						                  <td><?php echo $usr->last_name ?></td>
						                  <td><?php echo $usr->gender ?></td>
						                  <td><?php echo $usr->email ?></td>
						                  <td><?php echo $usr->notelp ?></td>
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