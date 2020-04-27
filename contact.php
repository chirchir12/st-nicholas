<?php 

$page = basename(__FILE__)

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Contact Us</title>
    <?php  require './base/head.html';?>
  </head>
  <body>
  <?php require './base/navbar.php'; ?>
    <!-- END nav -->

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contact-rehab.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4 shadow-lg">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> Meru, Along Meru Maua Road Kiajahi, Kalerene Stage</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4 shadow-lg">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://+254715773374">Call us: +254 715773374</a></p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4 shadow-lg">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:director.stnicholasriti@gmail.com">director.stnicholasriti@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-12 col-md-10 mb-md-5">
          	<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            <form action="#" class="border p-5 contact-form shadow-lg">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container-fluid px-0">
    		<div class="row justify-content-center">
        	<div class="col-md-12">
        	<iframe src="https://www.google.com/maps/d/embed?mid=1ke0pAc_Rk8rBvTBAOMt2wvY_A_4dXU1H" width="100%" height="480"></iframe>
        	</div>
        </div>
    	</div>
    </section>
		
    <?php require './base/footer.html' ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>