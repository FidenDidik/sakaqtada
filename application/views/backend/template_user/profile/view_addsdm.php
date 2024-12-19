<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Add New Image</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Sumber Daya Manusia (SDM)</h5>
                    </div>
                        <div class="card-block">
                        <p>Add New Image</p>
                         
                         <?=form_open_multipart('backend/user/C_Sdm/add')?>
                         <div class="form-group">
                            <label for="userfile">Image File</label>
                            <input type="file" class="form-control" name="userfile">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" value="">
                        </div>
                        <div class="form-group">
                            <label for="kelahiran">Kelahiran</label>
                            <input type="text" class="form-control" name="kelahiran" value="">
                        </div>
                        <div class="form-group">
                            <label for="pangakat">Pangkat</label>
                            <input type="text" class="form-control" name="pangkat" value="">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan" value="">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="">
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
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
<div id="styleSelector">
</div>
<?php $this->load->view('backend/template_user/user_footer.php');
?>