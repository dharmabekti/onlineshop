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
								<h5>HARAP ISI BIODATA</h5><br/>
								Gunakan No Handphone yang valid untuk pemberitahuan<br/><br/><br/>
								<form action="<?php echo site_url('welcome/prosestransaksi');?>" method="post">
									<div class="control-group">
										<label class="control-label" for="inputEmail0">Nama</label>
										<div class="controls">
											<input name="nama" class="span3"  type="name" id="inputEmail0" placeholder="Nama" required=""
											oninvalid="this.setCustomValidity('Silahkan Isi Nama')" oninput="setCustomValidity('')" >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail0">No. Handphone</label>
										<div class="controls">
											<input name="nope" class="span3"  type="number" id="inputEmail0" placeholder="No HP" required=""
											oninvalid="this.setCustomValidity('Silahkan Isi Nomor HP')" oninput="setCustomValidity('')" >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail0">Email</label>
										<div class="controls">
											<input name="email" class="span3"  type="email" id="inputEmail0" placeholder="Email" required=""
											oninvalid="this.setCustomValidity('Silahkan Isi Email')" oninput="setCustomValidity('')" >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail0">Alamat Lengkap</label>
										<div class="controls">
											<textarea name="alamat" class="span3" required=""
											oninvalid="this.setCustomValidity('Silahkan Isi Alamat Lengkap')" oninput="setCustomValidity('')" ></textarea>
										</div>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Create Your Account</button>
									</div>
								</form>
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