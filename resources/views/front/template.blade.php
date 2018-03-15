<!DOCTYPE HTML>
<!--
Aesthetic by gettemplates.co
Twitter: http://twitter.com/gettemplateco
URL: http://gettemplates.co
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
			TSAT GD
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

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

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 text-right gtco-contact">
						<ul class="">
							<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
							<li><a href="#"><i class="icon-mail2"></i></a></li>
							<li><a href="#"><i class="ti-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<img src="images/logo_png.png" alt="logo transparent" height="250" width="250">
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Accueil</a></li>
							<li><a href="about.html">à propos de nous</a></li>
							<li class="has-dropdown">
								<a href="services.html">Le club</a>
								<ul class="dropdown">
									<li><a href="#">Histoire</a></li>
									<li><a href="#">Paslmarès</a></li>
									<li><a href="#">Membres</a></li>
									<li><a href="#">Photos</a></li>
								</ul>
							</li>
							<a href="{{route('competitions.index')}}">Compétitions</a>
							<li class="has-dropdown">
								<a href="#">Infos Adhérents</a>
								<ul class="dropdown">
									<li><a href="#">L'équipe pédagogique</a></li>
									<li><a href="#">L'école de tennis</a></li>
									<li><a href="#">Les cours collectifs adultes</a></li>
									<li><a href="#">Réserver un court</a></li>
								</ul>
							</li>
							<li><a href="#">Galerie</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/tennis3.jpg);">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">

								<h1 class="animate-box" data-animate-effect="fadeInUp">
									@section('title')
										Tennis Club TSATGD
									@show
								</h1><br />
								<h2 class="animate-box" data-animate-effect="fadeInUp">
									@section('subtitle')
										Tavaux Saint-Aubin Grand Dole
									@show
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="gtco-features-3">
			<div class="gtco-container">
				<div class="gtco-flex">
					<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-inner">
							<span class="icon">
								<i class="ti-clipboard"></i>
							</span>
							<h3>Réservations</h3>
							<p>Réservez vos courts de tennis</p>
							<p><a href="#" class="btn btn-white btn-outline">Voir</a></p>
						</div>
					</div>
					<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-inner">
							<span class="icon">
								<i class="ti-announcement"></i>
							</span>
							<h3>Compétitions</h3>
							<p>Les résultats de tous les matchs centralisés et en direct</p>
							<p><a href="#" class="btn btn-white btn-outline">Voir</a></p>
						</div>
					</div>
					<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
						<div class="feature-inner">
							<span class="icon">
								<i class="ti-tablet"></i>
							</span>
							<h3>Accessibilité</h3>
							<p>Accèdez à toutes les informations très rapidement, depuis votre mobile</p>
							<p><a href="#" class="btn btn-white btn-outline">Voir</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Nos atouts</h2>
						<p>Le plus grand club de la région de Dole et ses alentours</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-vector"></i>
							</span>
							<h3>Grandes infrastructures</h3>
							<p>De nombreux courts à votre disposition</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-tablet"></i>
							</span>
							<h3>Leçons de qualité</h3>
							<p>Nos professeurs sauront vous enseigner ce sport</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-settings"></i>
							</span>
							<h3>Ecole de tennis</h3>
							<p>Pour que les plus jeunes puissent pratiquer cette activité à tout âge</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="ti-ruler-pencil"></i>
							</span>
							<h3>Espace membre</h3>
							<p>De nombreuses fonctionnalités pour les adhérents</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-portfolio" class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Nos derniers articles</h2>
						<p>N'hésitez pas à aller voir nos albums photos !</p>
					</div>
				</div>

				<div class="row row-pb-md">
					<div class="col-md-12">
						<ul id="gtco-portfolio-list">
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur1.jpg); ">
								<a href="#" class="color-1">
									<div class="case-studies-summary">
										<span>Journée 7</span>
										<h2>Magnifique partie de Adrien Perriguey</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur2.jpg); ">
								<a href="#" class="color-2">
									<div class="case-studies-summary">
										<span>Championnat 2017</span>
										<h2>Alexandre Dumont sacré vainqueur en solo</h2>
									</div>
								</a>
							</li>


							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span>Journée 6</span>
										<h2>Notre joueur Hugo Buffard accusé de tricherie</h2>
									</div>
								</a>
							</li>
							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur4.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Journée 5</span>
										<h2>De superbes résultats pour notre duo</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/joueurtennis5.jpg); ">
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<span>Journée 4</span>
										<h2>Victoire écrasante de l'équipe de Tavaux</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur6.jpg); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<span>Championnat 2016</span>
										<h2>Des résultats mitigés</h2>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-white btn-outline btn-lg btn-block">Voir les articles</a>
					</div>
				</div>


			</div>
		</div>

		<div id="gtco-counter" class="gtco-section">
			<div class="gtco-container">

				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Quelques chiffres sur nous</h2>
						<p>Il est possible que les données ne soient pas totalement à jour</p>
					</div>
				</div>

				<div class="row">

					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-settings"></i>
							</span>
							<span class="counter js-counter" data-from="0" data-to="211" data-speed="6000" data-refresh-interval="50">1</span>
							<span class="counter-label">Inscrits</span>

						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
							<span class="counter js-counter" data-from="0" data-to="8" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Entraineurs</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-briefcase"></i>
							</span>
							<span class="counter js-counter" data-from="0" data-to="59" data-speed="5000" data-refresh-interval="50">1</span>
							<span class="counter-label">Coupes remportées</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
							<span class="counter js-counter" data-from="0" data-to="719566" data-speed="6000" data-refresh-interval="50">1</span>
							<span class="counter-label">Balles perdues</span>

						</div>
					</div>

				</div>
			</div>
		</div>

		<div id="gtco-products">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Nos photos</h2>
						<p>Allez voir nos albums dans le menu en haut du site</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel owl-carousel-carousel">
						<div class="item">
							<img src="images/album1.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="item">
							<img src="images/album2.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="item">
							<img src="images/tennis2.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="item">
							<img src="images/joueurtennis5.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
					</div>
				</div>
			</div>
		</div>



		<div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Demande d'adhésion au club</h2>
						<p>Suivez nous</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-12">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Votre email">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Nom et prenom</label>
									<input type="text" class="form-control" id="name" placeholder="Votre nom">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-default btn-block">Envoyer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p	b-md">

					<div class="col-md-4">
						<div class="gtco-widget">
							<h3>Créateurs</h3>
							<p>Classe SIO2 alternants 2016-2018. CAVIN Elodie, BUFFARD Hugo, PERRIGGUEY Adrien, CHAMBELLAND Kevin, DUMONT Alexandre, BATAILLE Kevin</p>
						</div>
					</div>

					<div class="col-md-4 co Adrl-md-push-1">
						<div class="gtco-widget">
							<h3>Liens utiles</h3>
							<ul class="gtco-footer-links">
								<li><a href="#">Site de la FFT</a></li>
								<li><a href="#">Tennis wikipedia</a></li>
								<li><a href="#">Ancien site</a></li>
								<li><a href="#">Mentions légales</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="gtco-widget">
							<h3>Au cas où</h3>
							<ul class="gtco-quick-contact">
								<li><a href="#"><i class="icon-phone"></i> 01 02 03 04 05</a></li>
								<li><a href="#"><i class="icon-mail2"></i> cavinelodie@gmail.com</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-right">
							<ul class="gtco-social-icons pull-right">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>
</html>
