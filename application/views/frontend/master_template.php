<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $page_title ?> - <?php echo $this->company->company  ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <link rel="icon" href="<?php echo base_url('assets/frontend/images/'.$this->company->favicon) ?>" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend') ?>/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/frontend') ?>/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav  <?php echo isset($with_background)?'with-background':''; ?>" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-md-push-5 text-center">
							<div id="colorlib-logo">
                                <a href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url('assets/frontend/images/'.$this->company->large_logo) ?>" alt="" style="width:64px;height:64px"> <br>
                                    <?php  echo $this->company->company ?>
                                </a>
                            </div>
						</div>
						<div class="col-md-5 col-md-pull-2 text-right menu-1">
							<ul>
								<li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
								<li class="has-dropdown">
									<a href="#">Portofolio</a>
									<ul class="dropdown">
                                        <?php 
                                        if($this->portofolio->num_rows()>0){
                                            foreach($this->portofolio->result() as $key){
                                                echo '<li><a href="'.base_url("portofolio/index/".$key->id."/".$key->name).'">'.$key->name.'</a></li>';
                                            }
                                        }
                                        ?>
									</ul>
								</li>
								<li><a href="<?php echo base_url("service") ?>">Services</a></li>
							</ul>
						</div>
						<div class="col-md-5 text-left menu-1">
							<ul>
								<li><a href="<?php echo base_url("blog") ?>">Blog</a></li>
								<li><a href="<?php echo base_url("about") ?>">About</a></li>
								<li><a href="<?php echo base_url("contact") ?>">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<?php echo $content; ?>

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About <?php echo $this->company->company ?></h4>
						<p><?php echo $this->company->short_description ?></p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						
					</div>

					<div class="col-md-2 colorlib-widget">
						
					</div>

					<div class="col-md-4 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li><?php echo $this->company->address; ?></li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> <?php echo $this->company->phone; ?></a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> <?php echo $this->company->email; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<?php echo $this->company->footer_text; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url('assets/frontend') ?>/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets/frontend') ?>/js/main.js"></script>

	</body>
</html>

