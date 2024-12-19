<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Update Berita</title>
<div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
             <div class="card">  
                <div class="card-header">
                    <h5>Update Berita</h5>
                        <hr>
                            <?php 
                                $attrib = array('role'=>'form');
                                echo form_open('backend/user/C_Video/update_video', $attrib); 
                               ?>
                                <br>
                                  <?php foreach ($data as $row) : ?>
                                    <div class="form-group">
                                        
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_video" value="<?php echo $row->id_video; ?>">
                                        <label>Judul Video</label>
                                        <input type="text" name="judul_video" class="form-control" value="<?php echo $row->judul_video; ?>">
                                        <p> <?php echo form_error('judul_video'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_video" value="<?php echo $row->id_video; ?>">
                                        <input type="hidden" name="frame1" class="form-control" value='<iframe width="353" height="180" src="https://www.youtube.com/embed/'>
                                        <p> <?php echo form_error('video'); ?> </p>
                                        </div>

                                        
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_video" value="<?php echo $row->id_video; ?>">
                                        <label>Video Code</label>
                                        <input type="text" name="video" class="form-control" value="<?php echo $row->video; ?>">
                                        <p> <?php echo form_error('video'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_video" value="<?php echo $row->id_video; ?>">
                                        <input type="hidden" name="frame2" class="form-control" value='" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'>
                                        <p> <?php echo form_error('frame2'); ?> </p>
                                        </div>


                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/video/C_Video/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
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