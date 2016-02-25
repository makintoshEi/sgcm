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
						<h1 ><font color="blue">HOSPITAL TEOFILO DAVILA</font></h1>
						<div class="col-md-12 text-center">
							<h1 class="typed">SISTEMAS DE CONTROL DE CITAS MEDICAS</h1>
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
						<h5 class="blue heading">HORARIO DE ATENCION</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular blue">DIURNA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="red">7:30 - 11:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">VESPERTINA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="red">13:00 - 18:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">NOCTURNA</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="red">20:00 - 23:00</h5>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third2">
						<h3 class="black heading">Especialidades</h2>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h5 class="black heading content">1 ODONTOLOGIA </h4>
								<h5 class="black heading contentte">2. OFTAMOLOGIA</h4>
								<h5 class="black heading content">3. TRAUMATOLOGIA</h4>

							</div>
							<div class="item">
								<h5 class="black heading content">4. MEDICINA GENERAL</h4>
								<h5 class="black heading content">5. GERIATRIA</h4>
								<h5 class="black heading content">6. PEDIATRA</h4>

							</div>
							<div class="item">
								<h5 class="black heading content">7. PSICOLOGIA</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						
								<h2 class="blue heading">Ubicacion</h2>
								<h4 class="black heading content">Ecuador - El Oro - Machala</h4>
								<h5 class="black heading light author"> AV. BUENAVISTA Y SUCRE</h5>
							
					</div>
				</div>
				
			</div>
		</div>
	</section>
		<section id="Mision" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Mision</h2>
				<h4 class="light muted">Prestar Servicios de salud con calidad y calidez en el ambito de la asistencia especializada a traves de su cartera de servicios cumpliendo con la responsabilidad de promocion, prevencion, recuperacion, rehabilitacion de la salud integral, docencia e investigacion conforme a las politicas del ministerio de sauld Publica y el trabajo en red, en el marco de la justicia y equidad social y ser el mejor hospital del Ecuador, donde cuidamos la vida de nuestros pacientes y luchamos día a día por mejorar su salud.</h4>
			</div>
			
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="Vision" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Vision</h2>
				<h4 class="light muted">Ser reconocidos por la cuidadnia como hospitales accesibles, que prestan una atencion de calidad que satisface a las necesidades y expectativas de la poblacion bajo principios fundamentales de ña salud publica y bioetica, utilizando la tecnologia y los recursos publicos de forma eficiente,  transparentes y en ser referente de excelencia en servicios de salud en Latinoamérica</h4>
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
							<img src="static/img/icons/medico1.png" alt="" class="icon">
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
				<h2 class="margin-top">Desarrolladores</h2>
				
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0991571026 </h3>
								<h4 class="white">Edad: 21</h3>
								<h4 class="white">Rol: Estudiante</h3>
							</div>
						</div>
						<img src="static/img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Erick Leonardo Medina </h4>
							<h5 class="muted regular">Programador</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0991273113</h3>
								<h4 class="white">Edad: 21</h3>
								<h4 class="white">Rol: Estudiante</h3>
							</div>
						</div>
						<img src="static/img/team/team6.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Jorge Luis Gonzalez</h4>
							<h5 class="muted regular">Programador</h5>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0980720048</h3>
								<h4 class="white">Edad: 23</h3>
								<h4 class="white">Rol: Estudiante</h3>

							</div>
						</div>
						<img src="static/img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Asael Alejandro Tello</h4>
							<h5 class="muted regular">Programador</h5>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0968860149</h3>
								<h4 class="white">Edad: 23</h3>
								<h4 class="white">Rol: Estudiante</h3>			
							</div>
						</div>
						<img src="static/img/team/team5.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Israel Willian Romero</h4>
							<h5 class="muted regular">Analista</h5>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0968860149</h3>
								<h4 class="white">Edad: 22</h3>
								<h4 class="white">Rol: Estudiante</h3>			
						</div>
						</div>
						<img src="static/img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Bryan Xavier Barrezueta</h4>
							<h5 class="muted regular">Analista</h5>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('static/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h4 class="white">Telefono: 0968860149s</h3>
								<h4 class="white">Edad: 22</h3>
								<h4 class="white">Rol: Estudiante</h3>			
							</div>
						</div>
						<img src="static/img/team/team4.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Jennifer Katherine Macas</h4>
							<h5 class="muted regular">Analista</h5>
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
					
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="black">Atencion<span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-black light">Lunes - Viernes</h5>
							<h3 class="regular black">8:00 - 23:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-black light">Sabados - Domingos</h5>
							<h3 class="regular black">10:00 - 18:00</h3>
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
	<script src="static/js/jquery-1.11.1.min.js"></script>
	<script src="static/js/owl.carousel.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/wow.min.js"></script>
	<script src="static/js/typewriter.js"></script>
	<script src="static/js/jquery.onepagenav.js"></script>
	<script src="static/js/main.js"></script>
</body>

</html>
