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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Data</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Data Pendidikan</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                           <h3>Daftar Penduduk Menurut Pendidikan</h3>
                           <br>

                           
                             <!-- Hover table card start -->               
                             <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NO</th>
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
                                            </tr>
                                            <?php 
                                              $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                            <!-- Hover table card end -->
                        </div>
                    </div><!-- cmt-blog-classic-content end -->
                </div>
            </div>   
        </div>  
     </div>   
    </div><!-- row end -->
</div>
</div>
 <?php $this->load->view('frontend/footer.php'); ?>