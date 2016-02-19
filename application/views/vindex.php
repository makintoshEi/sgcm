<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control de Citas</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="static/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="static/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="static/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="static/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="static/img/favicons/manifest.json">
	<link rel="shortcut icon" href="static/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="static/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="static/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="static/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="static/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="static/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="static/css/cardio.css">
	<script src="<?php echo base_url()?>static/js/user/login.js"></script>
</head>

<body>
	<div class="preloader">
		<img src="static/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="static/img/logo.png" data-active-url="static/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">INICIO</a></li>
					<li><a href="#Mision">MISION</a></li>
					<li><a href="#Vision">VISION</a></li>
					<li><a href="#Servicios">SERVICIOS</a></li>
					<li><a href="#Desarro">DESARROLLADORES</a></li>

					
					<?php if($this->session->userdata('login')){ ?>
						<?php if($this->session->userdata('tipo') == '1'){ ?>
							<li><a href="<?= base_url() ?>cmenu">ADMINISTRAR</a></li>
						<?php }else{ ?>
							<li><a href="<?= base_url() ?>cmenu">RESERVAR CITA</a></li>
						<?php } ?>
						<li><a href="<?= base_url() ?>clogin/logout">Cerrar Sesion</a></li>
					<?php }else{ ?>
						<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Iniciar Sesion</a></li>
					<?php } ?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">HOSPITAL TEOFILO DAVILA</h3>
							<h1 class="white typed">SISTEMAS DE CONTROL DE CITAS MEDICAS</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">hORARIO DE ATENCION</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">DIURNA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">7:30 - 11:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">VESPERTINA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13:00 - 18:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">NOCTURNA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">20:00 - 23:00</h5>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading">ESPECIALIDADES</h5>
							<h5 class="white">1. </h5>
							<h5 class="white">2. </h5>
							<h5 class="white">3. </h5>
							<h5 class="white">4. </h5>			
						<div class="bottom">

							<a href="#" class="btn btn-white-fill expand">Vizualizar</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						
						<div class="owl-testimonials bottom">
							<div class="item">
								<h5 class="white heading">Ubicacion</h5>
								<h4 class="white heading content">Ecuador - El Oro - Machala</h4>
								<h5 class="white heading light author"> AV. BUENAVISTA Y SUCRE</h5>
							</div>
							<div class="item">
								<h5 class="white heading">Serivicios</h5>
								<h4 class="white heading content">I can't believe how much better I feel!</h4>
								<h5 class="white heading light author">Greg Pardon</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Incredible transformation and I feel so healthy!</h4>
								<h5 class="white heading light author">Christina Goldman</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section id="Mision" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Mision</h2>
				<h4 class="light muted">En el mejor hospital del Ecuador, cuidamos la vida de nuestros pacientes y luchamos día a día por mejorar su salud.</h4>
			</div>
			
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="Vision" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Vision</h2>
				<h4 class="light muted">Ser referente de excelencia en servicios de salud en Latinoamérica</h4>
			</div>
			
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="Servicios" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Servicios</h2>
				<h4 class="light muted">Servicios que Ofrece el hospital son</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="static/img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Reservas de citas Medicas</h4>
						<p class="description">Hospital tiene un sistema de control de citas que podra reservas los apcientes en caso de atenderse</p>
					</div>
				</div>
				<div class="col-md-4">
					

				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="Desarro" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Team</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="static/img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ben Adamson</h4>
							<h5 class="muted regular">Fitness Instructor</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="static/img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Eva Williams</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="static/img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>John Phillips</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="static/img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- LOGIN


	 -->  
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<h3 class="white">LOGIN</h3>
				<form id="frmLogin" action="<?= base_url() ?>clogin/" method="POST" class="popup-form" accept-charset="UTF-8" role="form">
					<div class="form-group">
						<input type="text" name="txtcedula" id="txtcedula" class="form-control form-white" placeholder="CEDULA">
						<input type="password" name="txtpassword" id="txtpasssword" class="form-control form-white" placeholder="CONTRASEÑA">
						
						<button type="submit" id="btnLogin" class="btn btn-submit">Ingresar</button>
					</div>
					<div class="form-group">
						<a href="<?= base_url()?>cregistro_usuario/start">
							<input type="button" value="Registrarme"  class="btn btn-default btn-lg">
						</a>
					</div>
					

					
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="<?php echo base_url()?>static/js/notify.js"></script>
	<script src="<?php echo base_url()?>static/js/bootstrap.min.js"></script>
	<script src="static/js/jquery-1.11.1.min.js"></script>
	<script src="static/js/owl.carousel.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/wow.min.js"></script>
	<script src="static/js/typewriter.js"></script>
	<script src="static/js/jquery.onepagenav.js"></script>
	<script src="static/js/main.js"></script>
	
	
</body>

</html>
