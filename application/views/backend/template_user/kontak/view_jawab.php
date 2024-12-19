<?php $this->load->view('backend/template_user/user_header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jawab Kontak</title>
</head>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                            <?php foreach ($data as $row) : ?>
                                <h5>Balas Pesan</h5> || Status Pesan : <?php echo $row->status; ?>
                                <?php endforeach ?>
                                <hr>
                                <?php 
                                    $attrib = array('role'=>'form');
                                        echo form_open('backend/user/C_Kontak/update_kontak', $attrib); 
                                        ?>
                                        <?php foreach ($data as $row) : ?>
                                          <div class="row">
                                          <div class="col-6">
                                          <div class="table-responsive">
                                          <table class="table table-bordered" width="100%">
                                        <tr>
                                            <td width="25%">Nama</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->nama; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">Phone</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">Email</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->email; ?></td>
                                        </tr>
                                      </table>
                                      </div>
                                      </div>
                                          <div class="col-6">
                                          <div class="table-responsive">
                                          <table class="table table-bordered" width="100%">
                                        <tr>
                                            <td width="25%">Pekerjaan</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->pekerjaan; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">Alamat</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->alamat; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">Tanggal Dikirim || Dijawab</td>
                                            <td width="1%">:</td>
                                            <td width="74%"><?php echo $row->date; ?> || <?php echo $row->tanggal_jawab; ?></td>
                                        </tr>
                                      </table>
                                       </div>
                                          </div>
                                          </div>
                                       <br>
                                       <div class="row">
                                          <div class="col-sm-12">
                                           <div class="card">
                                             <div class="card-header">
                            
                                        <input type="hidden" id="hide" name="id_kontak" value="<?php echo $row->id_kontak; ?>">
                                        <label><b>Komentar</b></label>
                                        <textarea name="komentar" id="komentar" required="required" class="form-control" style="min-height: 170px;" disabled><?php echo $row->komentar; ?></textarea>
                                        <p> <?php echo form_error('komentar'); ?> </p>

                                        <input type="hidden" id="hide" name="id_kontak" value="<?php echo $row->id_kontak; ?>">
                                        <label><b>Jawab Komentar</b></label>
                                        <textarea name="jawaban" id="jawaban" required="required" class="form-control" style="min-height: 170px;" ><?php echo $row->jawaban; ?></textarea>
                                        <p> <?php echo form_error('jawaban'); ?> </p>

                                        <input type="hidden" id="hide" name="id_kontak" value="<?php echo $row->id_kontak; ?>">
                                          <input type="hidden"  name="status" class="form-control" value='<label class="label label-success">Terjawab</label>'/><?php echo form_error('status'); ?> 

                                        <input type="submit" class="btn waves-effect waves-light btn-primary btn-skew" value="Update">&nbsp;
                                        <a href="<?php echo base_url(); ?>index.php/backend/user/C_Kontak/index" class="btn waves-effect waves-light btn-warning btn-skew">Cancel</a>
                                        <?php echo form_close(); ?>
                                        </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</html>
<?php $this->load->view('backend/template_user/user_footer.php'); ?>