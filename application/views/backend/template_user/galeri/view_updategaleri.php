<?php $this->load->view('backend/template_user/user_header.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
	$nama		= set_value('nama');
    
	
	
} else {
	$nama	    = $image->nama;
    

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Foto Galeri</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Update Foto Galeri</h5>
                                <hr>
                                    <?php if(validation_errors() || isset($error)) : ?>
                                        <div class="alert alert-danger" role="alert" align="center">
                                            <?=validation_errors()?>
                                            <?=(isset($error)?$error:'')?>
                                        </div>
                                         <?php endif; ?>
                                           <?=form_open_multipart('backend/user/galeri/C_Galeri/edit/'.$image->id_galeri)?>
                                            <br>
                                                <div class="form-group form-control-round">
                                                <label for="userfile">Image File</label>
                                                <div class="row" style="margin-bottom:5px"><div class="col-xs-6 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
                                                <input type="file" class="form-control" name="userfile">
                                                
                                                </div>
                                                <div class="form-group ">
                                                <label for="nama">Judul Foto</label>
                                                <input type="text" class="form-control" name="nama" value="<?=$nama?>">
                                                </div>
                                              
                                            <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Upload</button>
                                        <?=anchor('backend/user/C_Galeri/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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