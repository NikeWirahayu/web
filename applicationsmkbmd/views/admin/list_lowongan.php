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
                    <tr>
                      <td>1</td>
                      <td><a href="<?php echo base_url('smkbmpare/detailLowongan') ?>">Lowongan 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></td>
                      <td><?php echo date('d-m-Y'); ?></p></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- end main-content -->
