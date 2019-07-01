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
          <div class="panel-heading"><h3 class="panel-title">Ubah Rekening</h3></div>
          <div class="panel-body">
            <?php echo form_open_multipart('admin/ubahrekening/' . $rekening->id,['class'=>'form-horizontal','role'=>'form']);?>
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Bank</label>
              <div class="col-sm-9">
                <input type="text" name="bank" class="form-control" placeholder="Nama Bank" value="<?= $rekening->nama_bank ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">No. Rekening</label>
              <div class="col-sm-9">
                <input type="text" name="norek" class="form-control" placeholder="No. Rekening" value="<?= $rekening->no_rekening ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Atasnama</label>
              <div class="col-sm-9">
                <input type="text" name="atasnama" class="form-control" placeholder="Atasnama" value="<?= $rekening->atasnama ?>">
              </div>
            </div>
            <div class="form-group m-b-0">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
              </div>
            </div>
            <?php echo form_close();?>
          </div> <!-- panel-body -->
        </div> <!-- panel -->
      </div> <!-- col -->
    </div>
  </div>
</div>



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