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

          <?php 
            foreach ($detail->result() as $d){ 
          ?>
        	<div class="row heading">
    				<div class="col-lg-12 blog-main">	
    					<h2><?php echo $d->nama_menu; ?></h2>
            </div>
              <div class="col-lg-12 margin-bawah"><img class="col-sm-12 img-padding" src="<?php echo base_url("assets/image/food_image/$d->gambar"); ?>">
              </div>

              <table id="ids" class="table table-bordred table-striped margin-bawah">
                 <thead>
                     <th>Deskripsi Menu</th>
                 </thead>
                  <tbody>
                      <tr>
                        <td><?php echo $d->deskripsi_menu; ?></td>
                      </tr>
                  </tbody>
                </table>
                <br><br>

              <table id="mytable" class="table table-bordred table-striped">
                 <thead>
                     <th>Harga</th>
                 </thead>
                  <tbody>
                      <tr>
                        <td>Rp <?php echo $d->harga_menu; ?> ,-</td>
                      </tr>
                  </tbody>
                </table>

			     </div>
           <?php } ?>
          
        </div>
      </div>
      
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