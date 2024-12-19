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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Unduhan</span>
                                
                                </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                          
                           <br>
                             <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                                   <div class="table-responsive">
                                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Judul</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;
                                        foreach($unduhan->result() as $img) : ?>
                                            <tr>
                                            <td class="text-center"><?=$no ?></td>
                                            <td><?=$img->nama ?></td>
                                            <td><?=$img->kategori ?></td>
                                            
                                            <td class="text-center">
                                            <a href="<?php echo base_url(); ?><?php echo $img->file; ?>"  class="btn btn-success btn-sm btn-sm"><i class="fa fa-download"></i>Download</a>   
                                        </td>
                                            </tr>
                                            <?php  $no++;
                                             endforeach; ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            <!-- Hover table card end -->
                                <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                          
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