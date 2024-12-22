<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Data Inventaris</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Data Daftar Inventaris Kampung</h5>
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Datainventaris/save_datainventaris', $attrib); 
                        ?>
                     <div class="row">
                        <div class="col-md-6">

                        <div class="form-group">
                            <label for="asal_tanah"><b>Nama Inventaris</b></label>
                            <input type="text" name="asal_tanah" class="form-control">
                            <p> <?php echo form_error('asal_tanah'); ?> </p>
                            </div>
                           
                        <div class="form-group">
                            <label for="luas"><b>Luas</b></label>
                            <input type="text" name="luas" class="form-control">
                            <p> <?php echo form_error('luas'); ?> </p>
                        </div>

                        <div class="form-group">
                            <label for="no_sertifikat"><b>No Sertifikat</b></label>
                            <input type="text" name="no_sertifikat" class="form-control">
                            <p> <?php echo form_error('no_sertifikat'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="peroleh_tahun"><b>Perolehan Tahun</b></label>
                            <input type="text" name="peroleh_tahun" class="form-control">
                            <p> <?php echo form_error('peroleh_tahun'); ?> </p>
                        </div>

                        <div class="form-group">
                            <label for="peruntukan"><b>Peruntukan</b></label>
                            <input type="text" name="peruntukan" class="form-control">
                            <p> <?php echo form_error('peruntukan'); ?> </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lokasi"><b>Lokasi</b></label>
                            <input type="text" name="lokasi" class="form-control">
                            <p> <?php echo form_error('lokasi'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="sumber_dari"><b>Sumber Dari</b></label>
                            <input type="text" name="sumber_dari" class="form-control">
                            <p> <?php echo form_error('sumber_dari'); ?> </p>
                        </div>

                        <div class="form-group">
                            <label for="pelepasan"><b>Pelepasan</b></label>
                            <input type="text" name="pelepasan" class="form-control">
                            <p> <?php echo form_error('pelepasan'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="keterangan"><b>Keterangan</b></label>
                            <input type="text" name="keterangan" class="form-control">
                            <p> <?php echo form_error('keterangan'); ?> </p>
                        </div>
                             <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Datainventaris/index','Batal',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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