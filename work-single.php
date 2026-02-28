<?php include('header.php'); 

if (!isset($_GET['slug'])) {
    header("Location: /work");
    exit;
}

$slug = $conn->real_escape_string($_GET['slug']);
$sql = "SELECT * FROM projects WHERE url = '$slug'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<h1>Project not found</h1>";
    exit;
}

$project = $result->fetch_assoc();
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
					<h2><?php echo $project['title']; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="work-entry animate-box">
						<a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" class="work-img" style="background-image: url(/images/<?php echo $project["image"]; ?>);">
						</a>
						<div class="col-md-8 offset-md-2">
							<div class="desc">
								<?php echo $project['description']; ?>
								<p class="read"><a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">Live Preview</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>