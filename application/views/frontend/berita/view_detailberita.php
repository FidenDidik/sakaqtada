<?php $this->load->view('frontend/header.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
 
    $judul      = set_value('judul');
    $deskripsi  = set_value('deskripsi');
    $uraian     = set_value('uraian');    
} else {
    
    $judul      = $image->judul;
    $deskripsi  = $image->deskripsi;
    $uraian     = $image->uraian;
}
?>
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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Berita</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Kegitan Kampung Sakaq Tada</span>
                            </div>
                        </div>
                        <div class="entry-content">
                       
                            <div class="cmt-box-desc-text">
                            <div class="row">
                            <div class="col-md-5">
                            <img class="img-responsive img-hover"><?=img(['src'=>$image->file,'width'=>'100%'])?>
                            </div>
                            <div class="col-md-7">
                          
                            <h2><?=$judul?></h2>
                            <p class="text-justify"><?=$uraian?></p>
                            </div>
                            </div>
                            <p>   
                        </div>
                        <div align="right"><a href="<?php echo base_url(); ?>index.php/frontend/C_Berita/view_berita"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                    </div><!-- cmt-blog-classic-content end -->
                </article><!-- post end -->
              </div>
            </div>
        </div>
    </div>
 <?php $this->load->view('frontend/footer.php'); ?>