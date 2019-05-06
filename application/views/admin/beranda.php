<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('assets/blue/images/favicon_1.ico');?>">

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

        <!-- sweet alerts -->
        <link href="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.min.css');?>" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url('assets/blue/css/helper.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/blue/css/style.css');?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/blue/js/modernizr.min.js');?>"></script>
        
    </head>
    <?php $session = $this->session->userdata('logged_in_pengelola'); ?>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <?php $this->load->view('admin/top_menu');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php $this->load->view('admin/sidebar');?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->    
			<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

							<div class="col-lg-4">
                                <div class="panel panel-color panel-pink">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">BERANDA</h3> 
                                    </div> 
                                    <div class="panel-body"> 
									<p>Selamat Datang</p>
									<p><?= $session['email'] ?></p>
                                </div>
                            </div>
						
					</div>
				</div>
			</div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-2.jpg');?>" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-3.jpg');?>" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-4.jpg');?>" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-5.jpg');?>" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-6.jpg');?>" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-7.jpg');?>" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-8.jpg');?>" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-9.jpg');?>" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url('assets/blue/images/users/avatar-10.jpg');?>" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/blue/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/blue/js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/chat/moment-2.2.1.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-detectmobile/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/fastclick/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-blockui/jquery.blockUI.js');?>"></script>

        <!-- sweet alerts -->
        <script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.init.js');?>"></script>

        <!-- flot Chart -->
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.time.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.tooltip.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.resize.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.pie.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.selection.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.stack.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/flot-chart/jquery.flot.crosshair.js');?>"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url('assets/blue/assets/counterup/waypoints.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/blue/assets/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/blue/js/jquery.app.js');?>"></script>

        <!-- Dashboard -->
        <script src="<?php echo base_url('assets/blue/js/jquery.dashboard.js');?>"></script>

        <!-- Chat -->
        <script src="<?php echo base_url('assets/blue/js/jquery.chat.js');?>"></script>

        <!-- Todo -->
        <script src="<?php echo base_url('assets/blue/js/jquery.todo.js');?>"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
    </body>
</html>