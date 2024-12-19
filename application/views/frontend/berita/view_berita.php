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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Berita</span>
                               
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Berita Terbaru</span>
                              
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                            <?php foreach($berita->result() as $img) : ?>
                            <div class="row">
                            <div class="col-md-5">
                            <br>
                            <img class="img-responsive img-hover"><?=img(['src'=>$img->file,'width'=>'100%'])?>
                            </div>
                            <div class="col-md-7">
                            <br>
                            <div class="post-meta">
                                <span class="cmt-meta-line tags"><i class="fa fa-calendar"></i><?=$img->tanggal?></span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-clock-o"></i><?=$img->jam?></span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-tag"></i>Kategori : <?=$img->kategori?></span>
                            </div>
                            <h2><?=$img->judul?></h2>
                           
                            <p class="text-justify"> <?=$img->deskripsi?></p>
                            <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/detailberita/<?php echo $img->id_berita;?>" class="btn btn-info btn-sm btn-sm"><i class="fa fa-mail-forward"></i> Selengkapnya</a></div>
                            </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                    </div><!-- cmt-blog-classic-content end -->
                </article>
                
                <!-- post end -->
              </div>
            </div>
        </div>
    </div>
 <?php $this->load->view('frontend/footer.php'); ?>