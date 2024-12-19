<?php $this->load->view('frontend/header.php'); ?>
<!--site-main start-->
<div class="site-main">
<div class="col-lg-12 content-area">
    <div class="cmt-row sidebar cmt-sidebar-right clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
        <div class="col-lg-12">
                <!-- post -->
                <article class="post cmt-blog-single clearfix">
                    <!-- cmt-blog-classic-content -->
                    <div class="cmt-blog-single-content">
                        <div class="cmt-post-entry-header">
                            <div class="post-meta">
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Jejak Pendapat</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Hasil Rekapitulasi Jejak Pendapat</span>
                            </div>
                        </div>
                        <p>
                            Pemeritah Kampung Sakaq Tada terus melakukan pembenahan terhadap pelayanan masyarakat.
                            Menurut Anda, apa yang belum terpenuhi untuk mendukung hal tersebut?    
                            </p>
                        <h6 class="text-center"><b>Hasil Rekapitulasi Jejak Pendapat</b></h6>
                        <hr>
                        <br>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                            <div class="row">
                          
                            <div class="col-md-6">
                            <p class="text-center"><b>
                             Total Berdasarkan Persentse  
                            </b></p>
                              <div class="card-body">
                                   <div class="chart-pie pt-6 pb-2">
                                   <canvas id="JejakpendapatPieChart"></canvas>
                                  
                                   </div>
                                   <div class="mt-4 text-center small">
                                   <span class="mr-2">
                                   <i class="fa fa-circle text-warning"></i> Keduanya
                                   </span>
                                   <span class="mr-2">
                                          <i class="fa fa-circle text-primary"></i> Infrastruktur
                                   </span>
                                   <span class="mr-2">
                                          
                                          <i class="fa fa-circle text-success"></i> Aparatur
                                   </span>
                                   </div>
                               </div>
                             </div>
                            <div class="col-md-6">
                            <p class="text-center"><b>
                             Jawaban Respondent   
                            </b></p>
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="background-color:#57bb7f">APARATUR</th>
                                                <th class="text-center" style="background-color:#2c87ed">INFRASTRUKTUR</th>
                                                <th class="text-center" style="background-color:orange">KEDUANYA</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                            <td class="text-center">
                                            
                                                 <?php 
                                                 $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
                                                 $this->db->from('jejakpendapat');
                                                 $this->db->where('type_jejakpendapat="Aparatur"');
                                                 $query = $this->db->get();
                                                 $result = $query->result();
                                                 foreach($query->result() as $rows){}
                                                 echo ''.$rows->total_jejakpendapat.' Orang'
                                                 ?>
                                          </div>
                                            </td>
                                            <td class="text-center">
                                                 
                                                 <?php 
                                                 $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
                                                 $this->db->from('jejakpendapat');
                                                 $this->db->where('type_jejakpendapat="Infrastruktur"');
                                                 $query = $this->db->get();
                                                 $result = $query->result();
                                                 foreach($query->result() as $rows){}
                                                 echo ''.$rows->total_jejakpendapat.' Orang'
                                                 ?>
                                          </div>
                                        </td>
                                            <td class="text-center">
                                           
                                                 <?php 
                                                 $this->db->select('COUNT(type_jejakpendapat) AS total_jejakpendapat');
                                                 $this->db->from('jejakpendapat');
                                                 $this->db->where('type_jejakpendapat="Keduanya"');
                                                 $query = $this->db->get();
                                                 $result = $query->result();
                                                 foreach($query->result() as $rows){}
                                                 echo ''.$rows->total_jejakpendapat.' Orang'
                                                 ?>
                                            </td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                
                            <!-- Hover table card end -->
                        </div>
                     </div>                         
                    </div><!-- cmt-blog-classic-content end -->
                    <br>
                   <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                </article><!-- post end -->
            </div>
        </div>
       </div>
    </div><!-- row end -->
</div>
 <?php $this->load->view('frontend/footer.php'); ?>