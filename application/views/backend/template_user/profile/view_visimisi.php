<?php $this->load->view('backend/template_user/user_header.php'); ?>
  <div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
              <?php if($visimisi->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                    <?php foreach($visimisi->result() as $img) : ?>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Visi dan Misi</h4>
                                    </div>
                                    <div class="card-block">
                                    <p><?=img(['src'=>$img->file, 'width'=>'30%'])?> </p>
                                    <h5>Visi</h5>
                                    <p><?=$img->visi?></p>
                                    <hr>
                                    <h5>Misi</h5>
                                    <p><?=$img->misi?></p>
                                    <?=anchor('backend/user/C_Visimisi/edit/'.$img->id_visimisi,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?> 
            </div>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>
</div>
</div>
<div id="styleSelector">
</div>
<?php $this->load->view('backend/template_user/user_footer.php');
?>