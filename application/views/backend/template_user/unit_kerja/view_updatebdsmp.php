<?php $this->load->view('backend/template_user/user_header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Bidang Pembinaan SMP</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Update Bidang Pembinaan SMP</h5>
                                <hr>
                                <?php 
                                $attrib = array('role'=>'form');
                                echo form_open('backend/user/C_Bdsmp/update_bdsmp', $attrib); 
                               ?>
                                <br>
                                    <div class="form-group">
                                    <?php foreach ($data as $row) : ?>
                                        <input type="hidden" id="hide" name="id_bdsd" value="<?php echo $row->id_bdsmp; ?>">
                                        <label>Judul</label>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $row->judul; ?>">
                                        <p> <?php echo form_error('judul'); ?> </p>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_bdsd" value="<?php echo $row->id_bdsmp; ?>">
                                        <label>Uraian</label>
                                        <textarea class="ckeditor" id="ckedtor" name="uraian"><?php echo $row->uraian; ?></textarea>
                                        <p> <?php echo form_error('uraian'); ?> </p>

                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Bdsmp/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</html>
<?php $this->load->view('backend/template_user/user_footer.php'); ?>