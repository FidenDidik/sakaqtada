<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Data Guru</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Data Daftar Penduduk</h5>
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Dataguru/save_dataguru', $attrib); 
                        ?>
                        <div class="form-group">
                            <label for="nama"><b>Nama Guru</b></label>
                            <input type="text" name="nama" class="form-control">
                            <p> <?php echo form_error('nama'); ?> </p>
                            </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><b>JK</b></label>
                            <select class="form-control" name="jk" id="jk">
                                <option value="">Pilih salah satu</option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>

                        <div class="form-group">
                         <label for="pns_honorer"><b>PNS/Honorer</b></label>
                            <input type="text" name="pns_honorer" class="form-control">
                            <p> <?php echo form_error('pns_honorer'); ?> </p>
                        </div>

                        <div class="form-group">
                         <label for="golongan"><b>Golongan</b></label>
                            <input type="text" name="golongan" class="form-control">
                            <p> <?php echo form_error('golongan'); ?> </p>
                        </div>

                        <div class="form-group">
                         <label for="tugas"><b>Tugas</b></label>
                            <input type="text" name="tugas" class="form-control">
                            <p> <?php echo form_error('tugas'); ?> </p>
                        </div>

                        <div class="form-group">
                         <label for="tempat_tugas"><b>Tempat Tugas</b></label>
                            <input type="text" name="tempat_tugas" class="form-control">
                            <p> <?php echo form_error('tempat_tugas'); ?> </p>
                        </div>

                        <div class="form-group">
                         <label for="tempat_lahir"><b>Tempat Lahir</b></label>
                            <input type="text" name="tempat_lahir" class="form-control">
                            <p> <?php echo form_error('tempat_lahir'); ?> </p>
                        </div>
                        <div class="form-group">
                         <label for="usia"><b>Usia</b></label>
                            <input type="text" name="usia" class="form-control">
                            <p> <?php echo form_error('usia'); ?> </p>
                        </div>

                        <div class="form-group">
                         <label for="mk"><b>MK</b></label>
                            <input type="text" name="mk" class="form-control">
                            <p> <?php echo form_error('mk'); ?> </p>
                        </div>
                             <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Dataguru/index','Batal',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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