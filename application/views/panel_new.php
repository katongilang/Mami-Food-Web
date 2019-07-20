<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
$page="panel_new";

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
                    New Menu
                </div>
                <form class="panel-body" action="<?php echo base_url('Panel/post_food')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Menu</label>
                      <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama makanan / minuman" required autofocus >
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Pilih Kategori</label>
                      <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                        <option>Makanan</option>
                        <option>Minuman</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Deskripsi Singkat</label>
                      <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="6" required ></textarea>
                    </div>
                    <div class="form-group">                            
                      <label for="amount">Harga</label><br>
                      <div class="input-group input-group-md col-sm-2">
                        <span class="input-group-addon" id="sizing-addon1">Rp</span>
                        <input name="harga" type="number" class="form-control" aria-describedby="sizing-addon1" required >
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput2">Upload Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                    </div>                    
                     <div class="col-md-14">
                      <button type="submit" name="submit_menu" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Submit</button>
                    </div>    
                </form>
                
            </div>
        </div>
        <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
                Copyright &COPY; 2018 <a href="http://katongilang.com">Mr Katon</a>
            </p>
        </footer>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    </body>
</html>