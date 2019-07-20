<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
$page="panel_list_food";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/image/icon.png')?>">

    <!-- Bootstrap CSS panel pake bootsrap 3 -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap3.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/panel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
   
    <title>Mami Food</title>
  </head>
  <body>

<?php include ('navbar_panel.php'); ?>

    <div class="container-fluid main-container">
        <?php include ('sidebar.php'); ?>
        <div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Food
                </div>
                <div class="panel-body">

                    <form class="panel-body" method="get" action="<?php echo site_url('Panel/cari_food') ?>" >
                    <div class="input-group col-sm-3 pull-right" id="search">
                        <input type="text" class="form-control" placeholder="Pencarian nama / harga" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><span><img height="18px" src="<?php echo base_url('assets/image/search.png')?>"></span></button>
                        </div>
                    </div>
                    </form>

                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                           <thead>
                               <th>No.</th>
                               <th>Nama Menu</th>
                               <th>Kategori</th>
                               <th>Harga</th>
                               <th>Edit</th>
                               <th>Hapus</th>
                           </thead>
                            <tbody>
                                 <?php 
                                 $no = 1;
                                  foreach ($menu as $m) {
                                 ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $m->nama_menu; ?></td>
                                    <td><?php echo $m->kategori; ?></td>
                                    <td><?php echo $m->harga_menu; ?></td>
                                    <td> 
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                          <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"
                                          data-nama_menu="<?php echo $m->nama_menu; ?>"
                                          data-deskripsi_menu="<?php echo $m->deskripsi_menu; ?>"
                                          data-harga_menu="<?php echo $m->harga_menu; ?>"
                                          data-id_menu="<?php echo $m->id_menu; ?>" >
                                        <span><img height="20px" src="<?php echo base_url('assets/image/edit.png')?>"></span></button></p>
                                        <p>
                                    </td>
                                    <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Delete">
                                        <button id="delete_data" class="btn btn-danger btn-xs" 
                                        data-title="Delete" 
                                        data-toggle="modal" 
                                        data-target="#delete" 
                                        data-id="<?php echo $m->id_menu; ?>" 
                                        data-href="<?php echo base_url() . 'Panel/delete_food/' . $m->id_menu; ?>">
                                        <span><img height="20px" src="<?php echo base_url('assets/image/delete.png')?>"></span>
                                        </button>
                                      </p>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pull-right">
                      <?php echo $this->pagination->create_links();?>
                    </ul>

                </div>

<!------------------- MODAL UNTUK EDIT--------------------->
              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span area-hidden="true" ><img height="20px" src="<?php echo base_url('assets/image/close.png')?>"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Makanan</h4>
                  </div>

                  <form class="panel-body" action="<?php echo base_url('Panel/update_food')?>" method="post" enctype="multipart/form-data" role="form" >  
                    <div class="modal-body">
                      <div class="form-group">
                        <input class="form-control" name="nama_menu1" type="text" id="nama" required autofocus>
                      </div>
                      <input type="hidden" class="form-control" name="id_menu1" id="id" >
                     <!-- <div class="form-group" >  
                        
                        <select class="form-control selectpicker" name="kategori1" id="cat" >
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                      </div>-->
                      <div class="form-group">
                        <textarea rows="5" class="form-control" name="deskripsi1" id="desc" required ></textarea>
                      </div>
                      <div class="form-group input-group input-group-md col-sm-5">
                        <span class="input-group-addon" id="sizing-addon1">Rp</span>
                        <input type="number" class="form-control" name="harga_menu1" id="hrg" required >
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="file" name="gambar1" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </div> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>  Update
                        </button>
                    </div>
                    
                    </form>
                    </div>
                <!-- /.modal-content --> 
              </div>
              <!-- /.modal-dialog --> 
            </div>


<!------------------- MODAL UNTUK DELETE--------------------->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span area-hidden="true"><img height="20px" src="<?php echo base_url('assets/image/close.png')?>"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">
                 <div class="alert alert-danger">
                  <span area-hidden="true" >
                    <img height="20px" src="<?php echo base_url('assets/image/delete.png')?>"></span> Are you sure you want to delete this Record?</div>
                </div>
                <div class="modal-footer ">
                 <a class="btn-ok"><button  type="button" class="btn btn-success" ><span><img height="20px" src="<?php echo base_url('assets/image/delete.png')?>"></span>  Yes</button></a>
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span><img height="20px" src="<?php echo base_url('assets/image/close.png')?>"></span>  No</button>
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
          </div> 

          <script>
             $(document).ready(function() {
                // Untuk edit menu 
                $('#edit').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal = $(this)
         
                    // Isi nilai pada field
                    modal.find('#id').attr("value",div.data('id_menu')); //div.data('id_menu')) itu untuk button cek atas
                    modal.find('#nama').attr("value",div.data('nama_menu'));
                    //modal.find('#cat').prop("value",div.data('kategori'));
                    modal.find('#hrg').attr("value",div.data('harga_menu'))
                    modal.find('#desc').html(div.data('deskripsi_menu'));   
                });
                
                //untuk delete
                $('#delete').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                });
            });
            </script>



            </div>
        </div>
        <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
                Copyright &COPY; 2018 <a href="http://katongilang.com">Mr Katon</a>
            </p>
        </footer>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap337.min.js')?>"></script>
    </body>
</html>