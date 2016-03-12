<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>De-TransKot</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon.png"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/_all.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/theme-color/skin-blue.min.css">
   <!--  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css"> -->
   <link href="assets/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/tabletools/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="assets/formvalidation/dist/css/formValidation.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script><!-- Bootstrap 3.3.5 -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/tabletools/js/dataTables.tableTools.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/formvalidation/dist/js/formValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/formvalidation/dist/js/framework/bootstrap.js"></script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini">DTK</span>
          <span class="logo-lg">De-TransKot</span>
        </a>
        <!-- Header Navbar -->
       <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/images/team-member4.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets/images/team-member4.png" class="img-circle" alt="User Image">
                    <?php
                      echo "<p>" . $this->session->userdata['nama'] . "- @" . $this->session->userdata['username']
                      . "<small>Email :" . $this->session->userdata['email'] . "</small> </p>";
                    ?> 
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?= base_url();?>cchangepassword" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?= base_url();?>dashboard/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/images/team-member4.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php
                echo "<p>" . $this->session->userdata['nama'] . "</p>";
              ?> 
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU APLIKASI DTK</li>
            <li><a href="<?php echo site_url('cadminhome') ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="<?php echo site_url('cadmindata') ?>"><i class="fa fa-users"></i> <span>View Admin Data</span></a></li>
            <li><a href="<?php echo site_url('cadmin') ?>"><i class="fa fa-bus"></i> <span>View Rute</span></a></li>
            <li><a href="<?php echo site_url('cadminadd') ?>"><i class="fa fa-plus"></i> <span>Add Rute</span></a></li>
            <!-- <li class="treeview">
              <a href="#"><i class="fa fa-bus"></i> <span>Rute Angkot</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa  fa-pencil-square-o"></i> View Rute</a></li>
                <li><a href="#"><i class="fa fa-plus"></i> Add Rute</a></li>
              </ul>
            </li> -->
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
