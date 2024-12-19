<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Video</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Video</h5>      
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Video/save_video', $attrib); 
                        ?>
                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" name="judul_video" class="form-control">
                            <p> <?php echo form_error('judul_video'); ?> </p>
                        </div>

                        <div class="form-group">
                            <input type="hidden"  name="frame1" class="form-control" value='<iframe width="353" height="180" src="https://www.youtube.com/embed/'/>
                        </div>

                        <div class="form-group">
                        <label for="nama">Video Code</label>
                        <div class="col-sm-3">
                            <input type="text" name="video" class="form-control">
                            <p> <?php echo form_error('video'); ?></p>
                        </div>
                        </div>
                            
                        <input type="hidden"  name="frame2" class="form-control" value='" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'/>
                        
                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Video/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>

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