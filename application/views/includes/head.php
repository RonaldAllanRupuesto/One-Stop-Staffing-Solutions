<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee In Service | One Stop Staffing Solutions</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/icons/logo-ipad.png'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/responsive.dataTables.min.css'); ?>">

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"> -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" id="theme-styles">
  <!-- jQuery -->
  <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/custom.css'); ?>">

  <?php $route = $this->router->fetch_class();?>

 <?php if($route == 'profile'){ ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/profile/css/profile.css'); ?>">
  <?php } ?>


</head>

<body class="hold-transition sidebar-mini">

  <!-- LOADER INDICATOR START to use this just show this and hide the wrapper class--> 
  <div class="loadWrapper" style="display: none;">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <span>Loading</span>
  </div>
  <!-- LOADER INDICATOR END -->

  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <div class="image">
              <p class="account">
                <span class="acc_name"> <?php echo $this->session->userdata('username'); ?> </span> &nbsp; <i class="fas fa-angle-down"></i>
              </p>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php if ($this->session->userdata('usertype') == 1): ?>
          <a href="<?php echo base_url('updateaccount') ?>" class="dropdown-item">
          <i class='fas fa-cog'></i> <span style="margin: 0px 10px;">Update Account</span>
            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
          </a>
          <?php endif; ?>
          <?php if ($this->session->userdata('usertype') == 2): ?>
          <a href="<?php echo base_url('profile') ?>" class="dropdown-item">
          <i class="fas fa-user-alt"></i> <span style="margin: 0px 10px;">Profile</span>
            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
          </a>
          <?php endif; ?>
            <a href="<?php echo base_url('logout') ?>" class="dropdown-item">
            <i class="fas fa-power-off"></i> <span style="margin: 0px 10px;">Logout</span>
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url(); ?>" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/logo-ipad.png'); ?>" class="logo" alt="">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <?php if ($this->session->userdata('usertype') == 1): ?>
                  <li class="nav-item has-treeview">
                  <a href="<?= base_url('usermanagement'); ?>" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p class="navtitle1">
                              Dashboard
                          </p>
                      </a>
                  </li>
              <?php endif; ?>
              <?php if ($this->session->userdata('usertype') == 2): ?>
            <li class="nav-item has-treeview1">
            <a href="<?= base_url('applicant'); ?>" class="nav-link active">  
                <i class="nav-icon fas fa-book"></i>
                  <p class="navtitle">
                  Manage Credentials
                </p>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
