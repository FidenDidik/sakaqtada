<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Data Sekolah</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Data Pendidikan</h5>
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Datapendidikan/save_datapendidikan', $attrib); 
                        ?>
                       <div class="row">
                          <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_rt"><b>Nama RT</b></label>
                            <input type="text" name="nama_rt" class="form-control">
                            <p> <?php echo form_error('nama_rt'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="sd"><b>Jumlah SD</b></label>
                            <input type="text" name="sd" class="form-control">
                            <p> <?php echo form_error('sd'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="smp"><b>Jumlah SMP</b></label>
                            <input type="text" name="smp" class="form-control">
                            <p> <?php echo form_error('smp'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="slta"><b>Jumlah SLTA</b></label>
                            <input type="text" name="slta" class="form-control">
                            <p> <?php echo form_error('slta'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="d1"><b>Jumlah D1</b></label>
                            <input type="text" name="d1" class="form-control">
                            <p> <?php echo form_error('d1'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="d2"><b>Jumlah D2</b></label>
                            <input type="text" name="d2" class="form-control">
                            <p> <?php echo form_error('d2'); ?> </p>
                            </div>
                            </div>
                            
                            <div class="col-md-6">

                            <div class="form-group">
                            <label for="d3"><b>Jumlah D3</b></label>
                            <input type="text" name="d3" class="form-control">
                            <p> <?php echo form_error('d3'); ?> </p>
                            </div>

                            <div class="form-group">
                            <label for="s1"><b>Jumlah S1</b></label>
                            <input type="text" name="s1" class="form-control">
                            <p> <?php echo form_error('s1'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="s2"><b>Jumlah S2</b></label>
                            <input type="text" name="s2" class="form-control">
                            <p> <?php echo form_error('s2'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="s3"><b>Jumlah S3</b></label>
                            <input type="text" name="s3" class="form-control">
                            <p> <?php echo form_error('s3'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="tidak_tamatSD"><b>Tidak Tamat SD</b></label>
                            <input type="text" name="tidak_tamatSD" class="form-control">
                            <p> <?php echo form_error('tidak_tamatSD'); ?> </p>
                            </div>
                            <div class="form-group">
                            <label for="tidak_sekolah"><b>Tidak Sekolah</b></label>
                            <input type="text" name="tidak_sekolah" class="form-control">
                            <p> <?php echo form_error('tidak_sekolah'); ?> </p>
                            </div>
                             <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                            <?=anchor('backend/user/C_Datapendidikan/index','Batal',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
                        </form>
                        </div>
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