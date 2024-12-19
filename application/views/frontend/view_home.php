<?php $this->load->view('frontend/header.php'); ?>
<!-- Slider -->
<div class="" id="home">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
         <div class="carousel-item active">
            <img width="100%"  src="<?php echo base_url()."uploads" ?>/slider/sawah.jpg">
        </div>
    <div class="carousel-item ">
      <img width="100%"  src="<?php echo base_url()."uploads" ?>/slider/slide-2.jpg">
    </div>    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>        
    <!--site-main start-->
        <div class="site-main">
              <div class="cmt-row sidebar cmt-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- post -->
                        <article class="post cmt-blog-single clearfix">
                            <!-- cmt-blog-classic-content -->
                            <div class="cmt-blog-single-content2">
                                <h4>Sambutan Kepala Desa</h4>
                                  <blockquote>
                                    <?php 
                                    foreach($sambutan->result() as $img) : ?>
                                    <strong><em><?=$img->nama?></em></strong>
                                       <div>
                                        <?php echo img(['src'=>$img->file, 'width'=>'100%', 'style'=>'text-align: left; width: 120px; height: 150px; float: left; margin-left: 0px; margin-right: 20px; margin-bottom: 10px; border: 5px solid rgb(255, 255, 255);'])?>
                                        </div>
                                        <div style="text-align: justify;">
                                        <?=$img->sambutan?>&nbsp;</div>
                                        </div>
                                    <p>
                                <?php endforeach; ?> 
                            </blockquote>
                         </div><!-- cmt-blog-classic-content end -->
                        </article><!-- post end -->
                    <div class="cmt-row sidebar cmt-sidebar-right clearfix">
                     <div class="container">
                        <div class="row">
                         <article class="post cmt-blog-single clearfix col-lg-8">
                         <br>
                        <h4>Berita Sakaq Tada</h4>
                        <hr>
                        <?php 
                        foreach($berita->result() as $img) : ?>
                        <article class="post cmt-blog-classic clearfix row">
                             <!-- post-featured-wrapper -->
                             <div class="col-lg-5">
                            <div class="cmt-post-featured-wrapper cmt-featured-wrapper">
                                <div class="cmt-post-featured">
                                    <a href="">
                                    <img class="img-fluid rounded"><?php echo img(['src'=>$img->file, 'width'=>'100%', 'style'=>'border-radius:3%'])?></a>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                        </div>
                             <div class="col-lg-7">
                            <!-- cmt-blog-classic-content -->
                            <div class="cmt-blog-classic-content">
                                <div class="cmt-post-entry-header">
                                <div class="post-meta">
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Kategori : <?=$img->kategori?></span>
                                </div>
                                <div class="post-meta">
                                        <span class="cmt-meta-line tags"><i class="fa fa-calendar"></i><?=$img->tanggal?></span>
                                         <span class="cmt-meta-line comment-links"><i class="fa fa-clock-o"></i><?=$img->jam?></span>
                                    </div>
                                    <header class="entry-header">
                                    <a class="entry-title" href="<?php echo base_url(); ?>index.php/Home/detailberita/<?php echo $img->id_berita;?>"><h4><?=$img->judul?></a></h4>
                                    </header>
                                </div>
                                <div class="entry-content">
                                    <div class="cmt-box-desc-text">
                                       <p>
	                                   <?=$img->deskripsi?>
                                    </p>
                                    </div>
                                </div>
                            </div><!-- cmt-blog-classic-content end -->
                            </div>
                        </article><!-- post end -->
                        <hr>
                        <?php endforeach; ?> 
                        <div align="center"><a href="<?php echo base_url(); ?>index.php/frontend/C_Berita/view_berita"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-share-square"></i> Selengkapnya</a></div>
                    </article>
                    <!-- Agenda Kegiatan -->
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget with-title">
                            <h3 class="widget-title">Agenda Kegiatan</h3>
                            <?php foreach ($agenda->result() as $row) { ?>
                              <ul class="timeline">
                             <li>
                        <i class="fa fa-calendar" style="background:darkcyan"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header">
                                <a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/detail/<?php echo $row->id_agenda;?>"><?php echo $row->agenda; ?></a>
                                <span class="time-label">
                                <i class="fa fa-clock-o"></i>
                                <?php echo $row->tanggal; ?>
                                </span>
                            </h3>
                        </div>
                        <br>
                      </li>
                    </ul>
                    <?php } ?>
                    <br>
                     <div align="center"><a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_agenda"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-share-square"></i> Selengkapnya</a></div>
                    <!-- Pengumauman  -->
                    </aside>
                         <aside class="widget widget-Categories2 with-title">
                            <h3 class="widget-title">Pengumuman</h3>
                            <?php foreach ($pengumuman->result() as $row) { ?>
                            <ul>
                                <li> <a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/detail_pengumuman/<?php echo $row->id_pengumuman;?>"><?php echo $row->judul; ?><br>
                                <small><i class="fa fa-calendar"></i> 
                                <?php echo $row->tanggal; ?></span></small>
                                  </a>
                                </li>
                            </ul>
                            <hr>
                            <?php } ?>
                            <br>
                          <div align="center"><a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_pengumuman"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-share-square"></i> Selengkapnya</a></div>
                        </aside>
                        <!-- Jejak Pendapat -->
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Jajak Pendapat</h3>
                            <input type='hidden' name='id_soal' value='6'>Aparat Desa terus melakukan pembenahan terhadap pelayanan masyarakat. Menurut Anda, apa yang belum terpenuhi untuk mendukung hal tersebut? <br><br> 
                        <div class="cleaner_h5">

                        </div>

                        <?php $attrib = array('role'=>'form');
                            echo form_open('Home/save_jejakpendapat', $attrib); 
                            ?>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih salah satu</label>
                        <select class="form-control" name="type_jejakpendapat" id="jejakpendapat">
                        <option></option>
                        <option value="Aparatur">Aparatur</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Keduanya">Keduanya</option>
                        </select>
                       <br>
                        <div class="form-action">
                       <button class="btn btn-danger" type="submit">Simpan</button>
                       <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/Home/view_jejakpendapat" role="button">Lihat</a>
                            </div>
                            <?php echo form_close(); ?>
                       </form>
                       
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>

            <!--portfolio-section-->
        <section class="cmt-row portfolio-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                            <h2 class="title">Galeri Kegiatan</h2>
                            </div>  
                            <div class="title-desc"><p> “Meningkatkan kualitas Akses Pendidikan dan Mewujudkan pendidikan yang berkualitas dan berakhlak“</p></div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row">
                <?php foreach($galeri->result() as $img) : ?>
                       <div class="cmt-box-col-wrapper col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style1">
                                <div class="cmt-box-view-overlay">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid">
                                        <?php echo img(['src'=>$img->file, 'width'=>'auto'])?>
                                        <div class="cmt-blog-overlay-iconbox">
                                            <a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_galeridetail" target="blank"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="featured-title">
                                        <h8><a href=""><?=$img->nama?></a></h8>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <?php endforeach; ?>    
                    </div><!-- row end -->
                   <div align="center"><a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_galeridetail"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-share-square"></i> Selengkapnya</a></div>
            </div>
        </section>
        <!--portfolio-section end-->
           <!--blog-section-->
        <section class="cmt-row blog-section cmt-bgcolor-grey mt_15 clearfix">
            <div class="container">
                 <!-- row -->
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">Video Kegiatan</h2>
                            </div>  <div class="title-desc"><p>“Meningkatkan profesionalisme dan mutu tenaga pendidik dan tenaga kependidikan“</p></div>
                           
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                  <div class="row">
                  <?php foreach ($video->result() as $row) { ?>
                    <div class="cmt-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail"> 
                                    <?php echo $row->frame1?><?php echo $row->video?><?php echo $row->frame2?>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-title">
                                    <h8><?php echo $row->judul_video?></h8>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>  
                    <?php } ?>                  
                </div>
                </div>
                <!-- row end -->
                 <div align="center"><a href="<?php echo base_url(); ?>index.php/frontend/C_Publikasi/view_videodetail"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-share-square"></i> Selengkapnya</a></div>
            </div>
            </div>
        </section>
        <!--blog-section end-->
      
        </div><!-- site-main end -->
<?php $this->load->view('frontend/footer.php'); ?>
