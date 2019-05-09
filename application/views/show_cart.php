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
						<li><a href="<?php echo base_url();?>">Home</a> <span class="divider">/</span></li>
						<li class="active"> SHOPPING CART</li>
					</ul>
					<h3>  SHOPPING CART [ <small><?php echo $this->cart->total_items();?> Item(s) </small>]
						<a href="<?php echo site_url('welcome/destroy_cart');?>" class="btn btn-sm pull-right"><i class="icon-trash">

						</i> Kosongkan Keranjang </a></h3>	
						<hr class="soft"/>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($this->cart->contents() as $produk): ?>
									<tr>
										<td><?php echo $produk['name'];?></td>
										<td><?php echo $produk['qty'];?></td>
										<td><?php echo number_format($produk['price'],0,',','.');?></td>
										<td><?php echo number_format($produk['subtotal'],0,',','.');?></td>
									</tr>
								<?php endforeach;?>
								<tr>
									<td colspan="3" style="text-align:right">TOTAL BELANJA</td>
									<td class="label label-important" style="display:block"> <?php echo number_format($this->cart->total(),0,',','.');?></td>
								</tr>
							</tbody>
						</table>



						<a href="<?php echo base_url();?>" class="btn btn-sm"><i class="icon-arrow-left"></i> Lanjut Belanja</a>
						<a href="<?php echo site_url('welcome/email');?>" class="btn btn-sm pull-right">Pembayaran <i class="icon-arrow-right"></i></a>

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