<?php
$situs = $this->db->get_where("users", ["id" => 1])->row();
// print_r($situs->id);
?>
<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div id="socialMedia" class="span3 pull-left">
				<h5>SOCIAL MEDIA </h5>
				<a target="_blank" href="<?= $situs->facebook ?>"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/facebook.png');?>" title="facebook" alt="facebook"/></a>
				<a target="_blank" href="<?= $situs->twitter ?>"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/twitter.png');?>" title="twitter" alt="twitter"/></a>
			</div> 
		</div>
		<p class="pull-right">&copy; Neo Project 2019</p>
	</div><!-- Container End -->
</div>