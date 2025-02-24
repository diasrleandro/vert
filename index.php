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


    $sql = "SELECT * FROM site where template = 1";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    $results = [];
    // Armazena os resultados em um array associativo
    while ($row = $res->fetch_assoc()) {
        $results[] = $row;
    }



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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-seo"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li style=" list-style: none;" class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                        <li style=" list-style: none;" class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header
	


   Alto nível de criticidade nas análises fiscais e contábeis;



	
	-->

    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25"
                data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">

                    <div class="bg-img bg-img-1"></div>
                    <h2>
                        <?php
                        echo $results[0]['content1'];
                        ?>
                    </h2>

                    <blockquote>
                        <p>
                            <?php
                            echo $results[0]['content2'];
                            ?>
                        </p>
                        <a href="#" class="bttn-new">Fale Conosco</a>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15"
                data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <h2>
                        <?php
                        echo $results[1]['content1'];
                        ?>
                    </h2>

                    <blockquote>
                        <p>
                            <?php
                            echo $results[1]['content2'];
                            ?>
                        </p>
                        <a href="#" class="bttn-new">Fale Conosco</a>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3"
                data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <h2>
                        <?php
                        echo $results[2]['content1'];
                        ?>
                    </h2>

                    <blockquote>
                        <p>
                            <?php
                            echo $results[2]['content2'];
                            ?>
                        </p>
                        <a href="#" class="bttn-new">Fale Conosco</a>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="25"
                data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                    <h2>
                        <?php
                        echo $results[3]['content1'];
                        ?>
                    </h2>

                    <blockquote>
                        <p>
                            <?php
                            echo $results[3]['content2'];
                            ?>
                        </p>
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
    <!-- Excelência não se Negocia -->
    <div id="about" class="section wb nopadtop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m40">
                    <div class="message-box divNossaEmpresa">
                        <h4>
                            <?php
                            echo $results[4]['title'];
                            ?>
                        </h4>
                        <h2 class="text-color-bordo">
                            <?php
                            echo $results[4]['content1'];
                            ?>
                        </h2>
                        <p> <?php
                            echo $results[4]['content2'];
                            ?></p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="wow fadeIn">
                        <img src="images/about_01.jpg" alt="" class="img-fluid borderImg">
                    </div><!-- end media -->
                </div><!-- end col -->

            </div><!-- end row -->

            <div style="display: none;" class="row vission-and-mission">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" style=" list-style: none;"><a class="nav-link active" href="#tab_a"
                                data-toggle="tab">Missão</a></li>
                        <li class="nav-item" style=" list-style: none;"><a class="nav-link" href="#tab_b"
                                data-toggle="tab">Valores</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_a">

                            <div class="box-inner-m">
                                <div class="divMissao">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_b">
                            <div class="box-inner-m">
                                teste
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr1">

            <!-- assessoria na gestão do negócio e implantação de soluções. -->
            <div class="section-title text-center divProdutosTitulo">
                <h3 class="text-color-bordo"> <?php
                                                echo $results[5]['title'];
                                                ?></h3>
                <h5 class="lead"> <?php
                                    echo $results[5]['content1'];
                                    ?></h5>
            </div><!-- end title -->

            <div class="seo-services row clearfix ">
                <div class="col-md-6 col-xs-12">
                    <div class="why-img-box">
                        <img src="images/why-img-01.jpg" class="img-fluid  borderImg" alt="" />
                    </div>
                </div><!-- end col -->

                <div class="col-md-6 col-xs-12">
                    <div class="why-dit ">
                        <div class="divValores">
                            <p><?php
                                echo $results[5]['content1'];
                                ?></p>
                        </div>
                        <div class="divValores">
                            <p><?php
                                echo $results[5]['content2'];
                                ?></p>
                        </div>
                    </div>
                </div><!-- end col -->

                <!-- Outsourcing -->
                <div class="col-md-6 col-xs-12 divProdutosDestaque ">
                    <div class="why-dit">
                        <h4 class="text-color-bordo"><?php
                                                        echo $results[12]['title'];
                                                        ?></h4>
                        <h5><?php
                            echo $results[12]['content1'];
                            ?></h5>
                        <p><?php
                            echo $results[12]['content2'];
                            ?></p>
                    </div>
                </div><!-- end col -->

                <div class="col-md-6 col-xs-12">
                    <div class="why-img-box">
                        <img src="images/why-img-02.jpg" class="img-fluid  borderImg" alt="" />
                    </div>
                </div><!-- end col -->
            </div><!-- end how-its-work -->
        </div><!-- end container -->
    </div><!-- end section -->



    <!-- Produtos e Serviços -->
    <div id="services" class="section lb ">
        <div class="container-fluid">
            <div class="container">
                <div class="section-title text-center divProdutosServicosTitulo">
                    <h3><?php
                        echo $results[13]['title'];
                        ?></h4>
                    </h3>
                    <p class="lead"><?php
                                    echo $results[13]['content1'];
                                    ?>
                    </p>
                </div><!-- end title -->
            </div>

            <!-- // Carrosssel Produtos -->
            <div class="row text-center  ">
                <div class="owl-services-seo  owl-carousel owl-theme">
                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[14]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[14]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->


                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[16]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[16]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[17]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[17]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[18]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[18]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[19]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[19]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[20]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[20]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->
                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[21]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[21]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[22]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[22]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->
                    <div>
                        <div class="service-widget divProdutosServicos " style="margin-left: 100px;">
                            <div class="post-media wow fadeIn">
                                <h3> <?php
                                        echo $results[23]['content1'];
                                        ?>
                                </h3>
                            </div>
                            <?php
                            echo $results[23]['content2'];
                            ?>

                        </div><!-- end service -->
                    </div><!-- end col -->



                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <div id="pricing" class="section backgroudGold">
        <div class="container">
            <div class="section-title text-center">
                <h3> <?php
                        echo $results[25]['title'];
                        ?></h3>
                <p> <?php
                    echo $results[25]['content1'];
                    ?></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pricing pricing-palden">
                        <div class="pricing-item">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency">R$</span><?php
                                                                                                    echo $results[26]['content1'];
                                                                                                    ?></h3>
                                    <span class="pricing-period">/mês</span>
                                </div>
                                <h3 class="pricing-title"><?php
                                                            echo $results[26]['title'];
                                                            ?></h3>
                                </h3>
                            </div>
                            <p><?php
                                echo $results[26]['content2'];
                                ?>
                            </p>
                            <button class="bttn-new-a">Escolha o Plano</button>
                        </div>
                        <div class="pricing-item pricing__item--featured">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency">R$</span><?php
                                                                                                    echo $results[27]['content1'];
                                                                                                    ?></h3>
                                    <span class="pricing-period">/mês</span>
                                </div>
                                <h3 class="pricing-title"><?php
                                                            echo $results[27]['title'];
                                                            ?></h3>
                                </h3>
                            </div>
                            <p><?php
                                echo $results[27]['content2'];
                                ?>
                            </p>
                            <button class="bttn-new-a">Escolha o Plano</button>
                        </div>
                        <div class="pricing-item">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency">R$</span><?php
                                                                                                    echo $results[28]['content1'];
                                                                                                    ?></h3>
                                    <span class="pricing-period">/mês</span>
                                </div>
                                <h3 class="pricing-title"><?php
                                                            echo $results[28]['title'];
                                                            ?></h3>
                                </h3>
                            </div>
                            <p><?php
                                echo $results[28]['content2'];
                                ?>
                            </p>
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
                <h3 class="text-color-bordo"><?php
                                                echo $results[29]['title'];
                                                ?></h3>
                <p class="lead"><?php
                                echo $results[29]['content2'];
                                ?></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <h4><?php
                                    echo $results[30]['title'];
                                    ?></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php
                                                                        echo $results[30]['content2'];
                                                                        ?> <i class="fa fa-quote-right"></i></h3>
                                <p><?php
                                    echo $results[30]['content2'];
                                    ?></p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <h4><?php
                                    echo $results[31]['title'];
                                    ?></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php
                                                                        echo $results[31]['content1'];
                                                                        ?> <i class="fa fa-quote-right"></i></h3>
                                <p><?php
                                    echo $results[30]['content2'];
                                    ?></p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <h4><?php
                                    echo $results[30]['title'];
                                    ?></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php
                                                                        echo $results[32]['content1'];
                                                                        ?> <i class="fa fa-quote-right"></i></h3>
                                <p><?php
                                    echo $results[32]['content2'];
                                    ?></p>
                            </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <h4><?php
                                    echo $results[33]['title'];
                                    ?></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php
                                                                        echo $results[33]['content1'];
                                                                        ?> <i class="fa fa-quote-right"></i></h3>
                                <p><?php
                                    echo $results[30]['content2'];
                                    ?></p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                    </div><!-- end carousel -->
                </div><!-- end col -->
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
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis
                            montes.
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
                                        <svg id="Layer_11" data-name="Layer 11" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 25.19 17.71">
                                            <path class="cls-1"
                                                d="M311,387.93a.89.89,0,0,0-1.27,1.26l6.44,6.44H295a.89.89,0,0,0-.89.89.9.9,0,0,0,.89.9h21.24l-6.44,6.42a.91.91,0,0,0,0,1.27.89.89,0,0,0,1.27,0l8-8a.87.87,0,0,0,0-1.25Z"
                                                transform="translate(-294.08 -387.67)"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links social-md">
                            <li><a class="fb btn-a" title="Facebook" data-tippy-animation="scale" href="#"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a class="gi btn-a" title="Github" data-tippy-animation="scale" href="#"><i
                                        class="fa fa-github"></i> </a></li>
                            <li><a class="tw btn-a" title="Twitter" data-tippy-animation="scale" href="#"><i
                                        class="fa fa-twitter"></i> </a></li>
                            <li><a class="dr btn-a" title="Dribbble" data-tippy-animation="scale" href="#"><i
                                        class="fa fa-dribbble"></i> </a></li>
                            <li><a class="pi btn-a" title="Pinterest" data-tippy-animation="scale" href="#"><i
                                        class="fa fa-pinterest"></i> </a></li>
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



        });
    </script>
    222222
</body>

</html>