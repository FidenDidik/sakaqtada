<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Update Data Pendidikan</title>
<div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
             <div class="card">  
                <div class="card-header">
                    <h5>Update Data Pendidikan</h5>
                        <hr>
                            <?php 
                                $attrib = array('role'=>'form');
                                echo form_open('backend/user/C_Datapendidikan/update_datapendidikan', $attrib); 
                               ?>
                                <br>
                                  <?php foreach ($data as $row) : ?>
                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Nama RT</label>
                                            <input type="text" name="nama_rt" class="form-control" value="<?php echo $row->nama_rt; ?>">
                                            <p> <?php echo form_error('nama_rt'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah SD</label>
                                            <input type="text" name="sd" class="form-control" value="<?php echo $row->sd; ?>">
                                            <p> <?php echo form_error('sd'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah SMP</label>
                                            <input type="text" name="smp" class="form-control" value="<?php echo $row->smp; ?>">
                                            <p> <?php echo form_error('smp'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah SLTA</label>
                                            <input type="text" name="slta" class="form-control" value="<?php echo $row->slta; ?>">
                                            <p> <?php echo form_error('slta'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah D1</label>
                                            <input type="text" name="d1" class="form-control" value="<?php echo $row->d1; ?>">
                                            <p> <?php echo form_error('d1'); ?> </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah D2</label>
                                            <input type="text" name="d2" class="form-control" value="<?php echo $row->slta; ?>">
                                            <p> <?php echo form_error('d2'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah D3</label>
                                            <input type="text" name="d3" class="form-control" value="<?php echo $row->d3; ?>">
                                            <p> <?php echo form_error('d3'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah S1</label>
                                            <input type="text" name="s1" class="form-control" value="<?php echo $row->s1; ?>">
                                            <p> <?php echo form_error('s1'); ?> </p>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah S2</label>
                                            <input type="text" name="s2" class="form-control" value="<?php echo $row->s2; ?>">
                                            <p> <?php echo form_error('s2'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah S3</label>
                                            <input type="text" name="s3" class="form-control" value="<?php echo $row->s1; ?>">
                                            <p> <?php echo form_error('s3'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah Tidak Tamat SD</label>
                                            <input type="text" name="tidak_tamatSD" class="form-control" value="<?php echo $row->tidak_tamatSD; ?>">
                                            <p> <?php echo form_error('tidak_tamatSD'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" id="hide" name="id_datapendidikan" value="<?php echo $row->id_datapendidikan; ?>">
                                            <label>Jumlah Tidak Sekolah</label>
                                            <input type="text" name="tidak_sekolah" class="form-control" value="<?php echo $row->tidak_sekolah; ?>">
                                            <p> <?php echo form_error('tidak_sekolah'); ?> </p>
                                        </div>
                                        
                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Datapendidikan/index" class="btn waves-effect waves-light btn-warning btn-skew">Batal</a>
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