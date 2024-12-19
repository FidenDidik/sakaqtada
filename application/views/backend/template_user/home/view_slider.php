<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($slider->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="card">  
                    <div class="card-header">
                    <h5>Image Slider</h5>
                    <div align="right"><?=anchor('backend/user/C_Slider/add','Tambah Slider',['class'=>'btn waves-effect waves-light btn-success btn-skew'])?></div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Image</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($slider->result() as $img) : ?>
                                            <tr>
                                            <td><?=$img->judul ?></td>
                                            <td><?=img(['src'=>$img->file, 'width'=>'50%'])?></td>
                                            <td>
                                            <?=anchor('backend/user/C_Slider/edit/'.$img->id_slider,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                            <?=anchor('backend/user/C_Slider/delete/'.$img->id_slider,'Hapus',['class'=>'btn waves-effect waves-light btn-danger btn-skew', 'role'=>'button','onclick'=>'return confirm(\'Apakah anda yakin ?\')'])?>
                                            </td>
                                            </tr>
                                            <?php endforeach; ?> 
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