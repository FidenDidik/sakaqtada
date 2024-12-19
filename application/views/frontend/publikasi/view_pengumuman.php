<?php $this->load->view('frontend/header.php'); ?>
<!--site-main start-->
<div class="site-main">
<div class="col-lg-12 content-area">
    <div class="cmt-row sidebar cmt-sidebar-right clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">            
                <!-- post -->
                <article class="post cmt-blog-single clearfix">
                    <!-- cmt-blog-classic-content -->
                    <div class="cmt-blog-single-content">
                        <div class="cmt-post-entry-header">
                            <div class="post-meta">
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Publikasi</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Pengumuman</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                           <h3>Daftar Pengumuman</h3>
                           <br>
                             <!-- Hover table card start -->               
                             <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NO</th>
                                                <th class="text-center">TANGGAL</th>
                                                <th class="text-center">JUDUL</th>
                                               
                                                <th class="text-center">DETAIL</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($pengumuman->result() as $row) { ?>
                                            <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                         
                                            
                                            <td>
                                            <a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/detail_pengumuman/<?php echo $row->id_pengumuman;?>" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-3">
                                            <i class="fa fa-info"></i>
                                            </span>
                                            <span class="text">Detail</span>  </a> 
                                        </td>
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
    </div><!-- row end -->
</div>
</div>
 <?php $this->load->view('frontend/footer.php'); ?>