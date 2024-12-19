<?php $this->load->view('backend/template_user/user_header.php'); ?>
  <div class="pcoded-inner-content">
  <div class="container-fluid">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <?php if($this->session->flashdata('bdsd') === 'success_delete') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SD Sukses di Hapus.
                </div>
                <?php } ?>
                <?php if($this->session->flashdata('bdsd') === 'success_edit') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SD Sukses di Edit
                </div>
                <?php } ?>
                <?php if($this->session->flashdata('bdsd') === 'success_add') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SD ditambahkan
                </div>
                <?php } ?>
                    <div class="card">
                        <div class="card-header">
                        <?php foreach ($data->result() as $row) { ?>
                         <h3>Badan Permusyawaratan Kampung</h3>
                            </div>
                              <div class="card-block">
                                <h5><?php echo $row->judul; ?></h5>
                                <br>
                                <p><?php echo $row->uraian; ?></p>
                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Bdsd/edit_bdsd/<?php echo $row->id_bdsd;?>" class="btn waves-effect waves-light btn-primary btn-skew">Update</a>&nbsp;             
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</div>
</div>
</div>
<div id="styleSelector">
</div>
<?php $this->load->view('backend/template_user/user_footer.php');