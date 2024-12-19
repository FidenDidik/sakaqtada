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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Profile</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Sambutan Kepala Desa</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                            <?php foreach($sambutan->result() as $img) : ?>    
                            <br>
                               <p>
                                <?php echo img(['src'=>$img->file, 'width'=>'10%'])?>
                                <h5><?php echo $img->nama; ?></h5></a>
                                <?php echo $img->sambutan; ?>
                               </p>
                               <?php endforeach; ?>
                        </div>
                    </div><!-- cmt-blog-classic-content end -->
                    <br>
                   <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                </article><!-- post end -->
            </div>
        </div>
        
    </div><!-- row end -->
</div>
 <?php $this->load->view('frontend/footer.php'); ?>