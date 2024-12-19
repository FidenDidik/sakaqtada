<?php $this->load->view('frontend/header.php'); ?>
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
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Visi dan Misi</span>
                            </div>
                        </div>
                        <div class="entry-content">
                      
                            <div class="cmt-box-desc-text">
                            <div class="row">
                            <?php foreach($visimisi->result() as $img) : ?>
                            <div class="col-md-5">
                            <br><br>
                            <img class="img-responsive img-hover"><?=img(['src'=>$img->file,'width'=>'100%'])?>
                            </div>
                            <div class="col-md-7">
                          
                            <h2>Visi</h2>
                            <p class="text-justify"> <?=$img->visi?></p>
                            <br><hr>
                            <h2>Misi</h2>
                            <p class="text-justify"> <?=$img->misi?></p>
                            </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                    </div><!-- cmt-blog-classic-content end -->
                </article><!-- post end -->
              </div>
            </div>
        </div>
    </div>
 <?php $this->load->view('frontend/footer.php'); ?>