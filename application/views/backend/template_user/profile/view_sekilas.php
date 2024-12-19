<?php $this->load->view('backend/template_user/user_header.php'); ?>
  <div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
              <?php if($sekilas->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                <div class="row">
                <?php foreach($sekilas->result() as $img) : ?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5><?=$img->judul?></h5>
                                </div>
                                   <div class="card-block">
                                   <!-- <p><?=img(['src'=>$img->file, 'width'=>'30%'])?> </p> -->
                                  <p> <?php echo $img->uraian; ?>
                                </p>
                                <?=anchor('backend/user/C_Sekilas/edit/'.$img->id_sekilas,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
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