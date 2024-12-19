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
                                echo form_open('backend/user/C_Berita/update_berita', $attrib); 
                               ?>
                                <br>
                                  <?php foreach ($data as $row) : ?>
                                    <div class="form-group">
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>">
                                        <label>Judul</label>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $row->judul; ?>">
                                        <p> <?php echo form_error('judul'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>">
                                        <label>deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $row->deskripsi; ?>">
                                        <p> <?php echo form_error('deskripsi'); ?> </p>
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>"> 
                                        <label for="exampleFormControlSelect1">Kategori</label>
                                        <select class="form-control" name="kategori" id="kategori">
                                            <option value="Kegiatan Desa">Kegiatan Desa</option>
                                            <option value="Info Kabupaten">Info Kabupaten</option>
                                            <option value="Info Nasional">Info Nasional</option>
                                           
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>">
                                        <label>Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" value="<?php echo $row->tanggal; ?>">
                                        <p> <?php echo form_error('tanggal'); ?> </p>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>">
                                        <label>Jam</label>
                                        <input type="text" name="jam" class="form-control" value="<?php echo $row->jam; ?>">
                                        <p> <?php echo form_error('jam'); ?> </p>
                                        </div>

                                        <br><br><br>
                                        <div class="form-group">
                                        <input type="hidden" id="hide" name="id_berita" value="<?php echo $row->id_berita; ?>"> 
                                        <label>Uraian</label>
                                        <textarea class="ckeditor" id="ckedtor" name="uraian"><?php echo $row->uraian; ?></textarea>
                                        <p> <?php echo form_error('uraian'); ?> </p>

                                    <button type="submit" class="btn waves-effect waves-light btn-primary btn-skew">Update</button>
                                    <a href="<?php echo base_url(); ?>index.php/backend/user/C_Berita/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
              
<?php $this->load->view('backend/template_user/user_footer.php'); ?>