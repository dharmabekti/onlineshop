<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="images/favicon_1.ico">

  <title>Moltran - Responsive Admin Dashboard Template</title>

  <!-- Base Css Files -->
  <link href="<?php echo base_url('assets/blue/css/bootstrap.min.css');?>" rel="stylesheet" />

  <!-- Font Icons -->
  <link href="<?php echo base_url('assets/blue/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/blue/assets/ionicon/css/ionicons.min.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/blue/css/material-design-iconic-font.min.css');?>" rel="stylesheet">

  <!-- animate css -->
  <link href="<?php echo base_url('assets/blue/css/animate.css');?>" rel="stylesheet" />

  <!-- Waves-effect -->
  <link href="<?php echo base_url('assets/blue/css/waves-effect.css');?>" rel="stylesheet">

  <!-- DataTables -->
  <link href="<?php echo base_url('assets/blue/assets/datatables/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" />

  <!-- Custom Files -->
  <link href="<?php echo base_url('assets/blue/css/helper.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/blue/css/style.css');?>" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets/blue/js/modernizr.min.js');?>"></script>
  <link href="<?php echo base_url('assets/blue/assets/summernote/summernote.css');?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" />

  
</head>



<body class="fixed-left">

  <!-- Begin page -->
  <div id="wrapper">
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <a href="<?php echo base_url(); ?>" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
        </div>
      </div>
      <!-- Button mobile view to collapse sidebar menu -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="">
            <div class="pull-left">
              <button class="button-menu-mobile open-left">
                <i class="fa fa-bars"></i>
              </button>
              <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav navbar-right pull-right">
              <li class="dropdown">
                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="user-img" class="img-circle"> </a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profil</a></li>
                  <li><a href="<?= base_url('admin/rekening');?>"><i class="md md-payment"></i> Rekening</a></li>
                  <li><a href="<?= base_url('logout');?>"><i class="md md-settings-power"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>