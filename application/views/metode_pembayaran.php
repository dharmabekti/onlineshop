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
				<?php 
				$this->load->view('sidebar');
				?>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url();?>">Home</a> <span class="divider">/</span></li>
						<li class="active"> METODE PEMBAYARAN</li>
					</ul>
					<h3>METODE PEMBAYARAN</h3>	
					<hr class="soft"/>
					<span>Silahkan memilih metode pembayaran berikut:</span><br>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Metode Pembayaran</th>
								<th>No. Rekening</th>
								<th>Atasnama</th>
							</tr>
						</thead>
						<tbody>
							<?php $rekening = $this->db->get('ref_rekening')->result();
							foreach ($rekening as $data): ?>
							<tr>
								<td><?php echo $data->nama_bank;?></td>
								<td><?php echo $data->no_rekening;?></td>
								<td><?php echo $data->atasnama;?></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
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