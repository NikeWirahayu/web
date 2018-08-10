        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Lowongan</h1>
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
                      <th>Jurusan</th>
                      <th>Judul</th>
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php foreach($lowongan as $lw){ ?>
              <tr>
              <td><?php echo $lw['konten_subkategori'];?></td>
              <td><?php echo $lw['konten_judul'];?></td>
              <td><?php echo $lw['konten_tanggal'];?></td>
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

