<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--Include kan navbar -->
<?php include('navbar.php'); ?> 

	<header id="intro">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo base_url('assets/image/bg-1.jpg')?>" alt="First slide">
		      <div class="header-text hidden-xs">
				  <div class="col-md-12 text-center">
				    <h2>Welcome to Mami Food</h2>
				    <br>
				    <h3>Menyediakan berbagai makanan dan minuman dengan rasa yang lezat</h3>
				    <br>
                    <div class="">
                        <a class="btnHeader btnHeader-1 btn-sm" href="#about">About us</a><a class="btnHeader btnHeader-1 btn-sm" href="#works">Our works</a>
					</div>
				</div>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url('assets/image/bg-2.jpg')?>" alt="Second slide">
		      <div class="header-text hidden-xs">
				  <div class="col-md-12 text-center">
				    <h2>The World's 50 Best Indonesia Restaurants</h2>
				    <br>
				    <h3>Mami Food merupakan salah satu restaurant terbaik di Indonesia</h3>
				    <br>
                    <div class="">
                        <a class="btnHeader btnHeader-1 btn-sm" href="#about">About us</a><a class="btnHeader btnHeader-1 btn-sm" href="#works">Our works</a>
					</div>
				</div>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url('assets/image/bg-3.jpg')?>" alt="Third slide">
		      <div class="header-text hidden-xs">
				  <div class="col-md-12 text-center">
				    <h2>National Restaurant Association</h2>
				    <br>
				    <h3>Salah satu restaurant yang berada di Indonesia</h3>
				    <br>
                    <div class="">
                        <a class="btnHeader btnHeader-1 btn-sm" href="#about">About us</a><a class="btnHeader btnHeader-1 btn-sm" href="#works">Our works</a>
					</div>
				</div>
				</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</header>