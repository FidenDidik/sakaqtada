<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
              <div class="row">
                  <div class="col-sm-12">
                  <?php if($this->session->flashdata('dataguru') === 'success_delete') { ?>
                  <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Data Inventaris Sukses di Hapus.
                  </div>
                  <?php } ?>
                  <?php if($this->session->flashdata('dataguru') === 'success_edit') { ?>
                  <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Data Pendidikan Sukses di Edit
                  </div>
                  <?php } ?>
                  <?php if($this->session->flashdata('dataguru') === 'success_add') { ?>
                  <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Data Pendidikan ditambahkan
                  </div>
              <?php } ?>
             <div class="site-main">
                <div class="col-lg-12 content-area">
                 <div class="cmt-row sidebar cmt-sidebar-right clearfix">
                 <div class="container">
                    <div class="card">  
                    <div class="card-header">
                    <h5>Data Pendidikan</h5>
                    <div class="text-right">
                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datapendidikan/add_datapendidikan" class="btn waves-effect waves-light btn-success btn-skew">Tambah</a><br>
                    </div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Nama RT</th>
                                                <th class="text-center">SD</th>
                                                <th class="text-center">SMP</th>
                                                <th class="text-center">SLTA</th>
                                                <th class="text-center">D1</th>
                                                <th class="text-center">D2</th>
                                                <th class="text-center">D3</th>
                                                <th class="text-center">S1</th>
                                                <th class="text-center">S2</th>
                                                <th class="text-center">S3</th>
                                                <th class="text-center">Tidak Tamat SD</th>
                                                <th class="text-center">Tidak Sekolah</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td class="text-center"><?php echo $no; ?></td>
                                            <td class="text-center"><?php echo $row->nama_rt; ?></td>
                                            <td class="text-center"><?php echo $row->sd; ?></td>
                                            <td class="text-center"><?php echo $row->smp; ?></td>
                                            <td class="text-center"><?php echo $row->slta; ?></td>
                                            <td class="text-center"><?php echo $row->d1; ?></td>
                                            <td class="text-center"><?php echo $row->d2; ?></td>
                                            <td class="text-center"><?php echo $row->d3; ?></td>
                                            <td class="text-center"><?php echo $row->s1; ?></td>
                                            <td class="text-center"><?php echo $row->s2; ?></td>
                                            <td class="text-center"><?php echo $row->s3; ?></td>
                                            <td class="text-center"><?php echo $row->tidak_tamatSD; ?></td>  
                                            <td class="text-center"><?php echo $row->tidak_sekolah; ?></td> 
                                            </td>
                                            <td class="text-center">
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datapendidikan/edit_datapendidikan/<?php echo $row->id_datapendidikan;?>" class="btn waves-effect waves-light btn-primary btn-skew">Edit</a>
                                             &nbsp;
                                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->id_datapendidikan; ?>&nbsp;from Data Pendidikan table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Datapendidikan/delete_datapendidikan/<?php echo $row->id_datapendidikan; ?>';}" class="btn waves-effect waves-light btn-danger btn-skew">Hapus</a>
                                            </td>
                                            </tr>
                                            <?php 
                                              $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- Hover table card end -->
                            </div>
                        </div>
                    </div>       
                </div>   
            </div>
        </div>
    </div>
    </div>
</div>
<div id="styleSelector">
</div>

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

<?php $this->load->view('backend/template_user/user_footer.php');
?>