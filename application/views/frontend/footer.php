
 <!--footer start-->
 <footer class="footer cmt-bgcolor-black2 clearfix">
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Map</h3>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d801.332963671591!2d115.88285899903698!3d-0.2478865824302819!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df7ed1b03032023%3A0x64c026c840814135!2sSakaq%20Tada%2C%20Kec.%20Manor%20Bulatn%2C%20Kabupaten%20Kutai%20Barat%2C%20Kalimantan%20Timur!5e1!3m2!1sid!2sid!4v1734467704641!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                        <div class="widget widget-text clearfix">
                           <h3 class="widget-title">Kontak Kami</h3>
                           <ul class="widget_contact_wrapper">
                                <li>
                                    <div><h6>Alamat:</h6>Jalan Poros Kampung Sakaq Tada, RT.003</div>
                                </li>
                               
                                <li>
                                    <div><h6>E-mail:</h6><a href="" target="_blank">mail@sakaqtada.id</a></div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                        Copyright &copy; 2024 <strong><span>Kampung Sakaq Tada</span></strong>. All Rights Reserved | <a href="<?php echo base_url(); ?>index.php/login/" target="blank">Login</a>   </div> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/tether.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/bootstrap.min.js"></script> 
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery.easing.js"></script>    
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery-waypoints.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery-validate.js"></script> 
    <script src="<?php echo base_url()."assets" ?>/tema/js/slick.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/imagesloaded.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery-isotope.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/numinate.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/circle-progress.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/tema/js/main.js"></script>
    <!-- Revolution Slider -->
    
    <script src="<?php echo base_url()."assets" ?>tema/revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 6.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script  src='<?php echo base_url()."assets" ?>tema/revolution/js/revolution.tools.min.js'></script>
    <script  src='<?php echo base_url()."assets" ?>tema/revolution/js/rs6.min.js'></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="<?php echo base_url(); ?>userassets/js/demo/datatables-demo.js"></script>
<script src="<?php echo base_url(); ?>userassets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>userassets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>userassets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url()."assets_mega" ?>/pages/widget/amchart/pie.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2CD4PBPCND');
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
<script>  
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("JejakpendapatPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Aparatur", "Infrastruktur","Keduanya"],
    datasets: [{
      data: [
        <?php 
              $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
              $this->db->from('jejakpendapat');
              $this->db->where('type_jejakpendapat="Aparatur"');
              $query = $this->db->get();
              $result = $query->result();
              foreach($query->result() as $rows){}
                echo ''.$rows->total_jejakpendapat.'/100*10';
            ?>, 
        <?php 
              $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
              $this->db->from('jejakpendapat');
              $this->db->where('type_jejakpendapat="Infrastruktur"');
              $query = $this->db->get();
              $result = $query->result();
              foreach($query->result() as $rows){}
              echo ''.$rows->total_jejakpendapat.'/100*10';
          ?>,
          <?php 
              $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
              $this->db->from('jejakpendapat');
              $this->db->where('type_jejakpendapat="Keduanya"');
              $query = $this->db->get();
              $result = $query->result();
              foreach($query->result() as $rows){}
              echo ''.$rows->total_jejakpendapat.'/100*10';
          ?>
      ],
      backgroundColor: ['#1cc88a', '#4e73df','#ffad2c' ],
      hoverBackgroundColor: ['#17a673', '#2e59d9','#ffad2c'], 
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
    <!-- Javascript end-->

</body>
</html>