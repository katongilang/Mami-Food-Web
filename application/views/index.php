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
    <?php include('header.php'); ?> 

  <!-- /Back To Top -->
	<a id='backTop'>Back To Top</a>

	<!-- ////////////Content Box 01 -->
	<div id="services"></div>
	<section class="box-content box-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="<?php echo base_url('assets/image/icon1.png')?>" title="icon-name"></a>
						<h3>Sucess Story</h3>
						<p>Sebuah restaurant yang didirikan oleh seorang ibu rumah tangga, yang kini restaurant ini diberi nama "Mami Food".</p>
						<a class="btnHeader btnHeader-2 btn-sm" href="#">Read More</a>
					</div>
		 		</div>
		 		<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="<?php echo base_url('assets/image/icon3.png')?>" title="icon-name"></a>
						<h3>Location</h3>
						<p>Mami Food memiliki berbagai cabang, cabang pusat berlokasi di Iromejan, GK3/649D, D.I Yogyakarta, Indonesia</p>
						<a class="btnHeader btnHeader-2 btn-sm" href="#">Read More</a>
					</div>
		 		</div>
		 		<div class="col-sm-4 ">
					<div class="service">
						<a href="#"><img src="<?php echo base_url('assets/image/icon2.png')?>" title="icon-name"></a>
						<h3>Food Menu</h3>
						<p>Kualitas bahan-bahan baik makanan dipilih dari rempah-rempah lokal. Minuman yang disediakan dibuat dengan cara khusus.</p>
						<a class="btnHeader btnHeader-2 btn-sm" href="#">Read More</a>
					</div>
		 		</div>	
			</div>
		</div>
		</section>

		<!-- ////////////Content Box 02 -->
    <div class="album py-5 bg-light box-style">
      <div class="container">

      <!-----------------FAV FOOD----------------->
        	<div class="row heading">
    				<div class="col-lg-12">	
    					<h2>Favorite Food</h2>
      					<div class="intro">Mami Food menyediakan berbagai macam makanan yang sangat murah, lezat dan halal.<br> Berikut ini adalah beberapa menu makanan yang paling favorit dan sering dipesan oleh pengunjung  
                </div>
            </div>

			       <?php 
              foreach ($fav_food as $ff) {

             ?>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?php echo base_url("assets/image/food_image/$ff->gambar"); ?>" alt="Card image cap">
                <div class="card-body">
                  <h4><?php echo $ff->nama_menu; ?></h4>
                  <p class="card-text"><?php echo substr($ff->deskripsi_menu, 0, 70); ?> ...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btnHeader btnHeader-2 btn-sm" href="<?php echo base_url();?>Home/detail_menu/<?php echo $ff->id_menu;?>" data-id="<?php echo $ff->id_menu; ?>" >View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="more">
            <a class="btnHeader btnHeader-2 btn-sm" href="<?php echo base_url("Home/list_food"); ?>" >More Food >></a>
          </div>
          <br><br><br><br>

          <!-----------------FAV BEVERAGE----------------->
              <div class="row heading">
                <div class="col-lg-12"> 
                  <h2>Favorite Beverage</h2>
                    <div class="intro"><p>Selain Makanan, Mami Food juga menyediakan minuman yang sangat menggugah selera para pengunjung ditengah teriknya matahari.<br> Berikut ini beberapa minuman yang menjadi favorit pengunjung</p>
                    </div>
                </div>
                <?php 
                  foreach ($fav_beverage as $fb) {

                 ?>
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="<?php echo base_url("assets/image/food_image/$fb->gambar"); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h4><?php echo $fb->nama_menu; ?></h4>
                    <p class="card-text"><?php echo substr($fb->deskripsi_menu, 0, 70); ?> ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="btnHeader btnHeader-2 btn-sm" href="<?php echo base_url();?>Home/detail_menu/<?php echo $fb->id_menu;?>" data-id="<?php echo $fb->id_menu; ?>" >View</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
              <div class="more">
            <a class="btnHeader btnHeader-2 btn-sm" href="<?php echo base_url('Home/list_beverage'); ?>">More Food >></a>
            </div>
            <br><br><br><br>

        </div>
      </div>


  <section class="box-content box-3" id="staff"></section>

    <?php include('footer.php'); ?> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.backTop.min.js')?>"></script>
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