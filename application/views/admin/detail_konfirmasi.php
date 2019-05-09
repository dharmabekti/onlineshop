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
                        <h3 class="panel-title">Detail Konfirmasi</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td width="20%">Nama Pembeli</td>
                                        <td><?= $konfirmasi[0]->nama; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?= $konfirmasi[0]->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td><?= $konfirmasi[0]->nope; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Lengkap Pembeli</td>
                                        <td><?= $konfirmasi[0]->alamat; ?></td>
                                    </tr>
                                </table>
                                <br>
                            </div>

                            <div class="panel-heading">
                                <h5>Produk yang Dipesan</h5>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody>
                                     <?php 
                                     $total = 0;
                                     foreach ($konfirmasi as $konfirmasi): 
                                         $subtotal = $konfirmasi->qty * $konfirmasi->price;
                                         $total += $subtotal;
                                         ?>
                                         <tr>
                                            <td><?php echo $konfirmasi->invoice_id;?></td>
                                            <td><?php echo $konfirmasi->product_id;?></td>
                                            <td><?php echo $konfirmasi->product_name;?></td>
                                            <td><?php echo $konfirmasi->qty;?></td>
                                            <td><?php echo number_format($konfirmasi->price,0,',','.');?></td>
                                            <td><?php echo number_format($subtotal,0,',','.');?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                   <td colspan="5" align="right">Total</td>
                                   <td><h3><?php echo number_format($total,0,',','.');?></h3></td>
                               </tr>
                           </tfoot>
                       </table>
                       <a href="<?php echo site_url('admin/konfirmasi');?>" class="btn btn-default waves-effect waves-light btn-sm m-b-5"><i class="fa fa-arrow-left"></i> Kembali</a>
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