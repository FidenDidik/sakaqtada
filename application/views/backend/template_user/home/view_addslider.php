<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Image Slider</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Image Slider</h5>      
                    </div>
                        <div class="card-block">
                     
                        <div class="card-block">
                        <p>Add New Image</p>
                         <?=form_open_multipart('backend/user/C_Slider/add')?>
                         <div class="form-group">
                            <label for="userfile">Image File</label>
                            <input type="file" class="form-control" name="userfile">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control">
                            <p> <?php echo form_error('judul'); ?> </p>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
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
<div id="styleSelector">
</div>
<?php $this->load->view('backend/template_user/user_footer.php');
?>