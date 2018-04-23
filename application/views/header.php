<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Aplikasi Latihan</title>
  <meta name="author" content="awkz"/>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="<?= base_url() ?>static/favicon.ico" type="image/x-icon">

  <!-- Morris Charts CSS -->
  <link href="<?= base_url() ?>static/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

  <!-- Data table CSS -->
  <link href="<?= base_url() ?>static/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?= base_url() ?>static/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>static/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
  

  <!-- Custom CSS -->
  <link href="<?= base_url() ?>static/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!-- /Preloader -->
  <div class="wrapper theme-1-active pimary-color-green">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
          <div class="logo-wrap">
            <a href="<?= site_url(); ?>">
              <img class="brand-img" src="<?= base_url() ?>static/dist/img/logo.png" alt="brand"/>
              <span class="brand-text">Latihan</span>
            </a>
          </div>
        </div>  
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
        <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <form id="search_form" role="search" class="top-nav-search collapse pull-left">
          <div class="input-group">
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
            </span>
          </div>
        </form>
      </div>
      <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">

          <li class="dropdown auth-drp">
            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?= base_url() ?>static/dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">

              <li>
                <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>  
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
          <span>Main</span> 
          <i class="zmdi zmdi-more"></i>
        </li>
        <li>
          <a href="<?= site_url() ?>"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
        </li>
        <li>
          <a href="<?= site_url('Barang') ?>"><div class="pull-left"><i class="zmdi zmdi-face mr-20"></i><span class="right-nav-text">Barang</span></div><div class="clearfix"></div></a>
        </li>
        <li>
          <a href="<?= site_url('Stok') ?>"><div class="pull-left"><i class="zmdi zmdi-face mr-20"></i><span class="right-nav-text">Stok</span></div><div class="clearfix"></div></a>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>

      </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">