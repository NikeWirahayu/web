        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Wacana</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                                               <form action="<?php echo site_url('adminweb/tambahwacana/'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                <select class="form-control" name="konten_kategori" required="required">
                                                    <option value="---">---</option>
                                                    <option value="Berita">Berita</option>
                                                    <option value="Lowongan">Lowongan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Prospek untuk Lulusan</label>
                                                <select class="form-control" name="konten_subkategori" required="required">
                                                    <option value="---">---</option>
                                                    <option value="Multimedia">Multimedia</option>
                                                    <option value="Rekaya Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                    <option value="Farmasi">Farmasi</option>
                                                    <option value="Keperawatan">Keperawatan</option>
                                                    <option value="Akuntansi">Akuntansi</option>
                                                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                                                    <option value="Perbankan">Perbankan</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input class="form-control" name= "konten_judul" placeholder="tulis judul">
                                            </div>

                                            <div class="form-group">
                                                <label>Isi Wacana</label>
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

