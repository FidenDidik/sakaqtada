<?php $this->load->view('backend/template_user/user_header.php'); ?>
  <div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
              <?php if($struktur->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                        <?php endif; ?>
                        <div class="row">
                        <?php foreach($struktur->result() as $img) : ?>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                <h5><?=$img->judul?></h5>
                                </div>
                                   <div class="card-block">
                                    <div class="text-center">
                                   <?=img(['src'=>$img->file, 'width'=>'70%'])?> </p>
                                   </div>
                                </p>
                                <?=anchor('backend/user/C_Struktur/edit/'.$img->id_struktur,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
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