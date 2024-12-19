<?php $this->load->view('frontend/header.php'); ?><!--site-main start-->
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
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Video</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                            <div class="row">
                            <?php foreach ($video->result() as $row) { ?>
                                <div class="col-lg-4 col-sm-4 ">
                                    <div class="thumbnail">
                                    <?php echo $row->frame1; ?><?php echo $row->video; ?><?php echo $row->frame2; ?>
                                    </div> 
                                    <h6><b><?php echo $row->judul_video; ?></b></h6> 
                                </div> 
                            <?php }; ?>
                            <br>
                            </div> 
                        <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                    </div><!-- cmt-blog-classic-content end -->
                </article><!-- post end -->
              </div>
            </div>
        </div>
    </div>
 <?php $this->load->view('frontend/footer.php'); ?>