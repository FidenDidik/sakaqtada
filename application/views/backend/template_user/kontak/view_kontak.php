<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if($this->session->flashdata('kontak') === 'success_delete') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Kontak Sukses di Hapus.
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('kontak') === 'success_edit') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Kontak Sukses di Edit
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('kontak') === 'success_add') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Kontak ditambahkan
                        </div>
                    <?php } ?>
                    <div class="card">  
                    <div class="card-header">
                    <h5>Kontak</h5>
              
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th class="text-center">Nama Pengirim</th>
                                                <th class="text-center">Tanggal Dikirim</th>
                                                <th class="text-center">Tanggal Dijawab</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td class="text-center"><?php echo $row->date; ?></td>
                                            <td class="text-center"><?php echo $row->tanggal_jawab; ?></td>
                                            <td class="text-center"><?php echo $row->status; ?></td>
                                            
                                            <td class="text-center">
                                          
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Kontak/jawab_kontak/<?php echo $row->id_kontak;?>" class="fa fa-comment"></a>
                                             &nbsp;&nbsp;||&nbsp;&nbsp;
                                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->nama; ?>&nbsp;from Kontak table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Kontak/delete_kontak/<?php echo $row->id_kontak; ?>';}" class="fa fa-close"></a>
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