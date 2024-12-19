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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Publikasi</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Detail Pengumuman</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                           <h3>Detail Pengumuman</h3>
                           <br>
                             <!-- Hover table card start -->               
                             <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                        
                                        <?php foreach ($data as $row) { ?>
                                      
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>:</td>
                                            <td><?php echo $row->tanggal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Judul</td>
                                            <td>:</td>
                                            <td><b><?php echo $row->judul; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>Pengumuman</td>
                                            <td>:</td>
                                            <td><?php echo $row->pengumuman; ?></td>
                                        </tr>
                                           
                                           
                                            <?php } ?>
                                     
                                    </table>
                                </div>
                                <br>
                                <div align="right"><a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_pengumuman"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                            
                            <!-- Hover table card end -->
                        </div>
                    </div><!-- cmt-blog-classic-content end -->
                </div>
            </div>   
        </div>   
    </div><!-- row end -->
</div>
</div>
</div>
 <?php $this->load->view('frontend/footer.php'); ?>