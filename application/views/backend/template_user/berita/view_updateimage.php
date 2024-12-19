<?php $this->load->view('backend/template_user/user_header.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
	$judul		= set_value('judul');
    $deskripsi	= set_value('deskripsi');
    $uraian		= set_value('uraian');
    $kategori	= set_value('kategori');
    $tanggal	= set_value('tanggal');
    $jam	    = set_value('jam');
	
	
} else {
	$judul		    = $image->judul;
    $deskripsi		= $image->deskripsi;
    $uraian		    = $image->uraian;
    $kategori		= $image->kategori;
    $tanggal		= $image->tanggal;
    $jam		    = $image->jam;


   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update SDM</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Update image Berita</h5>
                                <hr>
                                    <?php if(validation_errors() || isset($error)) : ?>
                                        <div class="alert alert-danger" role="alert" align="center">
                                            <?=validation_errors()?>
                                            <?=(isset($error)?$error:'')?>
                                        </div>
                                         <?php endif; ?>
                                           <?=form_open_multipart('backend/user/C_Imageberita/edit/'.$image->id_berita)?>
                                            <br>
                                                <div class="form-group form-control-round">
                                                <label for="userfile">Image File</label>
                                                <div class="row" style="margin-bottom:5px"><div class="col-xs-6 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
                                                <input type="file" class="form-control" name="userfile">
                                                </div>

                                                <input type="hidden"  name="judul" class="form-control" value='<?=$judul?>'/><?php echo form_error('judul'); ?> 
                                                <input type="hidden"  name="deskripsi" class="form-control" value='<?=$deskripsi?>'/><?php echo form_error('deskripsi'); ?>
                                                <input type="hidden"  name="kategori" class="form-control" value='<?=$kategori?>'/><?php echo form_error('kategori'); ?>  
                                                <input type="hidden"  name="tanggal" class="form-control" value='<?=$tanggal?>'/><?php echo form_error('tanggal'); ?>  
                                                <input type="hidden"  name="jam" class="form-control" value='<?=$jam?>'/><?php echo form_error('jam'); ?>  
                                                
                                            <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Upload</button>
                                        <?=anchor('backend/user/C_Berita/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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