<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>DreamTime</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- css -->
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- skin color -->
    <link href="color/default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="gallery-grid.css">
	<link rel="stylesheet" href="css/stylePhoto.css">

	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<style>
       .texto {
       			font-family: 'Lobster', cursive;
	       }
     </style>
	<!--[if lt IE 7]>
    <link href="css/font-awesome-ie7.css" type="text/css" rel="stylesheet">
  <![endif]-->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</a>
					<h1 class="brand texto"><a href="index.php">DreamTime</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="index.php">Volver al inicio</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyUp">
					<h2 class="pagetitle">Fotos de nuestros momentos</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="maincontent" class="inner">
		<div class="container">
        <div class="container gallery-container">
		<div class="tz-gallery">

			<div class="row">
				<div class="col-sm-6 col-md-4">
						<video src="video/video1.mp4" autoplay muted loop controls width="380"></video>
				</div>

				<?php for ($i=1; $i <= 39 ; $i++) { ?>
				<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="<?php echo 'img/fotos/'.$i.'.jpg'; ?>">
							<img src="<?php echo 'img/fotos/'.$i.'.jpg'; ?>" alt="Park" width="250px" height="250px" class="dimensiones">
						</a>
				</div>
			<?php } ?>
			</div>

		</div>

		</div>
		</div>


		</div>
		<!-- end container -->
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<p>Dream Time</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- nav -->
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<!-- localScroll -->
	<script src="js/jquery.localScroll.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- prettyPhoto -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Works scripts -->
	<script src="js/isotope.js"></script>
	<!-- flexslider -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- inview -->
	<script src="js/inview.js"></script>
	<!-- animation -->
	<script src="js/animate.js"></script>
	<!-- twitter -->
	<script src="js/jquery.tweet.js"></script>
	<!-- custom functions -->
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>

</html>
