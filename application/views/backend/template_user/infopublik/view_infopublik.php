<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($unduhan->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="card">  
                    <div class="card-header">
                    <h5>File Unduhan</h5>
                    <div align="right"><?=anchor('backend/user/C_Unduhan/add','Tambah',['class'=>'btn waves-effect waves-light btn-success btn-skew'])?></div>
                    </div>
                        <div class="card-block">
                            <!-- Hover table card start -->               
                            <div class="card-block table-border-style">
                                   <div class="table-responsive">
                                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Judul</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1;
                                        foreach($unduhan->result() as $img) : ?>
                                            <tr>
                                            <td class="text-center"><?=$no ?></td>
                                            <td><?=$img->nama ?></td>
                                            <td><?=$img->kategori ?></td>
                                            
                                            <td class="text-center">
                                            <?=anchor('backend/user/C_Unduhan/detail/'.$img->id_unduhan,'Download',['class'=>'btn waves-effect waves-light btn-success btn-skew', 'role'=>'button'])?>
                                            <?=anchor('backend/user/C_Unduhan/edit/'.$img->id_unduhan,'Edit',['class'=>'btn waves-effect waves-light btn-primary btn-skew', 'role'=>'button'])?>
                                            <?=anchor('backend/user/C_Unduhan/delete/'.$img->id_unduhan,'Hapus',['class'=>'btn waves-effect waves-light btn-danger btn-skew', 'role'=>'button','onclick'=>'return confirm(\'Apakah anda yakin ?\')'])?>
                                            </td>
                                            </tr>
                                            <?php  $no++;
                                             endforeach; ?> 
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