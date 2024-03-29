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
					<ul class="breadcrumb">
						<li><a href="<?= base_url(); ?>">Home</a> <span class="divider">/</span></li>
						<li><a href="">Produk</a> <span class="divider">/</span></li>
						<li class="active">Detail Produk</li>
					</ul>	
					<div class="row">	  
						<div id="gallery" class="span3">
							<a href="<?php echo base_url('uploads/'.$produk->gambar);?>" title="<?php echo $produk->nama_produk;?> <?php echo $produk->ukuran;?>">
								<img src="<?php echo base_url('uploads/'.$produk->gambar);?>" style="width:100%" alt="<?php echo $produk->nama_produk;?> <?php echo $produk->ukuran;?>"/>
							</a>

							<div class="btn-toolbar">
								<div class="btn-group">
									<!-- <span class="btn"><i class="icon-envelope"></i></span>
									<span class="btn" ><i class="icon-print"></i></span>
									<span class="btn" ><i class="icon-zoom-in"></i></span>
									<span class="btn" ><i class="icon-star"></i></span>
									<span class="btn" ><i class=" icon-thumbs-up"></i></span>
									<span class="btn" ><i class="icon-thumbs-down"></i></span> -->
								</div>
							</div>
						</div>
						<div class="span6">
							<h3><?php echo $produk->nama_produk;?></h3> <h4><?php echo $produk->nama_kategori;?> </h4> 
							<!-- <small>- <?php echo $produk->ukuran;?></small> -->
							<hr class="soft"/>
							<form action="<?php echo site_url('welcome/add_to_cartdetail/'.$produk->id);?>" class="form-horizontal qtyFrm">
								<div class="control-group">
									<label class="control-label"><span>Rp. <?php echo number_format($produk->harga,0,',','.');?></span></label>
									<div class="controls">
										<button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
									</div>
								</div>
							</form>
							<br class="clr"/>
							<a href="#" name="detail"></a>
							<hr class="soft"/>
						</div>

						<div class="span9">


							<div class="tab-pane fade active in" id="home">
								<h4>Informasi Produk</h4>
								<table class="table table-bordered">
									<tbody>
										<tr class="techSpecRow"><th colspan="2">Detail Produk</th></tr>
										<tr class="techSpecRow"><td class="techSpecTD1">Nama Produk </td><td class="techSpecTD2"><?php echo $produk->nama_produk;?></td></tr>
										<tr class="techSpecRow"><td class="techSpecTD1">Kategori</td><td class="techSpecTD2"><?php echo $produk->nama_kategori;?></td></tr>
										<tr class="techSpecRow"><td class="techSpecTD1">Ukuran:</td><td class="techSpecTD2"> <?php echo $produk->ukuran;?></td></tr>
										<tr class="techSpecRow"><td class="techSpecTD1">Berat:</td><td class="techSpecTD2"> <?php echo $produk->berat . " gram";?></td></tr>
									</tbody>
								</table>

								<?php echo $produk->keterangan;?>

							</div>

						</div>
					</div>
				</div> </div>
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