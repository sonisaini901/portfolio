<!-- Header -->
<?php include('header.php'); 

$sql = "SELECT * FROM projects LIMIT 4";
$result = $conn->query($sql);

?>
    <!-- About Section -->
    <section id="portfolio-about">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">About</h2>
			</div>
			<div class="row">
				<div class="col-md-5 animate-box">
					<div class="owl-carousel">
						<div class="item">
							<img class="img-fluid about-img" src="images/about.webp" alt="Software Developer">
						</div>
						<div class="item">
							<img class="img-fluid about-img" src="images/about1.webp" alt="Developer">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<div class="about-desc">
						<h2>
							<span>Hey I'm Soni<span>
							<span>Sr. Software Developer</span>
						</h2>
						</div>
						<div class="desc">
							<p>I'm a Senior Software Developer who loves building smart and efficient solutions. I focus on creating scalable systems and writing clean, easy-to-maintain code using the latest technologies. Let's work together to bring your ideas to life with practical and effective software.</p>
							<p class="portfolio-social-icons">
								<a href="https://github.com/sonisaini901/" target="_blank"><i class="fa-brands fa-github"></i></a>
								<a href="https://www.linkedin.com/in/soni-saini-744576205" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
								<a href="https://t.me/sonisaini901" target="_blank"><i class="fa-brands fa-telegram"></i></a>
								<a href="mailto:sonisaini901@gmail.com"><i class="fa-solid fa-envelope"></i></a>
							</p>
						    <p><a href="/contact" class="btn btn-primary">Contact Me!</a></p>
						</div>
					</div>
				</div>
		    </div>
		</div>
	</section>

    <!-- Services Section -->
    <section id="portfolio-services">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Services</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="services-flex">
						<div class="one-third">
							<div class="row">
								<div class="col-md-12 offset-md-0 animate-box intro-heading">
									<div class="rotate">
										<h2 class="heading">Expertise</h2>
									</div>
									<h2>Highlighting My Core Skills and Expertise</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="services animate-box">
										<h3>1 - Front-End Development</h3>
										<ul>
											<li>HTML5, CSS3, Responsive Design</li>
											<li>JavaScript, jQuery</li>
											<li>React.js</li>
											<li>Bootstrap, Tailwind CSS</li>
										</ul>
									</div>
									<div class="services animate-box">
										<h3>3 - CMS & E-Commerce</h3>
										<ul>
											<li>WordPress (Themes, Plugins, WooCommerce)</li>
											<li>Shopify (Themes, Apps)</li>
											<li>Wix, Webflow, Squarespace</li>
											<li>E-commerce (Payments)</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="services animate-box">
										<h3>2 - Back-End Development</h3>
										<ul>
											<li>Node.js</li>
											<li>PHP (Laravel, OpenCart)</li>
											<li>RESTful APIs</li>
											<li>Authentication (JWT, OAuth)</li>
										</ul>
									</div>
									<div class="services animate-box">
										<h3>4 - Databases & Version Control</h3>
										<ul>
											<li>MySQL, MongoDB</li>
											<li>Firebase, SQLite</li>
											<li>Git, GitHub, GitLab</li>
											<li>Database Optimization</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="one-forth services-img">
							<img class="img-fluid" src="images/services.webp" alt="Skills">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Work -->
    <section id="portfolio-work">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">Works</h2>
			</div>
			<div class="row">
				<div class="col-md-12 offset-md-0 text-center animate-box intro-heading">
					<div class="rotate">
						<h2 class="heading center-heading">Showcase</h2>
					</div>
					<h2>Featured Projects and Work Showcase</h2>
				</div>
			</div>
			<div class="row">
				<?php if ($result->num_rows > 0) { 
					while ($row = $result->fetch_assoc()) {
				?>
					<div class="col-md-12">
						<div class="work-entry animate-box">
							<a href="/work/<?php echo htmlspecialchars($row['url']); ?>" class="work-img" style="background-image: url(images/<?php echo $row["image"]; ?>);">
								<div class="display-t">
									<div class="work-name">
										<h2><?php echo $row["title"]; ?></h2>
									</div>
								</div>
							</a>
							<div class="col-md-12">
								<div class="desc">
									<p><?php echo $row["excerpt"]; ?></p>
									<p class="read"><a href="/work/<?php echo htmlspecialchars($row['url']); ?>">View details</a></p>
								</div>
							</div>
						</div>
					</div>
				<?php }
				} ?>
				<div class="col-md-12">
					<p class="text-center"><a href="/work" class="btn btn-primary">View All!</a></p>
				</div>
			</div>
		</div>
	</section>

<!-- Footer -->
<?php include('footer.php'); ?>