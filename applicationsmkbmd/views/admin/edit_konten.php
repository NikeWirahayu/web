        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Wacana</h1>
                </div>
                <!-- /.col-lg-12 --> 
            </div>
            <!-- /.row -->
             <form action="<?php echo site_url('adminweb/edit_konten/' .$data_konten->konten_id); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Tulis Wacana
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="form-group">

                                                <label>Jenis Wacana</label>
                                                <select class="form-control" name="konten_kategori" disabled="true" >
                                                    <option value="<?php echo $data_konten->konten_kategori ?>"><?php echo $data_konten->konten_kategori ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Prospek untuk Lulusan</label>
                                                <select class="form-control" name="konten_subkategori" disabled="true">
                                                    <option value="<?php echo $data_konten->konten_subkategori ?>"><?php echo $data_konten->konten_subkategori ?></option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input class="form-control" name= "konten_judul" placeholder="tulis judul" value="<?php echo $data_konten->konten_judul ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Isi Wacana</label>
                                                <textarea id="ckeditor2" name="konten_isi" value="<?php echo $data_konten->konten_isi ?>"><?php echo $data_konten->konten_isi ?></textarea>
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

