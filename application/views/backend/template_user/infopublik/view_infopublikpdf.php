<?php $this->load->view('backend/template_user/user_header.php'); ?>
<title>Update Berita</title>
<div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
             <div class="card">  
                <div class="card-header">
                    <h5>Download Pdf</h5>
                        <hr>
                        <div class="card-block table-border-style">
                                   <div class="table-responsive">
                                      <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               
                                                <th class="text-center">Judul</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Patch</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                           
                                  <?php foreach ($data as $row) : ?>
                                          <tr>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->kategori; ?></td>
                                                <td><?php echo $row->file; ?></td>
                                                <td class="text-center"><a href="<?php echo base_url(); ?><?php echo $row->file; ?>"  class="btn btn-info btn-sm btn-sm"><i class="fa fa-download"></i>Download</a>
                                               </td> 
                                           </tr>
                                          </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="text-right">
                                <?=anchor('backend/user/C_Unduhan/index','Cancel',['class'=>'btn btn-warning btn-sm btn-sm'])?>
                               </div>

                            <!-- Hover table card end -->
                            </div>      
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</html>
<?php $this->load->view('backend/template_user/user_footer.php'); ?>