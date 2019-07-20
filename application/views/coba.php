<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/panel.css')?>">

    <title>Mami Food</title>
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" class="logo"src="<?php echo base_url('assets/image/icon.png')?>"/>
      </a>
    </div>
  </div>
</nav>


    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">New Menu</a></li>
                <li><a href="#">List Food</a></li>
                <li><a href="#">List Beverage</a></li>
            </ul>
            <button style="margin-left: 5%;" type="submit" class="btn btn-danger">Logout</button>
        </div>
        <br>
        <div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Menu
                </div>
                <form class="panel-body">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Menu</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama makanan / minuman">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Makanan</option>
                          <option>Minuman</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Singkat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                      </div>
                      <div class="form-group">                            
                        <label for="amount">Harga</label><br>
                        <div class="input-group input-group-md col-sm-2">
                          <span class="input-group-addon" id="sizing-addon1">Rp</span>
                          <input type="number" class="form-control" aria-describedby="sizing-addon1">
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput2">Upload Gambar</label>
                          <input type="file" name="image1" class="form-control-file" id="exampleFormControlFile1">
                      </div>                    
                       <div class="col-md-14">
                        <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Submit</button>
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