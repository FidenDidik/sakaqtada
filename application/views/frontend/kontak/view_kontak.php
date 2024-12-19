<?php $this->load->view('frontend/header.php'); ?>


 <!--site-main start-->
 <div class="site-main">
   <div class="cmt-row sidebar cmt-sidebar-right clearfix">
       <div class="container">
         <!-- row -->
       <div class="row">
       <div class="col-lg-8 content-area">
       <!-- post -->
         <article class="post cmt-blog-single clearfix">
           <!-- cmt-blog-classic-content -->
              <div class="cmt-blog-single-content">
                <div class="cmt-post-entry-header">
                   <div class="post-meta">       
                     <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Info</span>
                     <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Kontak Kami</span>
                     </div>
                   </div>
                 <div class="entry-content">
              <div class="cmt-box-desc-text">
              <h3>Kontak Kami</h3>                   
             
                     <p>Silahkan mengisi fasilitas komunikasi <b>Kontak Kami</b>. Mohon masukan dan pertanyaan disampaikan secara bijak dengan kata-kata yang baik. </p>
                     <?php $attrib = array('role'=>'form');
                     echo form_open('frontend/C_Kontak/save_kontak', $attrib); 
                     ?>
                     <div class="row">
                            <div class="col-lg-6 col-md-6">
                                   <div class="form-group">
                                   <div class="input-group">
                                   <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap" /><?php echo form_error('nama'); ?> 
                                   </div>
                                   </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                   <div class="form-group">
                                   <div class="input-group">
                                   <input type="text" name="phone" class="form-control"  placeholder="Phone" /><?php echo form_error('phone'); ?> 
                                   </div>
                                   </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                   <div class="form-group">
                                   <div class="input-group"> 
                                   <input type="text" name="email" class="form-control"  placeholder="Email" /><?php echo form_error('email'); ?> 
                                   </div>
                                   </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                   <div class="form-group">
                                   <div class="input-group">
                                   <input type="text" name="pekerjaan" class="form-control"  placeholder="Pekerjaan" /><?php echo form_error('pekerjaan'); ?>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                   <div class="form-group">
                                   <div class="input-group">
                                   <input type="text" name="alamat" class="form-control"  placeholder="Alamat" /><?php echo form_error('alamat'); ?>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                   <div class="form-group">
                                   <div class="input-group">        
                                   <textarea name="komentar" id="kontak" required="required" class="form-control" style="min-height: 170px;" placeholder="Komentar"></textarea>
                                   </div>
                                   </div>
                            </div>
                          
                            <input type="hidden" name="status" class="form-control" value='<label class="label label-warning">Belum Terjawab</label>'/>
                          
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                   <button name="submit" type="submit" value="Submit" class="btn btn-success btn-lg btn-lg"> <span >Kirim</span> </button>
                            </div>
                     </div>
                     <?php echo form_close(); ?>
              </form> 
              <?php foreach ($kontak->result() as $row) { ?>
                <ol class="comment-list">
                     <li class="comment">
                        <div class="comment-body">
                            <div class="comment-author vcard">
                                   <img src="<?php echo base_url()."assets" ?>/tema/banner/welcome.png" class="avatar" alt="comment-img">
                            </div>
                          
                            <div class="comment-box">
                              <div class="comment-meta">
                                 <div class="cmt-comment-owner"><h5><?php echo $row->nama; ?></h5></div>
                                   <span><?php echo $row->date; ?></span>
                                   </div>
                                   <div class="author-content-wrap">
                                   <p>
                                   <?php echo $row->komentar; ?>
                                   </p>
                                   </div>
                                </div>
                            </div>
                     </li>
                     <ol class="children">
                     <li class="comment">
                     <div class="comment-body">
                            <div class="comment-author vcard">
                                   <img src="<?php echo base_url()."assets" ?>/tema/banner/welcome.png" class="avatar" alt="comment-img">
                            </div>
                            <div class="comment-box">
                                   <div class="comment-meta">
                                   <div class="cmt-comment-owner"><h5>Admin</h5></div>
                                   <span><?php echo $row->tanggal_jawab; ?></span>
                                   </div>
                                   <div class="reply">
                                   <a class="cmt-btn btn-inline cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-dark"><i class="fa fa-reply"></i>Reply</a>
                                   </div>
                                   <div class="author-content-wrap">
                               <?php echo $row->jawaban; ?></p>
                            </div>
                          </div>
                        </div>
                     </li>
                   </ol>
                   <?php } ?>
                 </div>
                <!-- comment list END -->
              </div>
       
 <!-- cmt-blog-classic-content end -->
       </article><!-- post end -->
          <div class="col-lg-4 widget-area sidebar-right">
                <aside class="widget widget-recent-post with-title">
                  <div class="text-center">
                    <h3 class="widget-title">Sosial Media</h3>
                     </div>
                     <div class="cmt-social-links-wrapper">
                     <div class="text-center">    
                     <ul class="social-icons">
                     <li class="social-facebook">
                       <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <li class="social-instagram">
                       <a class="tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <li class="social-youtube">
                       <a class="tooltip-top" target="_blank" href="#" data-tooltip="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                     </li>
                     </ul>
                  </div>
                </div>
               </aside>
            </div>
          </div><!-- row end -->
       </div>
  </div>
</div>
 <?php $this->load->view('frontend/footer.php'); ?>