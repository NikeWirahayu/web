
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="<?=base_url('public/images/logo-white-footer.png');?>">
            <p>Jl. Matahari No 1 Pare, Kediri - Jawa Timur</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">(0354) 394 183</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"> smkbhaktimuliapre96@gmail.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.smkbhaktimuliapare.ac.id</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-vk"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Link Cepat</h4>
            <ul class="angle-double-right list-border">
              <li><a href="<?php echo base_url(); ?>">Home Page</a></li>
              <li><a href="<?php echo base_url('smkbmpare/jadwalPelajaran'); ?>">Jadwal Pelajaran</a></li>
              <li><a href="<?php echo base_url('smkbmpare/pengumuman'); ?>">Pengumuman</a></li>
              <li><a href="<?php echo base_url('smkbmpare/lowongan'); ?>">Lowongan Kerja</a></li>
              <li><a href="<?php echo base_url('smkbmpare/kontak'); ?>">Kontak</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Berita Terbaru</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Spoken English</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Jam Sekolah</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Senin :  </span>
                  <div class="value pull-right"> 6.45 am - 15.35 pm </div>
                </li>
                <li class="clearfix"> <span> Selasa - Kamis :</span>
                  <div class="value pull-right"> 6.45 am - 15.25 pm </div>
                </li>
                <li class="clearfix"> <span> Jumat : </span>
                  <div class="value pull-right"> 6.45 am - 15.30 pm </div>
                </li>
                <li class="clearfix"> <span> Sabtu - Minggu : </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Libur </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;<?php echo date('Y'); ?> SMK Bhakti Mulia Pare</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url('public/js/custom.js');?>"></script>

<!-- Data Tables -->
    <script src="<?=base_url('public/datatables/jquery.dataTables.min.js');?>"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/j/learnpro/v3.0/demo/index-home-variation-bg-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2017 07:02:20 GMT -->
</html>