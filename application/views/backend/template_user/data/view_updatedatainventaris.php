<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Update Data Inventaris</title>
<div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
             <div class="card">  
                <div class="card-header">
                    <h5>Update Data Inventaris</h5>
                        <hr>
                            <?php 
                                $attrib = array('role'=>'form');
                                echo form_open('backend/user/C_Datainventaris/update_datainventaris', $attrib); 
                               ?>
                                <br>
                                  <?php foreach ($data as $row) : ?>
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Nama inventaris</b></label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $row->nama; ?>">
                                        <p> <?php echo form_error('nama'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label for="exampleFormControlSelect1"><b>JK</b></label>
                                        <select class="form-control" name="jk" id="jk">
                                           <option value="">Pilih Salah Satu</option>
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                        </select>
                                        </div>
                                        
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>PNS/Honorer</b></label>
                                        <input type="text" name="pns_honorer" class="form-control" value="<?php echo $row->pns_honorer; ?>">
                                        <p> <?php echo form_error('pns_honorer'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Golongan</b></label>
                                        <input type="text" name="golongan" class="form-control" value="<?php echo $row->golongan; ?>">
                                        <p> <?php echo form_error('golongan'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Tugas Sebagai</b></label>
                                        <input type="text" name="tugas" class="form-control" value="<?php echo $row->tugas; ?>">
                                        <p> <?php echo form_error('tugas'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Tempat Tugas</b></label>
                                        <input type="text" name="tempat_tugas" class="form-control" value="<?php echo $row->tempat_tugas; ?>">
                                        <p> <?php echo form_error('tempat_tugas'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Tempat Lahir</b></label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row->tempat_lahir; ?>">
                                        <p> <?php echo form_error('tempat_lahir'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>Usia</b></label>
                                        <input type="text" name="usia" class="form-control" value="<?php echo $row->usia; ?>">
                                        <p> <?php echo form_error('usia'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_datainventaris" value="<?php echo $row->id_datainventaris; ?>">
                                        <label><b>MK</b></label>
                                        <input type="text" name="mk" class="form-control" value="<?php echo $row->mk; ?>">
                                        <p> <?php echo form_error('mk'); ?> </p>
                                        </div>
                                        
                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datainventaris/index" class="btn waves-effect waves-light btn-warning btn-skew">Batal</a>
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