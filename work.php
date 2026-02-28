<?php include('header.php'); 

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

	<section id="portfolio-work">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Works</h2>
			</div>
			<div class="row">
				<div class="col-md-12 offset-md-0 text-center animate-box intro-heading">
					<div class="rotate">
						<h2 class="heading center-heading">Portfolio</h2>
					</div>
					<h2>Showcasing My Work and Projects</h2>
				</div>
			</div>
			<div class="row">
				<?php if ($result->num_rows > 0) { 
					while ($row = $result->fetch_assoc()) {
				?>
					<div class="col-md-12">
						<div class="work-entry animate-box">
							<a href="/work-single" class="work-img" style="background-image: url(images/<?php echo $row["image"]; ?>);">
								<div class="display-t">
									<div class="work-name">
										<h2><?php echo $row["title"]; ?></h2>
									</div>
								</div>
							</a>
							<div class="col-md-12">
								<div class="desc">
									<p><?php echo $row["excerpt"]; ?></p>
									<p class="read"><a href="#">View details</a></p>
								</div>
							</div>
						</div>
					</div>
				<?php }
				} ?>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>