<?php require_once('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>JOB4U</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link href="skins/default.css" rel="stylesheet" />

	<!-- ivy -->
	<link href="build/css/ivy.css" rel="stylesheet"/>
</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="container">
				<div class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.html"><span>J</span>ob4U</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
								<ul class="dropdown-menu">
									<div class="panel panel-info" style="margin-bottom: 0px;">
										<li><a href="register.php">Typography</a></li>
										<li><a href="components.html">Components</a></li>
										<li><a href="pricingbox.html">Pricing box</a></li>
									</div>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Login <b class="icon-angle-down"></b></a>
								<ul class="dropdown-menu" style="min-width: 80px;">
									<div class="panel panel-info" style="margin-bottom: 0px;">
										<li class=""><a href="login.php">candidate</a></li>
										<li class=""><a href="companylogin.php">company</a></li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="featured">
			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="flexslider" >
							<ul class="slides">
								<li>
									<img src="img/slides/1.jpg" alt="" />
									<div class="flex-caption">
										<h3>Own the Success</h3>
										<p>At JOB4U, we help you discover the right opportunities. We provide you the platform to connect with niche companies by showcasing your skills and experiences which would define you as a warranting asset to the organisation. </p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
								<li>
									<img src="img/slides/2.jpg" alt="" />
									<div class="flex-caption">
										<h3>We are what you are</h3>
										<p>Smarter hiring process commence with perfectly contoured process. We exploit the cognizance of our industry experts in determining candidate suitability based on their experiences and skills.</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
								<li>
									<img src="img/slides/3.jpg" alt="" />
									<div class="flex-caption">
										<h3>Get Hired</h3>
										<p>Executive search at Recwire is done through a combination of human curation and precision of client requirement. Which has been time saving and has proven to deliver smart heads to reputed firms. Our dexterity of being able to streamline high-quality individuals has gained us an impressive reputation among employers. </p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</section>

<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2> Make way for the New</h2>
								<p>We take pride in being known as the smart chip among Talent Advocates of the IT industry. Our profound understanding of the employer’s requirement precision makes us maven in talent acquisition. Our dedicated team of specialists with their impressive depth of knowledge and connect within the industry sectors enable them to consign the right person in the right job.</p>

<p>We mean business when we say that we connect inevitable talents with the most innovative employers. Our prime focus also defines us as providers’ of top notch services to both employers and candidates. We work on a simple yet state of the art platform which brings employee attraction and employer attention followed by placement into one place. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2> LATEST JOB POSTS</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				
				<div class="row">
					<!-- If Job Post exists then display details of post -->
					<?php
						$sql = "SELECT * FROM job_post Order By rand() limit 4";
						$result = $conn->query($sql);
					?>
					<div class="panel-group">
						<?php if ($result->num_rows > 0): ?>
							<?php while ($row = $result->fetch_assoc()): ?>
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="box" style="min-height: 330px;">
										<div class="box-gray aligncenter">
											<h4><?php echo $row['jobtitle']; ?></h4>
											<div class="icon">
												<i class="fa fa-desktop fa-3x"></i>
											</div>
											<p>
												<?php echo $row['description']; ?>
											</p>
										</div>
										<div class="card-bottom">
											<div class="text-center">
												<h4><span>salary :</span><?php echo $row['minimumsalary']; ?>-<?php echo $row['maximumsalary']; ?></h4>
											</div>
											<div class="box-bottom">
												<a href="#">Learn more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile ?>
						<?php endif ?>
					</div>
				</div>
				
				<!-- divider -->
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
				<!-- end divider -->

			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
								<strong>Moderna company Inc</strong><br>
								 Modernbuilding suite V124, AB 01<br>
								 Someplace 16425 Earth 
							</address>
							<p>
								<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
								<i class="icon-envelope-alt"></i> email@domainname.com
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Pages</h5>
							<ul class="link-list">
								<li><a href="#">Press release</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Career center</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Latest posts</h5>
							<ul class="link-list">
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
								<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
								<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Flickr photostream</h5>
							<div class="flickr_badge">
								<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; Moderna Theme. All right reserved.</p>
								<div class="credits">
									<!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                  -->
									<a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/keypressed.js"></script>

	<!-- <script src="/js/bootstrap-4.0.0.min.js"></script> -->
</body>

</html>
