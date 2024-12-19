<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Pengumuman</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Pengumuman</h5>      
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Pengumuman/save_pengumuman', $attrib); 
                        ?>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control">
                            <p> <?php echo form_error('judul'); ?> </p>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control">
                            <p> <?php echo form_error('tanggal'); ?> </p>
                        </div>

                        <div class="form-group">
                        <label for="pengumuman">Uraian Pengumuman</label>
                            <textarea class="ckeditor" id="ckedtor" name="pengumuman"></textarea>
                            <p> <?php echo form_error('pengumuman'); ?> </p>
                      
                        </div>
                        
                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Pengumuman/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>

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