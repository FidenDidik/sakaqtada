<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if($this->session->flashdata('agenda') === 'success_delete') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Agenda Sukses di Hapus.
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('agenda') === 'success_edit') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Agenda Sukses di Edit
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('agenda') === 'success_add') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Agenda ditambahkan
                        </div>
                    <?php } ?>
                    <div class="card">  
                    <div class="card-header">
                    <h5>Agenda</h5>
                    <div class="text-right">
                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Agenda/add_agenda" class="btn waves-effect waves-light btn-success btn-skew">Tambah</a><br>
                    </div>
                    
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Tanggal</th>
                                                <th>Agenda</th>
                                                <th>Jam</th>
                                                <th>Lokasi</th>
                                                <th>Petugas Liputan</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;  
                                           foreach ($data->result() as $row) { ?>
                                            <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->agenda; ?></td>
                                            <td><?php echo $row->jam; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td><?php echo $row->petugas_liputan; ?></td>
                                        
                                            <td class="text-center">
                                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Agenda/edit_agenda/<?php echo $row->id_agenda;?>" class="btn waves-effect waves-light btn-primary btn-skew">Edit</a>
                                             &nbsp;
                                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->agenda; ?>&nbsp;from Agenda table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Agenda/delete_agenda/<?php echo $row->id_agenda; ?>';}" class="btn waves-effect waves-light btn-danger btn-skew">Hapus</a>
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