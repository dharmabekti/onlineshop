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
                        <h3 class="panel-title">Daftar Produk</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <a href="<?= base_url('admin/tambahproduk'); ?>" class="btn btn-primary waves-effect waves-light btn-sm m-b-5">
                                <i class="fa fa-plus"></i> Tambah Produk</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Produk</th>
                                                <th>Ukuran</th>
                                                <th>Harga</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($produk as $produk): ?>
                                            <tr>
                                                <td><?php echo $produk->nama_kategori;?></td>
                                                <td><?php echo $produk->nama_produk;?></td>
                                                <td><?php echo $produk->ukuran;?></td>
                                                <td><?php echo $produk->harga;?></td>
                                                <td>
                                                    <?php 
                                                    $product_image = ['src'=>'uploads/' . $produk->gambar,
                                                    'width'=>'100',
                                                    'height'=>'100'];
                                                    echo img($product_image);
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('admin/editproduk/'.$produk->id); ?>" class="btn btn-default waves-effect waves-light btn-sm m-b-5">
                                                        <i class="fa fa-edit"></i> Edit</a>
                                                        <a href="<?= base_url('admin/hapusproduk/'.$produk->id); ?>" class="btn btn-default waves-effect waves-light btn-sm m-b-5">
                                                            <i class="fa fa-trash"></i> Hapus</a>
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