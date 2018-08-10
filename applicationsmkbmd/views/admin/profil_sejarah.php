        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profil > Sejarah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form action="<?php echo site_url('adminweb/profil_sejarah/'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sejarah Berdirinya SMK Bhakti Mulia Pare
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Isi Sejarah</label>
                                                <!-- <label>Alamat Sekolah</label> -->
                                                <!-- <input class="form-control" placeholder="Alamat"> -->
                                                <textarea id="ckeditor2" name="konten_isi"></textarea>
                                               
                                            </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <input type="submit" class="btn btn-primary" value="Simpan"/>
            </form>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


 <script src="<?=base_url('public/js/jquery.min.js');?>"></script> 

<script src="<?=base_url('public/ckeditor/ckeditor.js');?>"></script>


<script>
    $(function () {
         CKEDITOR.replace('ckeditor2' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url("public/kcfinder/browse.php?opener=ckeditor&type=images");?>'
    });
    });
</script> 