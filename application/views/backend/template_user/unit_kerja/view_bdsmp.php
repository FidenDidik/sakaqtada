<?php $this->load->view('backend/template_user/user_header.php'); ?>
  <div class="pcoded-inner-content">
  <div class="container-fluid">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <?php if($this->session->flashdata('bdsmp') === 'success_delete') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SMP Sukses di Hapus.
                </div>
                <?php } ?>
                <?php if($this->session->flashdata('bdsmp') === 'success_edit') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SMP Sukses di Edit
                </div>
                <?php } ?>
                <?php if($this->session->flashdata('bdsmp') === 'success_add') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang SMP ditambahkan
                </div>
                <?php } ?>
                    <div class="card">
                        <div class="card-header">
                        <?php foreach ($data->result() as $row) { ?>
                         <h3>Bidang Pembinaan SMP</h3>
                            </div>
                              <div class="card-block">
                                <h5><?php echo $row->judul; ?></h5>
                                <br>
                                <p><?php echo $row->uraian; ?></p>
                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Bdsmp/edit_bdsmp/<?php echo $row->id_bdsmp;?>" class="btn waves-effect waves-light btn-primary btn-skew">Update</a>&nbsp;             
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