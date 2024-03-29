<!-- Top Bar Start -->
<?php $this->load->view('admin/top_menu');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<?php $this->load->view('admin/sidebar');?>
<!-- Left Sidebar End --> 



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->    
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

           <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Konfirmasi Pembayaran</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10%">Kode Invoice</th>
                                            <th>Tgl. Bayar</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Bukti Transfer</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                       <?php foreach ($konfirmasi as $konfirmasi): ?>
                                        <tr>
                                            <td><?php echo $konfirmasi->invoice_id;?></td>
                                            <td><?php echo $konfirmasi->tanggal;?></td>
                                            <td><?php echo $konfirmasi->nama;?></td>
                                            <td><?php echo $konfirmasi->email;?></td>
                                            <td><?php echo $konfirmasi->status;?></td>
                                            <td><a target="_blank" href="<?php echo site_url('uploads/konfirmasi/'.$konfirmasi->gambar);?>" class="btn btn-default waves-effect waves-light btn-sm m-b-5"><i class="fa fa-download"></i> Download</a></td>
                                            <td>
                                                <a href="<?php echo site_url('admin/detailkonfirmasi/'.$konfirmasi->invoice_id);?>" class="btn btn-default waves-effect waves-light btn-sm m-b-5"><i class="fa fa-search"></i> Detail</a>
                                                <?php if($konfirmasi->status != "PAID") { ?>
                                                    <a href="<?php echo site_url('admin/verifikasibayar/'.$konfirmasi->invoice_id);?>" class="btn btn-success waves-effect waves-light btn-sm m-b-5"><i class="fa fa-check"></i> Verifikasi</a>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->

</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
    <h4 class="text-center">Chat</h4>
    <div class="contact-list nicescroll">
        <ul class="list-group contacts-list">
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-1.jpg');?>" alt="">
                    </div>
                    <span class="name">Chadengle</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-2.jpg');?>" alt="">
                    </div>
                    <span class="name">Tomaslau</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-3.jpg');?>" alt="">
                    </div>
                    <span class="name">Stillnotdavid</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-4.jpg');?>" alt="">
                    </div>
                    <span class="name">Kurafire</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-5.jpg');?>" alt="">
                    </div>
                    <span class="name">Shahedk</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-6.jpg');?>" alt="">
                    </div>
                    <span class="name">Adhamdannaway</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-7.jpg');?>" alt="">
                    </div>
                    <span class="name">Ok</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-8.jpg');?>" alt="">
                    </div>
                    <span class="name">Arashasghari</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-9.jpg');?>" alt="">
                    </div>
                    <span class="name">Joshaustin</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="<?php echo base_url('assets/blue/images/users/avatar-10.jpg');?>" alt="">
                    </div>
                    <span class="name">Sortino</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
        </ul>  
    </div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url('assets/blue/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/waves.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/wow.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/blue/js/jquery.scrollTo.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-detectmobile/detect.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/fastclick/fastclick.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/jquery-blockui/jquery.blockUI.js');?>"></script>


<!-- CUSTOM JS -->
<script src="<?php echo base_url('assets/blue/js/jquery.app.js');?>"></script>

<script src="<?php echo base_url('assets/blue/assets/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/blue/assets/datatables/dataTables.bootstrap.js');?>"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
</script>


</body>
</html>