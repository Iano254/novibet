<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" integrity="" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Novibet</title>
  </head>
  <body>
    

    <?php include('components/top-head.php'); ?>
	<div class="content" style="">
		<div class="row">
	    	<div class="col-md-2 hide-mobi">
	    		<div class="shadow-sm" style="border-bottom:1px solid rgba(255,255,255,.25); padding:10px; font-weight:bold; font-size:13px;">Highlights</div>
	    		<div id="side-menu-wrapper" class="shadow-sm">
	    			<?php include('components/sidenav.php'); ?>
	    		</div>
	    		<div style="height: 10px;"></div>
	    		<div class="shadow-sm" style="border-bottom:1px solid rgba(255,255,255,.25); padding:10px; font-weight:bold; font-size:13px;">Categories</div>
	    		<div id="side-menu-wrapper" class="shadow-sm">
	    			<?php include('components/sidenav.php'); ?>
	    		</div>
	    	</div>
	    	<div class="col-md-8" style="padding-left: 0px; padding-right: 0px;">
	    		<div class="carousel-wrapper">
	    			<?php include('components/carousel.php'); ?>
	    		</div>
	    		<div class="markets-wrapper">
	    			<?php include('components/markets.php'); ?>
	    		</div>
	    	</div>
	    	<div class="col-md-2">
	    		<?php include('components/right-side-bar.php'); ?>
	    	</div>
	    </div>
	</div>

	<div class="container">

		<?php include('components/loginmodal.php'); ?>
		<?php include('components/registermodal.php');?>

	</div>

	<footer style="background-color: #4b5160;">
		<?php include('components/footer.php'); ?>
	</footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>