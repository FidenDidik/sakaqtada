<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($berita->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Upload Image Berita</h5>
                     </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($berita->result() as $img) : ?>
                                            <tr>
                                            <td><?=$img->judul ?></td>
                                           
                                            <td><?=img(['src'=>$img->file, 'width'=>'50%'])?></td>
                                            <td>
                                            <?=anchor('backend/user/C_Imageberita/edit/'.$img->id_berita,'Upload',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                             </td>
                                            </tr>
                                            <?php endforeach;  ?> 
                                        </tbody>
                                    </table>
                                </div>
                            <!-- Hover table card end -->
                            </div>
                        </div>
                    </div>
                 
                </div>
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