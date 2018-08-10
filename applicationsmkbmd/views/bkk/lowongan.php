<!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url('public/images/bg/bg2.jpg'); ?>">
      <div class="container">
        <div class="section-content text-center"> 
          <div class="row">
            <div class="col-md-12">
              <h3>LOWONGAN KERJA</h3>
              <br>
            </div>
          </div> 
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
                      <th>Jurusan</th>
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($lowongan as $lw){?>
                    <tr>
                    <tr> 
                      <td><?php echo $no++; ?></td>
              <td><a href="<?php echo site_url('Smkbmpare/detailLowongan/'.$lw['konten_id']);?>"><?php echo $lw['konten_judul'];?></td>
              <td><?php echo $lw['konten_subkategori'];?></td>
              <td><?php echo $lw['konten_tanggal'];?></td>                    
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
    </section>

  <!-- end main-content -->
