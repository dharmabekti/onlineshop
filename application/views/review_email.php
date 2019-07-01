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
						<li class="active"> REVIEW PEMESANAN </li>
					</ul>
					<div class="row">
						<div class="span8">
							<div class="well">
								<h3>  REVIEW PEMESANAN [ <small><?php echo $this->cart->total_items();?> Item(s) </small>]</h3>	
								<hr class="soft"/>

								<h5>Detail Pemesan</h5>
								<table class="table table-striped table-bordered">
									<tr>
										<td width="20%">Nama Pemesan</td>
										<td><?= $pemesan['nama']; ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><?= $pemesan['email']; ?></td>
									</tr>
									<tr>
										<td>No. Handphone</td>
										<td><?= $pemesan['nope']; ?></td>
									</tr>
									<tr>
										<td>Alamat Lengkap</td>
										<td><?= $pemesan['alamat']; ?></td>
									</tr>
									<tr>
										<td>Kurir</td>
										<td><?= strtoupper($pemesan['kurir']); ?></td>
									</tr>
								</table>

								<h5>Produk yang Dipesan</h5>

								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Jumlah</th>
											<th>Harga Satuan</th>
											<th>Berat</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<?php $berat = 0;
										foreach ($this->cart->contents() as $produk): ?>
										<tr>
											<td><?php echo $produk['name'];?></td>
											<td><?php echo $produk['qty'];?></td>
											<td><?php echo number_format($produk['price'],0,',','.');?></td>
											<td><?php echo $produk['weight'] . " gram";?></td>
											<td><?php echo number_format($produk['subtotal'],0,',','.');?></td>
										</tr>
										<?php 
										$berat += $produk['qty'] * $produk['weight'];
										endforeach;?>
										<tr>
											<td colspan="4" style="text-align:right">Total Berat</td>
											<td style="display:block"> <?php echo $berat . " gram";?></td>
										</tr>
										<tr>
											<td colspan="4" style="text-align:right">Total Belanja</td>
											<td style="display:block"> <?php echo number_format($this->cart->total(),0,',','.');?></td>
										</tr>
										<tr>
											<td colspan="4" style="text-align:right">JUMLAH YG HARUS DIBAYAR</td>
											<td class="label label-important" style="display:block">
												<span id="total_bayar" style="size: 14px"></span></td>
											</tr>
										</tbody>
									</table>
									<form action="<?php echo site_url('welcome/prosestransaksi');?>" method="post" onsubmit="return ValForm();">
										<input type="hidden" name="nama" value="<?= $pemesan['nama']; ?>">
										<input type="hidden" name="email" value="<?= $pemesan['email']; ?>">
										<input type="hidden" name="nope" value="<?= $pemesan['nope']; ?>">
										<input type="hidden" name="alamat" value="<?= $pemesan['alamat']; ?>">
										<input type="hidden" name="kota" value="<?= $pemesan['kota']; ?>">
										<input type="hidden" name="kurir" value="<?= $pemesan['kurir']; ?>">
										<input type="hidden" name="total" id="total">
										<div class="control-group">
											<label class="control-label" for="inputEmail0">Pilih Paket</label>
											<div class="controls">
												<select name="paket" class="span4" id="paket" onchange="changeValue()" >
													<option value="">Pilih Paket</option>
													<?php foreach($cost as $data): ?>
													<option value="<?= $data->service. '-'. $data->cost[0]->value; ?>"><?= $data->service; ?> (<?= 'Rp. ' . number_format($data->cost[0]->value,0,',','.');?> : <?= $data->cost[0]->etd; ?>)</option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<a href="<?php echo base_url();?>" class="btn btn-sm"><i class="icon-arrow-left"></i> Batal</a>
											<button type="submit" class="btn block pull-right">Kirim Pesanan <i class="icon-arrow-right"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function changeValue() {
				var selObj = document.getElementById("paket");
				var selValue = selObj.options[selObj.selectedIndex].value;
				var total = <?= $this->cart->total() ?>;
				var jumlah = selValue != "" ? parseInt(selValue.split("-")[1]) + parseInt(total) : parseInt(total);
				document.getElementById("total").value = jumlah;
				document.getElementById("total_bayar").innerHTML = jumlah.toLocaleString(['ban', 'id']);
				console.log(selValue.split("-")[0]);
			}

			function ValForm() {
				var selObj = document.getElementById("paket");
				var selValue = selObj.options[selObj.selectedIndex].value;
				console.log(selValue);
				if(selValue == '') {
					alert("Silahkan pilih paket !");
					$('#paket').focus();
					return false;
				}
			}
		</script>

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