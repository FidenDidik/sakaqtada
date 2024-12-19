<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <?php if($this->session->flashdata('datainventaris') === 'success_delete') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Data Inventaris Sukses di Hapus.
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('datainventaris') === 'success_edit') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Data Inventaris Sukses di Edit
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('datainventaris') === 'success_add') { ?>
                        <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Data Inventaris ditambahkan
                        </div>
                    <?php } ?>
                    <div class="card">  
                    <div class="card-header">
                    <h5>Data Inventaris Kampung</h5>
                    <div class="text-right">
                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datainventaris/add_datainventaris" class="btn waves-effect waves-light btn-success btn-skew">Tambah</a><br>
                    </div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Asal Tanah</th>
                                <th class="text-center">Luas M<sup>2</sup></th>
                                <th class="text-center">No Sertifikat</th>
                                <th class="text-center">Peroleh Tahun</th>
                                <th class="text-center">Peruntukan</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Sumber Dari</th>
                                <th class="text-center">Pelepasan Hak Atas Nama</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1;  
                            foreach ($data->result() as $row) { ?>
                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->asal_tanah; ?></td>
                            <td><?php echo $row->luas; ?></td>
                            <td><?php echo $row->no_sertifikat; ?></td>
                            <td><?php echo $row->peroleh_tahun; ?></td>
                            <td><?php echo $row->peruntukan; ?></td>
                            <td><?php echo $row->lokasi; ?></td>
                            <td><?php echo $row->sumber_dari; ?></td>
                            <td><?php echo $row->pelepasan; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                                  
                            <td class="text-center">
                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datainventaris/edit_datainventaris/<?php echo $row->id_datainventaris;?>" class="btn waves-effect waves-light btn-primary btn-skew">Edit</a>
                                &nbsp;
                            <a href="javascript:if(confirm('Are you sure want to Delete <?php echo $row->peruntukan; ?>&nbsp;from Data inventaris table ?')){document.location='<?php echo base_url(); ?>index.php/backend/user/C_Datainventaris/delete_datainventaris/<?php echo $row->id_datainventaris; ?>';}" class="btn waves-effect waves-light btn-danger btn-skew">Hapus</a>
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