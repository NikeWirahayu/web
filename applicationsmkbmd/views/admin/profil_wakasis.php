        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profil > Waka Kesiswaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Profil Waka Kesiswaan SMK Bhakti Mulia Pare
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Pilih Waka Kesiswaan</label>
                                                <select class="form-control">
                                                    <option>Guru 1</option>
                                                    <option>Guru 2</option>
                                                    <option>Guru 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pesan Kesan</label>
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