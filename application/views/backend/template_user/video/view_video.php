<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if($this->session->flashdata('video') === 'success_delete') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Video Sukses di Hapus.
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('video') === 'success_edit') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Video Sukses di Edit
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('video') === 'success_add') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Video ditambahkan
                        </div>
                    <?php } ?>
                    <div class="card">  
                    <div class="card-header">
                    <h5>Video</h5>
                    <div class="text-right">
                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Video/add_video" class="btn waves-effect waves-light btn-success btn-skew">Tambah</a><br>
                    </div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Judul</th>
                                                <th>Video</th>
                                                
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->judul_video; ?></td>
                                            <td><?php echo $row->frame1; ?><?php echo $row->video; ?><?php echo $row->frame2; ?>
                                            </td>
                                        
                                            <td class="text-center">
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Video/edit_video/<?php echo $row->id_video;?>" class="btn waves-effect waves-light btn-primary btn-skew">Edit</a>
                                             &nbsp;
                                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->judul_video; ?>&nbsp;from Video table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Video/delete_video/<?php echo $row->id_video; ?>';}" class="btn waves-effect waves-light btn-danger btn-skew">Hapus</a>
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