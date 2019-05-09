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
         <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                <div class="panel-body">
                  <?php echo form_open_multipart('admin/proses_tambah_produk',['class'=>'form-horizontal','role'=>'form']);?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                      <select name="kategori" class="select2" data-placeholder="Pilih Produk ... ">
                          <?php foreach ($kategori as $data): ?>
                            <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Produk</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Ukuran</label>
            <div class="col-sm-9">
              <input type="text" name="ukuran" class="form-control" placeholder="Ukuran">
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Harga</label>
        <div class="col-sm-9">
          <input type="text" name="harga" class="form-control" placeholder="Harga, Mis : 750000">
      </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Gambar</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="userfile">
  </div>
</div>
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Masukkan keterangan produk</h3></div>
        <div class="panel-body">
            <textarea name="keterangan" class="wysihtml5 form-control" rows="9"></textarea>
        </div>
    </div>
</div>
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
  </div>
</div>
<?php echo form_close();?>
</div> <!-- panel-body -->
</div> <!-- panel -->
</div> <!-- col -->
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

<script type="text/javascript" src="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>

<!--form validation init-->
<script src="<?php echo base_url('assets/blue/assets/summernote/summernote.min.js');?>"></script>

<script>

    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

    });
</script>


</body>
</html>