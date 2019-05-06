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
						<a href="<?php echo site_url('welcome/cart');?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items();?> ] Itemes in your cart </span> </a> 
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

					<h4>Daftar Produk</h4>
					<ul class="thumbnails">
						<?php foreach($produk as $produk): ?>
							<li class="span3">
								<div class="thumbnail">
									<p style="min-height:160px;">
										<a  href="<?php echo site_url('welcome/detailproduk/'.$produk->id);?>">
											<?php 
											$product_image = ['src'=>'uploads/' . $produk->gambar,
											'width'=>'160',
											'height'=>'160'];
											echo img($product_image);
											?>
										</a>
									</p>
									<div class="caption">
										<h5><?php echo $produk->nama_produk;?><br><?php echo $produk->ukuran;?></h5>


										<h4 style="text-align:center"><a class="btn" href="<?php echo site_url('welcome/detailproduk/'.$produk->id);?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo site_url('welcome/add_to_cart/'.$produk->id);?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. <?php echo number_format($produk->harga,0,',','.');?></a></h4>
									</div>
								</div>
							</li>
						<?php endforeach;?>
					</ul>	
				</div>
			</div>
		</div>
	</div>
	<!-- Footer ================================================================== -->
	<div  id="footerSection">
		<div class="container">
			<div class="row">
				<div id="socialMedia" class="span3 pull-left">
					<h5>SOCIAL MEDIA </h5>
					<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/facebook.png');?>" title="facebook" alt="facebook"/></a>
					<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/twitter.png');?>" title="twitter" alt="twitter"/></a>
					<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/youtube.png');?>" title="youtube" alt="youtube"/></a>
				</div> 
			</div>
			<p class="pull-right">&copy; Neo Project 2019</p>
		</div><!-- Container End -->
	</div>
	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
</body>
</html>