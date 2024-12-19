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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>SDM</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Sumber Daya Manusia</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                           <h3>Tabel Sumber Daya Manusia di Dinas Pendidikan Tambrauw  </h3>
                           <br>
                             <!-- Hover table card start -->               
                             <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NAMA</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">PANGKAT(GOL)</th>
                                                <th class="text-center">KELAHIRAN</th>
                                                <th class="text-center">PENDIDIKAN</th>
                                                <th class="text-center">JABATAN</th>
                                                <th class="text-center">FOTO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($sdm->result() as $img) : ?>
                                            <tr>
                                            <td>
                                            <b><?=$img->nama ?></b>
                                            </td>
                                            <td><?=$img->nip?></td>
                                            <td><b><?=$img->pangkat?></td>
                                            <td><?=$img->kelahiran?></td>
                                            <td><?=$img->pendidikan ?></td>
                                            <td><?=$img->jabatan ?></td>
                                            <td class="text-center"> <?php echo img(['src'=>$img->file, 'width'=>'150px'])?></td>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                </div>
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