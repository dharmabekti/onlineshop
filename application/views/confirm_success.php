<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('header');?>
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Welcome!<strong> User</strong></div>
				<div class="span6">
					<div class="pull-right">
						
						<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items();?> ] Itemes in your cart </span> </a> 
					</div>
				</div>
			</div>
			<!-- Navbar ================================================== -->
			<?php $this->load->view('navbar');?>
		</div>
	</div>
	<!-- Header End====================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php $this->load->view('sidebar');?>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li><a href="index.html">Keranjang</a> <span class="divider">/</span></li>
						<li class="active">Login</li>
					</ul>
					<div class="row">
						<div class="span4 offset2">
							<div class="well">
								<div class="alert alert-block alert-success fade in">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Konfirmasi Berhasil</strong> 
									<h2>Harap tunggu</h2>
									Karena kami akan memproses barang anda...
								</div>	
							</div>
						</div>
						<div class="span1"> &nbsp;</div>
					</div>	
					
				</div>
			</div></div>
		</div>

		<!-- Footer ================================================================== -->
		<?php $this->load->view('footer');?>
		<!-- Placed at the end of the document so the pages load faster ============================================= -->
		<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
		
		<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
		<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
		
		<!-- Themes switcher section ============================================================================================= -->
	</body>
	</html>