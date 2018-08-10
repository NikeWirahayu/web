        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Pengumuman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                  <thead>
                  <td>
                        <div><a href="<?php echo base_url('adminweb/tambah_pengumuman/');?>" class="btn btn-default">Tambah Pengumuman</a> </div></td>
                    <tr>
                      <th>No</th>
                      <th>Judul</th> 
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tbody>
            
            <?php 
              $no = 1;
                foreach($pengumuman as $pm){?>
              <tr>
                <tr>
              <td><?php echo $no++; ?></td>
              <td><a href="<?php echo site_url('Adminweb/detailPengumuman/'.$pm['konten_id']);?>"><?php echo $pm['konten_judul'];?></td>
              <td><?php echo $pm['konten_tanggal'];?></td>
              <td>
                  <div><a href="<?php echo base_url('Adminweb/show_edit_pengumuman/'.$pm['konten_id']);?>" class="btn btn-default">Edit</a> </div>
                  </td>
                  <td>
                        <div><a href="<?php echo base_url('Adminweb/hapus_konten_pengumuman/'.$pm['konten_id']);?>" class="btn btn-default">Hapus</a> </div>
            </td>
            </tr>
            
              </tr>
      <?php }?>
  

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


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

