<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah File Info Publik</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah File Info Publik</h5>      
                    </div>
                        <div class="card-block">
                         <?=form_open_multipart('backend/user/C_Unduhan/add')?>
                         <div class="form-group">
                            <label for="userfile">Pdf File</label>
                            <input type="file" class="form-control" name="userfile">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Judul</label>
                            <input type="text" name="nama" class="form-control">
                            <p> <?php echo form_error('nama'); ?> </p>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="">Pilih Salah Satu</option> 
                                <option value="Informasi Publik">Informasi Publik</option>
                                <option value="Info APBD">Info APBD</option>
                                <option value="Info LAKIP">Info LAKIP</option>
                                <option value="Info Renstra">Info Renstra</option>
                                <option value="LKPJ">LKPJ</option>
                                <option value="RPJMD">RPJMD</option>
                                <option value="Peraturan Bupati">Peraturan Bupati</option>
                                <option value="Peraturan Daerah">Peraturan Daerah</option>
                                <option value="Keputusan Bupati">Keputusan Bupati</option>
                            </select>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Unduhan/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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