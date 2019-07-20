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

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>">

    <title>Mami Food</title>
  </head>
  <body>
  	<?php include('navbar.php'); ?> 

	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->

	<!-- ////////////Content Box 02 -->
    <div class="album py-5 bg-light box-style">
        <div class="container">

          <div class="row heading">
            <div class="col-lg-12"> 
              <h2>List Beverage</h2>
                <div class="intro">Pada halaman ini Mami Food akan menampilkan semua menu minuman. <br>Agar semua teman teman bisa melihat menu minuman tanpa harus ke lokasi
                  </div>
                </div>

                   <?php 
                    foreach ($menu as $m) {

                   ?>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <img class="card-img-top" src="<?php echo base_url("assets/image/food_image/$m->gambar"); ?>" alt="Card image cap">
                      <div class="card-body">
                        <h4><?php echo $m->nama_menu; ?></h4>
                        <p class="card-text"><?php echo substr($m->deskripsi_menu, 0, 70); ?> ...</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a class="btnHeader btnHeader-2 btn-sm" href="<?php echo base_url();?>Home/detail_menu/<?php echo $m->id_menu;?>" data-id="<?php echo $m->id_menu; ?>" >View</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>


            </div>
           </div>
      
	<?php include('footer.php'); ?> 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : "green",
			});
		});
	</script>
</body>
</html>