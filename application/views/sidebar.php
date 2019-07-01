<?php $kategori = $this->produk_model->getAllKategori(); ?>

<div id="sidebar" class="span3">
	<div class="well well-small"><a id="myCart" href="<?php echo site_url('welcome/cart');?>"><img src="<?php echo base_url('assets/bootshop/themes/images/ico-cart.png');?>" alt="cart"><?php echo $this->cart->total_items();?> Items in your cart  </a></div>
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<?php foreach ($kategori as $data): ?>
			<li><a href="<?php echo site_url('welcome/kategori/' . $data->id_kategori . '/' . $data->nama_kategori);?>"><?= $data->nama_kategori ?></a></li>
		<?php endforeach; ?>
		<li><a href="<?php echo site_url('welcome/metodepembayaran');?>">Metode Pembayaran</a></li>
	</ul>
	<br/>

	<!-- <div class="thumbnail">
		<img src="<?php echo base_url('assets/bootshop/themes/images/payment_methods.png');?>" title="Bootshop Payment Methods" alt="Payments Methods">
		<div class="caption">
			<h5>Payment Methods</h5>
		</div>
	</div> -->
</div>