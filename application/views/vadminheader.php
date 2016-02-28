<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>De-TransKot</title>
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon.png"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/theme-color/skin-blue.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
        <a href="index2.html" class="logo">
          <span class="logo-mini">DTK</span>
          <span class="logo-lg">De-TransKot</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu active">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/images/team-member4.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"> Welcome Hidayati Nuzula</span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>dashboard/logout"><i class="fa fa-sign-out"></i> Logout</a>
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
              <p>Hidayati Nuzula</p>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU APLIKASI DTK</li>
            <li class="active"><a href="<?php echo site_url('cadmin') ?>"><i class="fa fa-bus"></i> <span>View Rute</span></a></li>
            <li><a href="<?php echo site_url('cadminadd') ?>"><i class="fa fa-plus"></i> <span>Add Rute</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-bus"></i> <span>Rute Angkot</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa  fa-pencil-square-o"></i> View Rute</a></li>
                <li><a href="#"><i class="fa fa-plus"></i> Add Rute</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>