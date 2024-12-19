<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Tambah Berita</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Tambah Berita</h5>
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Berita/save_berita', $attrib); 
                        ?>
                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" name="judul" class="form-control">
                            <p> <?php echo form_error('judul'); ?> </p>
                            </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                            <p> <?php echo form_error('deskripsi'); ?> </p>
                            </div>
                            
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="Kegiatan Desa">Kegiatan Desa</option>
                                <option value="Info Nasional">Info Nasional</option>
                                <option value="Info Kabupaten">Info Kabupaten</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" name="tanggal" class="form-control">
                            <p> <?php echo form_error('tanggal'); ?> </p>
                        </div>
                        
                        <div class="form-group">
                            <label>Jam</label>
                            <input type="text" name="jam" class="form-control">
                            <p> <?php echo form_error('jam'); ?> </p>
                        </div>

                        <br><br>

                        <div class="form-group">
                            <label>Uraian</label>
                            <textarea class="ckeditor" id="ckedtor" name="uraian"></textarea>
                            <p> <?php echo form_error('uraian'); ?> </p>
                      
                        </div>

                        <input type="hidden" name="file" class="form-control" value="Belum di Upload"/>
                         
                       

                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Tambah</button>
                        <?=anchor('backend/user/C_Berita/index','Cancel',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>

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