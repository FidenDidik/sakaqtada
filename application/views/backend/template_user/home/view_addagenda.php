<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Agenda</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Agenda</h5>      
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Agenda/save_agenda', $attrib); 
                        ?>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control">
                            <p> <?php echo form_error('tanggal'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="agenda">Agenda</label>
                            <input type="text" name="agenda" class="form-control">
                            <p> <?php echo form_error('agenda'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" class="form-control">
                            <p> <?php echo form_error('jam'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control">
                            <p> <?php echo form_error('lokasi'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="petugas_liputan">Petugas Liputan</label>
                            <input type="text" name="petugas_liputan" class="form-control">
                            <p> <?php echo form_error('petugas_liputan'); ?> </p>
                        </div>
        
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