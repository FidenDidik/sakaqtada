<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Update Agenda</title>
<div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
             <div class="card">  
                <div class="card-header">
                    <h5>Update Agenda</h5>
                        <hr>
                            <?php 
                                $attrib = array('role'=>'form');
                                echo form_open('backend/user/C_Agenda/update_agenda', $attrib); 
                               ?>
                                <br>
                                  <?php foreach ($data as $row) : ?>
                                    <div class="form-group">
                                       
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_agenda" value="<?php echo $row->id_agenda; ?>">
                                        <label>Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" value="<?php echo $row->tanggal; ?>">
                                        <p> <?php echo form_error('tanggal'); ?> </p>
                                        </div>
                                        
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_agenda" value="<?php echo $row->id_agenda; ?>">
                                        <label>Agenda</label>
                                        <input type="text" name="agenda" class="form-control" value="<?php echo $row->agenda; ?>">
                                        <p> <?php echo form_error('agenda'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_agenda" value="<?php echo $row->id_agenda; ?>">
                                        <label>Jam</label>
                                        <input type="text" name="jam" class="form-control" value="<?php echo $row->jam; ?>">
                                        <p> <?php echo form_error('jam'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_agenda" value="<?php echo $row->id_agenda; ?>">
                                        <label>Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" value="<?php echo $row->lokasi; ?>">
                                        <p> <?php echo form_error('lokasi'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_agenda" value="<?php echo $row->id_agenda; ?>">
                                        <label>Petugas Liputan</label>
                                        <input type="text" name="petugas_liputan" class="form-control" value="<?php echo $row->petugas_liputan; ?>">
                                        <p> <?php echo form_error('petugas_liputan'); ?> </p>
                                        </div>


                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Agenda/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
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