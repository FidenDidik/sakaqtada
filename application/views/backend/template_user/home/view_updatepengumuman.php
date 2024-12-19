<?php $this->load->view('backend/template_user/user_header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Pengumuman</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Update Pengumuman</h5>
                                <hr>
                                <?php 
                                    $attrib = array('role'=>'form');
                                        echo form_open('backend/user/C_Pengumuman/update_pengumuman', $attrib); 
                                        ?>
                                        <?php foreach ($data as $row) : ?>
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_pengumuman" value="<?php echo $row->id_pengumuman; ?>">
                                        <label><b>Judul</b></label>
                                            <input type="text" name="judul" class="form-control" value="<?php echo $row->judul; ?>">
                                        <p> <?php echo form_error('judul'); ?> </p>

                                        <input type="hidden" id="hide" name="id_pengumuman" value="<?php echo $row->id_pengumuman; ?>">
                                        <label><b>Tangal</b></label>
                                            <input type="text" name="tanggal" class="form-control" value="<?php echo $row->tanggal; ?>">
                                        <p> <?php echo form_error('tanggal'); ?> </p>

                                        <input type="hidden" id="hide" name="id_pengumuman" value="<?php echo $row->id_pengumuman; ?>">
                                        <label><b>Uraian Pengumuman</b></label>
                                        <textarea class="ckeditor" id="ckedtor" name="pengumuman"><?php echo $row->pengumuman; ?></textarea>
                                        <p> <?php echo form_error('pengumuman'); ?> </p>

                                        <input type="submit" class="btn waves-effect waves-light btn-primary btn-skew" value="Update">&nbsp;
                                        <a href="<?php echo base_url(); ?>index.php/backend/user/C_Pengumuman/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
                                        <?php echo form_close(); ?>
                                        </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</html>
<?php $this->load->view('backend/template_user/user_footer.php'); ?>