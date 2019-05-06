<?php $session = $this->session->userdata('logged_in_pengelola'); ?>

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $session['nama'] ?></a>
                </div>
                
                <p class="text-muted m-0"><?= $session['username'] ?></p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo site_url('admin');?>" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/daftarproduk');?>" class="waves-effect"><i class="md md-home"></i><span> Produk </span></a>
                </li>
                <!-- <li>
                    <a href="<?php echo site_url('admin/invoices');?>" class="waves-effect"><i class="md md-home"></i><span> Invoices </span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/konfirmasi');?>" class="waves-effect"><i class="md md-home"></i><span> Konfirmasi </span></a>
                </li> -->
                

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>