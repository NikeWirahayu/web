       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DETAIL LOWONGAN KERJA</h1>
                </div>
                <!-- /.col-lg-12 --> 
            </div>
<!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.7" data-bg-img="<?php echo base_url('public/images/bg/bg2.jpg'); ?>">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3><?php echo $lowongan->konten_judul ?></h3>
              <br> 
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div style="border: 2px solid #eaece5; border-radius : 10px; padding: 10px; margin-bottom: 20px;" >
                                    <h3>Description</h5>
                                        <p class="blog-desc"><?php echo $lowongan->konten_isi ?></p>
                                    </div>
              <ol>
                
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
  <!-- end main-content -->
