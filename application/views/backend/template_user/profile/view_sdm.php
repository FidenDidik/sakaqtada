<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($sdm->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header">
                    <h5>Sumber Daya Manusia (SDM)</h5>
                    <div align="right"><?=anchor('backend/user/C_Sdm/add','Tambah Data SDM',['class'=>'btn waves-effect waves-light btn-success btn-skew'])?></div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NAMA</th>
                                                <th>NIP</th>
                                                <th>KELAHIRAN</th>
                                                <th>PANGKAT</th>
                                                <th>PENDIDIKAN</th>
                                                <th>JABATAN</th>
                                                <th>IMAGE</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                        <?php foreach($sdm->result() as $img) : ?>
                                            <tr>
                                            <td><?=$img->nama ?></td>
                                            <td><?=$img->nip ?></td>
                                            <td><?=$img->kelahiran ?></td>
                                            <td><?=$img->pangkat ?></td>
                                            <td><?=$img->pendidikan ?></td>
                                            <td><?=$img->jabatan ?></td>
                                            <td><?=img(['src'=>$img->file, 'width'=>'100%'])?></td>
                                            <td>
                                            <?=anchor('backend/user/C_Sdm/edit/'.$img->id_sdm,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                            <?=anchor('backend/user/C_Sdm/delete/'.$img->id_sdm,'Hapus',['class'=>'btn waves-effect waves-light btn-danger btn-skew', 'role'=>'button','onclick'=>'return confirm(\'Apakah anda yakin ?\')'])?>
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