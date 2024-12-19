<?php $this->load->view('backend/template_user/user_header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Bidang Pembinaan SD</title>
</head>
  <div class="pcoded-inner-content">
  <div class="container-fluid">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
             
                <?php if($this->session->flashdata('bdpaud') === 'success_edit') { ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Bidang Paud Sukses di Edit
                </div>
                <?php } ?>
              
                    <div class="card">
                        <div class="card-header">
                        <?php foreach ($data->result() as $row) { ?>
                         <h3>Bidang Pembinaan Paud</h3>
                            </div>
                              <div class="card-block">
                                <h5><?php echo $row->judul; ?></h5>
                                <br>
                                <p><?php echo $row->uraian; ?></p>
                            <a href="<?php echo base_url(); ?>index.php/backend/user/C_Bdpaud/edit_bdpaud/<?php echo $row->id_bdpaud;?>" class="btn waves-effect waves-light btn-primary btn-skew">Update</a>&nbsp;             
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