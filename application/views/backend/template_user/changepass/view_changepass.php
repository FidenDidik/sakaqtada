<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Ubah Password</title>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                <div class="col-sm-8">
                <?= $this->session->flashdata('notif');?>
                <div class="card">  
                    <div class="card-header">
                    <h5>Ubah Password user</h5>
                    </div>
                        <div class="card-block">
                        <?php 
							 $attrib = array('role'=>'form');
							 echo form_open('backend/user/C_Changepass/change_pass', $attrib); 
                        ?>
                         <div class="form-group">
                        <label class="control-label col-lg-8" for="inputSuccess"><b> Password Lama</b></label>
                        <div class="col-lg-12">
                            <input name="pass_lama" class="form-control m-bot15" type="password" size="50" required>
                        </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-lg-8" for="inputSuccess"><b>Password Baru</b></label>
                            <div class="col-lg-12">
                                <input name="pass_baru" class="form-control m-bot15" type="password" size="50" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-lg-8" for="inputSuccess"><b>Konfirmasi Password Baru</b></label>
                            <div class="col-lg-12">
                                <input name="konf_pass_baru" class="form-control m-bot15" type="password" size="50" required>
                            </div>
                        </div>

                       
                        <div class="col-lg-offset-2 col-lg-10">
                    <input class="btn waves-effect waves-light btn-primary btn-skew" type="submit" name="submit" value="Ubah Password">
                    
                        <?=anchor('backend/user/C_Changepass/index','Batal',['class'=>'btn waves-effect waves-light btn-warning btn-skew'])?>
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