<?php $this->load->view('backend/template_user/user_header.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
	$judul 		= set_value('judul');
	
	
} else {
	$judul 		= $image->judul;
	
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Image Slider</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Update Image</h5>
                                <hr>
                                    <?php if(validation_errors() || isset($error)) : ?>
                                        <div class="alert alert-danger" role="alert" align="center">
                                            <?=validation_errors()?>
                                            <?=(isset($error)?$error:'')?>
                                        </div>
                                         <?php endif; ?>
                                             <br>
                                             <?=form_open_multipart('backend/user/C_Slider/edit/'.$image->id_slider)?>
                                                <div class="form-group">
                                                <label for="userfile">Image File</label>
                                                <div class="row" style="margin-bottom:5px"><div class="col-xs-6 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
                                                <input type="file" class="form-control" name="userfile">
                                                </div>
                                                <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" name="judul" value="<?=$judul?>">
                                                </div>
                                            <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                        <?=anchor('backend/user/C_Slider/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</html>
<?php $this->load->view('backend/template_user/user_footer.php'); ?>