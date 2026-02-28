<?php include('database.php'); 

$sqlwork = "SELECT * FROM projects LIMIT 4";
$resultwork = $conn->query($sqlwork);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sr. Software Developer</title>
	<link rel="icon" href="/images/favicon.ico" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,500,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.min.css">
    <!-- Fontawesome Icon Fonts-->
	<link href="fonts/icons/css/fontawesome.css" rel="stylesheet" />
	<link href="fonts/icons/css/brands.css" rel="stylesheet" />
	<link href="fonts/icons/css/solid.css" rel="stylesheet" />
    <!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <!-- Nav Bar -->
    <nav id="portfolio-main-nav" role="navigation">
		<a href="#" class="js-portfolio-nav-toggle portfolio-nav-toggle active"><i></i></a>
		<div class="js-fullheight portfolio-table">
			<div class="portfolio-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="services">Services</a></li>
							<li><a href="work">Work</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2 class="head-title">Works</h2>

						<?php if ($resultwork->num_rows > 0) { 
							while ($workrow = $resultwork->fetch_assoc()) {
						?>
						<a href="images/<?php echo $workrow["image"]; ?>" class="gallery image-popup-link text-center" style="background-image: url(images/<?php echo $workrow["image"]; ?>);">
							<span><i class="fa-solid fa-magnifying-glass"></i></span>
						</a>
						<?php }
						} ?>
					</div>
				</div>
			</div>
		</div>
	</nav>

    <div id="portfolio-page">
        <header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="portfolio-navbar-brand">
							<a class="portfolio-logo" href="/"><span>Soni</span></a>
						</div>
						<a href="#" class="js-portfolio-nav-toggle portfolio-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>