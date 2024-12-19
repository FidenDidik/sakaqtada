<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($sambutan->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="card">  
                    <div class="card-header">
                    <h5>Sambutan Kepala Desa</h5>
                         </div>
                        <div class="card-block">
                            <!-- Hover table card start -->              
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                            <h4>Kata Sambutan</h4>
                                                            </div>
                                                            <div class="card-block">
                                                            <?php foreach($sambutan->result() as $img) : ?>
                                                            
                                                            <p><b><?=$img->nama?></b></p>
                                                            <p><?=img(['src'=>$img->file, 'width'=>'10%'])?> </P>
                                                            <p><?=$img->sambutan?></p>
                                                            <?=anchor('backend/user/C_Sambutan/edit/'.$img->id_sambutan,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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