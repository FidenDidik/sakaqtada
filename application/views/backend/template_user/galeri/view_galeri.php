<?php $this->load->view('backend/template_user/user_header.php'); ?>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <?php if($galeri->num_rows() > 0) : ?>
                <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                        <?=$this->session->flashdata('message')?>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                      <div class="col-sm-12">
                         <div class="card">  
                            <div class="card-header">
                        <h5>Foto</h5>
                        <div align="right"><?=anchor('backend/user/C_Galeri/add','Tambah',['class'=>'btn waves-effect waves-light btn-success btn-skew'])?></div>
                        </div>
                        <div class="card-block">
                        <div class="row">
                        <div class="col-lg-12">
                     </div>
                 </div>
                <div class="row">
                    <?php foreach($galeri->result() as $img) : ?>
                        <div class="col-lg-3 col-sm-3 ">
                            <div class="thumbnail">
                               
                                <?=img(['src'=>$img->file,'width'=>'100%'])?>
                                <p class="text-center"><b><?=$img->nama?></b> </p>
                                <?=anchor('backend/user/C_Galeri/edit/'.$img->id_galeri,'Edit',['class'=>'btn btn-primary btn-mini waves-effect waves-light', 'role'=>'button'])?>
                                <?=anchor('backend/user/C_Galeri/delete/'.$img->id_galeri,'Hapus',['class'=>'btn btn-danger btn-mini waves-effect waves-light', 'role'=>'button','onclick'=>'return confirm(\'Apakah anda yakin ?\')'])?>
                                 <br><hr>
                            </div>  
                        </div> 
                      <?php endforeach; ?>
                    </div> 
                 </div>
               </div>
             </div>
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