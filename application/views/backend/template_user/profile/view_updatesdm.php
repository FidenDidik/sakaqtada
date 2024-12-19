<?php $this->load->view('backend/template_user/user_header.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
	$nama		= set_value('nama');
	$nip 	    = set_value('nip');
    $kelahiran 	= set_value('kelahiran');
    $pangkat 	= set_value('pangkat');
    $pendidikan = set_value('pendidikan');
    $jabatan 	= set_value('jabatan');
	
} else {
	$nama		    = $image->nama;
	$nip 	        = $image->nip;
    $kelahiran 	    = $image->kelahiran;
    $pangkat	    = $image->pangkat;
    $pendidikan 	= $image->pendidikan;
    $jabatan 	    = $image->jabatan;
   
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
                                <h5>Update SDM</h5>
                                <hr>
                                    <?php if(validation_errors() || isset($error)) : ?>
                                        <div class="alert alert-danger" role="alert" align="center">
                                            <?=validation_errors()?>
                                            <?=(isset($error)?$error:'')?>
                                        </div>
                                         <?php endif; ?>
                                           <?=form_open_multipart('backend/user/C_Sdm/edit/'.$image->id_sdm)?>
                                            <br>
                                                <div class="form-group form-control-round">
                                                <label for="userfile">Image File</label>
                                                <div class="row" style="margin-bottom:5px"><div class="col-xs-6 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
                                                <input type="file" class="form-control" name="userfile">
                                                </div>

                                                <div class="form-group ">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" name="nama" value="<?=$nama?>">
                                                </div>
                                                <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" class="form-control" name="nip" value="<?=$nip?>">
                                                </div>
                                                <div class="form-group">
                                                <label for="kelahiran">Kelahiran</label>
                                                <input type="text" class="form-control" name="kelahiran" value="<?=$kelahiran?>">
                                                </div>
                                                <div class="form-group">
                                                <label for="pangkat">Pangkat</label>
                                                <input type="text" class="form-control" name="pangkat" value="<?=$pangkat?>">
                                                </div>
                                                <div class="form-group">
                                                <label for="pendidikan">Pendidikan</label>
                                                <input type="text" class="form-control" name="pendidikan" value="<?=$pendidikan?>">
                                                </div>
                                                <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan" value="<?=$jabatan?>">
                                                </div>
   
                                            <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                        <?=anchor('backend/user/C_Sdm/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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