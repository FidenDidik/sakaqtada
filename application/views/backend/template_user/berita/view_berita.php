<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if($this->session->flashdata('berita') === 'success_delete') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berita Sukses di Hapus.
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('berita') === 'success_edit') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berita Sukses di Edit
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('berita') === 'success_add') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berita ditambahkan
                        </div>
                    <?php } ?>
                    <div class="card">  
                    <div class="card-header">
                    <h5>Berita</h5>
                    <div class="text-right">
                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Berita/add_berita" class="btn waves-effect waves-light btn-success btn-skew">Tambah</a><br>
                    </div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>JUDUL</th>
                                                <th>KATEGORI</th>
                                                <th>TANGGAL</th>
                                                <th>JAM</th>
                                                <th class="text-center">THUMBNAIL</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                            <td><?php echo $row->kategori; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->jam; ?></td>
                                            <td class="text-center"><?php echo img(['src'=>$row->file, 'width'=>'100px'])?></td> 
                                          </td>
                                            <td class="text-center">
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Imageberita/edit/<?php echo $row->id_berita;?>" class="btn waves-effect waves-light btn-success btn-skew">Upload Gambar</a>
                                            &nbsp;
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Berita/edit_berita/<?php echo $row->id_berita;?>" class="btn waves-effect waves-light btn-primary btn-skew">Edit</a>
                                             &nbsp;
                                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->judul; ?>&nbsp;from Berita table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Berita/delete_Berita/<?php echo $row->id_berita; ?>';}" class="btn waves-effect waves-light btn-danger btn-skew">Hapus</a>
                                            </td>
                                            </tr>
                                            <?php 
                                              $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- Hover table card end -->
                            </div>
                        </div>
                    </div>       
                </div>   
            </div>
        </div>
    </div>
</div>
</div>
<div id="styleSelector">
</div>
<?php $this->load->view('backend/template_user/user_footer.php');
?>