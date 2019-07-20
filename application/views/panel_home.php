<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
$page = "panel_home";

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
                    Dashboard
                </div>
                <div class="panel-body">
                    Selamat datang admin Mami Food. Dengan panel ini admin bisa menambah menu makanan / minuman, bisa melakukan edit menu, bahkan menghapus menu. Selamat mencoba !
                </div>
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