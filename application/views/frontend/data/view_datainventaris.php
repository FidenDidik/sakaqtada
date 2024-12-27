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
                                <span class="cmt-meta-line tags"><i class="fa fa-tags"></i>Data</span>
                                <span class="cmt-meta-line comment-links"><i class="fa fa-reply"></i>Data Sekolah</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="cmt-box-desc-text">
                           <h3>Daftar Inventaris Kampung</h3>
                           <br>
                             <!-- Hover table card start -->               
                             <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="100%">
                                        <thead>
                                            <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Asal Tanah/Nama Inventaris</th>
                                            <th class="text-center">Luas M<sup>2</sup></th>
                                            <th class="text-center">No Sertifikat</th>
                                            <th class="text-center">Peroleh Tahun</th>
                                            <th class="text-center">Peruntukan</th>
                                            <th class="text-center">Lokasi</th>
                                            <th class="text-center">Sumber Dari</th>
                                            <th class="text-center">Pelepasan Hak Atas Nama</th>
                                            <th class="text-center">Keterangan</th>
                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td class="text-center"><?php echo $no; ?></td>
                                            <td><?php echo $row->asal_tanah; ?></td>
                                            <td class="text-center"><?php echo $row->luas; ?></td>
                                            <td class="text-center"><?php echo $row->no_sertifikat; ?></td>
                                            <td class="text-center"><?php echo $row->peroleh_tahun; ?></td>
                                            <td class="text-center"><?php echo $row->peruntukan; ?></td>
                                            <td class="text-center"><?php echo $row->lokasi; ?></td>
                                            <td class="text-center"><?php echo $row->sumber_dari; ?></td>
                                            <td class="text-center"><?php echo $row->pelepasan; ?></td>
                                            <td class="text-center"><?php echo $row->keterangan; ?></td> 
                                            <td class="text-center">
                                            </tr>
                                            <?php 
                                              $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div align="right"><a href="<?php echo base_url(); ?>index.php/Home/index"  class="btn btn-warning btn-sm btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a></div>
                            <!-- Hover table card end -->
                        </div>
                    </div><!-- cmt-blog-classic-content end -->
                </div>
            </div>   
        </div>  
     </div>   
</div><!-- row end -->
</div>
</div>
 <?php $this->load->view('frontend/footer.php'); ?>