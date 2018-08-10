        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th> 
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php 
            $no = 1;
            foreach($berita as $b){ ?>
              <tr>
              <td><?php echo $no++; ?></td>
              <td><a href="<?php echo site_url('Adminweb/detailloker/'.$b['konten_id']);?>"><?php echo $b['konten_judul'];?></td>
              <td><?php echo $b['konten_tanggal'];?></td>
              <td>
                  <div><a href="<?php echo base_url('Adminweb/show_edit_konten/'.$b['konten_id']);?>" class="btn btn-default">Edit</a> </div>
                  </td>
              <td>
                        <div><a href="<?php echo base_url('Adminweb/hapus_konten_berita/'.$b['konten_id']);?>" class="btn btn-default">Hapus</a> </div>
            </td>
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

