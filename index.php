<!DOCTYPE html>
<html>

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Vert Consulting :: Contabilidade</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<script src="js/modernizr.custom.79639.js"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="seo_version">

	<?php

	include("config.php");


	$sql = "SELECT * FROM site";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	$textos = $res->fetch_all(MYSQLI_ASSOC);

	?>

	<script src="textos.js"></script>
	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-new">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
			<div class="text">LOADING...</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-bordo">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img height="40px" src="images/logo-seo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-seo" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-seo">
					<ul class="navbar-nav ml-auto">
						<li style=" list-style: none;" class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li style=" list-style: none;" class="nav-item">
							<a class="nav-link" href="#">Sobre Nós</a>
						</li>
						<li style=" list-style: none;" class="nav-item">
							<a class="nav-link" href="#">Principais Produtos</a>
						</li>
						<!-- <li style=" list-style: none;" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Services
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="#">1Search Engine Optimization</a>
								<a class="dropdown-item" href="#">Reporting</a>
								<a class="dropdown-item" href="#">Email Marketing</a>
								<a class="dropdown-item"href="#">Website Development</a>
								<a class="dropdown-item" href="#">Social Media Marketing</a>
								<a class="dropdown-item" href="services.html">Pay Per Click</a>
							</div>
						</li> -->
						<li style=" list-style: none;" class="nav-item"><a class="nav-link" href="#">Servicos</a></li>
						<li style=" list-style: none;" class="nav-item"><a class="nav-link" href="#">Contato</a></li>
					</ul>
				</div>
			</div>
			</na>
	</header>
	<!-- End header
	


   Alto nível de criticidade nas análises fiscais e contábeis;



	
	-->

	<div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">

			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1"></div>
					<h2><?php $textos[0] . ['content1']; ?></h2>
					<blockquote>
						<p> <?php $textos[0] . ['content2']; ?> </p>
						<a href="#" class="bttn-new">Fale Conosco</a>
					</blockquote>
				</div>
			</div>





		</div><!-- /sl-slider -->

		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>

	</div><!-- /slider-wrapper -->



	<div id="pricing" class="section backgroudGold">
		<div class="container">
			<div class="section-title text-center">
				<h3>Um plano ideal para sua necessidade</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et tincidunt risus, vitae sollicitudin
					tellus. Sed a nulla nisl. Aenean a lacus eget nibh dignissim molestie in quis magna. Sed vel euismod
					ligula. Mauris vitae suscipit velit, in vestibulum elit. In sed tellus nec metus consectetur iaculis
					et vitae tellus.</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12">
					<div class="pricing pricing-palden">
						<div class="pricing-item">
							<div class="pricing-deco">
								<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
									<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
									<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
								</svg>
								<div class="pricing-price"><span class="pricing-currency">R$</span>33
									<span class="pricing-period">/mês</span>
								</div>
								<h3 class="pricing-title"></h3>
							</div>
							<p></p>
							<button class="bttn-new-a">Escolha o Plano</button>
						</div>
						<div class="pricing-item pricing__item--featured">
							<div class="pricing-deco">
								<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
									<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
									<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
								</svg>
								<div class="pricing-price"><span class="pricing-currency">R$</span>44
									<span class="pricing-period">/mês</span>
								</div>
								<h3 class="pricing-title">Business</h3>
							</div>
							<p></p>
							<button class="bttn-new-a">Escolha o Plano</button>
						</div>
						<div class="pricing-item">
							<div class="pricing-deco">
								<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
									<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
									<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
									<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
								</svg>
								<div class="pricing-price"><span class="pricing-currency">R$</span>55
									<span class="pricing-period">/mês</span>
								</div>
								<h3 class="pricing-title">Enterprise</h3>
							</div>
							<p></p>
							<button class="bttn-new-a">Escolha o Plano</button>
						</div>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="testimonials" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3 class="text-color-bordo">Funcionário PJ 2</h3>
				<p class="lead">Temos uma equipe especializa e um plano incrível para vc abrir sua empresa, sem dor de
					cabeça .......eds of our happy customers! <br>Let's see what others say about Landigoo website
					template!</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="testi-carousel owl-carousel owl-theme">
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>ABERTURA DE EMPRESA EM X DIAS</h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
								<p>They have got my project on time with the competition with a sed highly skilled, and
									experienced & professional team.</p>
							</div>
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>EMISSÃO DE NF</small></h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i>
								</h3>
								<p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain
									was born and I will give you completed.</p>
							</div>
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>CÁLCULO DE IMPOSTOS</small></h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Vert Consulting <i class="fa fa-quote-right"></i>
								</h3>
								<p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself,
									because it is very pursue pleasure. </p>
							</div>
						</div>
						<!-- end testimonial -->
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>DECLARAÇÃO DE IMPOSTO DE RENDA</h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
								<p>They have got my project on time with the competition with a sed highly skilled, and
									experienced & professional team.</p>
							</div>
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>Jacques Philips <small>- Designer</small></h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i>
								</h3>
								<p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain
									was born and I will give you completed.</p>
							</div>
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<h4>Venanda Mercy <small>- Newyork City</small></h4>
							</div>
							<!-- end testi-meta -->
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Vert Consulting <i class="fa fa-quote-right"></i>
								</h3>
								<p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself,
									because it is very pursue pleasure. </p>
							</div>
						</div><!-- end testimonial -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="support" class="section db">
		<div class="container">
			<div class="row">
				<div id="logo-carousel" class="owl-carousel">
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
					<div> <img src="images/logo_03.png" alt=""> </div>
					<div> <img src="images/logo_04.png" alt=""> </div>
					<div> <img src="images/logo_05.png" alt=""> </div>
					<div> <img src="images/logo_06.png" alt=""> </div>
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<footer style="display: none;" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<img height="50px" src="images/logo-light.png" alt="">
						</div>
						<p> SEO Mauris pharetra quam ut commodo malesuada. Sed a ornare purus, nec cursus tortor.
							Integer vehicula felis nec nunc pulvinar efficitur. In et semper odio. Sed laoreet
							ullamcorper augue, ut mattis metus mattis quis.</p>
						<p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.
						</p>
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-2 col-md-6 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Information</h3>
						</div>
						<ul class="footer-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact</a></li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Newsletter</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et tincidunt risus, vitae
							sollicitudin tellus.</p>
						<div class="news-box">
							<form action="#" method="post">
								<div class="form-group">
									<input class="form-control" placeholder="Email address" type="email">
									<button type="submit">
										<svg id="Layer_11" data-name="Layer 11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.19 17.71">
											<path class="cls-1" d="M311,387.93a.89.89,0,0,0-1.27,1.26l6.44,6.44H295a.89.89,0,0,0-.89.89.9.9,0,0,0,.89.9h21.24l-6.44,6.42a.91.91,0,0,0,0,1.27.89.89,0,0,0,1.27,0l8-8a.87.87,0,0,0,0-1.25Z" transform="translate(-294.08 -387.67)"></path>
										</svg>
									</button>
								</div>
							</form>
						</div>

						<div class="widget-title">
							<h3>Social</h3>
						</div>
						<ul class="footer-links social-md">
							<li><a class="fb btn-a" title="Facebook" data-tippy-animation="scale" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="gi btn-a" title="Github" data-tippy-animation="scale" href="#"><i class="fa fa-github"></i> </a></li>
							<li><a class="tw btn-a" title="Twitter" data-tippy-animation="scale" href="#"><i class="fa fa-twitter"></i> </a></li>
							<li><a class="dr btn-a" title="Dribbble" data-tippy-animation="scale" href="#"><i class="fa fa-dribbble"></i> </a></li>
							<li><a class="pi btn-a" title="Pinterest" data-tippy-animation="scale" href="#"><i class="fa fa-pinterest"></i> </a></li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Contact Details</h3>
						</div>

						<ul class="footer-links">
							<li><a href="mailto:#">info@yoursite.com</a></li>
							<li><a href="#">www.yoursite.com</a></li>
							<li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
							<li>+61 3 8376 6284</li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<div class="copyrights">
		<div class="container">
			<div class="footer-distributed">
				<div class="footer-left">
					<p class="footer-company-name">All Rights Reserved. &copy; 2024</p>
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/tippy.all.min.js"></script>
	<script src="js/custom.js"></script>

	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/jquery.slitslider.js"></script>
	<script type="text/javascript">
		$(function() {

			var Page = (function() {

				var $nav = $('#nav-dots > span'),
					slitslider = $('#slider').slitslider({
						onBeforeChange: function(slide, pos) {

							$nav.removeClass('nav-dot-current');
							$nav.eq(pos).addClass('nav-dot-current');

						}
					}),

					init = function() {

						initEvents();

					},
					initEvents = function() {

						$nav.each(function(i) {

							$(this).on('click', function(event) {

								var $dot = $(this);

								if (!slitslider.isActive()) {

									$nav.removeClass('nav-dot-current');
									$dot.addClass('nav-dot-current');

								}

								slitslider.jump(i + 1);
								return false;

							});

						});

					};

				return {
					init: init
				};

			})();

			Page.init();

		});
	</script>

	<script>
		tippy('.btn-a')
	</script>

	<script>
		$(document).ready(function() {
			// Array para armazenar os valores substituídos




			// // Iterar sobre cada slide
			// $('.divNossaEmpresa').each(function(index) {

			//     var h4Content = nossaEmpresa[index].h4;
			//     var h2Content = nossaEmpresa[index].h2;
			//     var pContent = nossaEmpresa[index].p;

			//     // Substituir o conteúdo das tags h2 e p
			//     $(this).find('h4').html(h4Content);
			//     $(this).find('h2').html(h2Content);
			//     $(this).find('p').html(pContent);
			// });

			// $('.divValores').each(function(index) {
			//     try {
			//         var pContent = valores[index].p;
			//         $(this).find('p').html(pContent);
			//     } catch (error) {

			//     }
			// });

			// $('.divVisao').each(function(index) {
			//     var pContent = visao[index].p;
			//     $(this).find('p').html(pContent);
			// });

			// $('.divMissao').each(function(index) {
			//     var pContent = missao[index].p;
			//     $(this).find('p').html(pContent);
			//     console.log(pContent);
			// });


			// $('.divProdutosTitulo').each(function(index) {
			//     var pContent = produtosTitulo[index].h3;
			//     var h5Content = produtosTitulo[index].h5;
			//     $(this).find('h3').html(pContent);
			//     $(this).find('h5').html(h5Content);

			// });


			// $('.divProdutosTitulo').each(function(index) {
			//     var pContent = produtosTitulo[index].h3;
			//     var h5Content = produtosTitulo[index].h5;
			//     $(this).find('h3').html(pContent);
			//     $(this).find('h5').html(h5Content);

			// });

			// $('.divProdutosDestaque').each(function(index) {
			//     var pContent = produtosDestaque[index].p;

			//     var h5Content = produtosDestaque[index].h5;

			//     $(this).find('p').html(pContent);

			//     $(this).find('h5').html(h5Content);

			// });


			// $('.divProdutosServicosTitulo').each(function(index) {
			//     var h3Content = produtosServicosTitulo[index].h3;
			//     var pContent = produtosServicosTitulo[index].p;
			//     $(this).find('h3').html(h3Content);
			//     $(this).find('p').html(pContent);

			// });


			// $('.divProdutosServicos').each(function(index) {
			//     var h3Content1 = produtosServicos[index].h3;
			//     var pContent1 = produtosServicos[index].p;
			//     $(this).find('h3').html(h3Content1);
			//     $(this).find('p').html(pContent1);

			// });

			// $('.pricing-item').each(function(index) {
			//     var h3Content1 = precos[index].h3;
			//     var pContent1 = precos[index].p;
			//     $(this).find('h3').html(h3Content1);
			//     $(this).find('p').html(pContent1);

			// });



		});
	</script>

</body>

</html>