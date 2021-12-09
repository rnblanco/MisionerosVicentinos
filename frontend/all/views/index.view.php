<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Misioneros Vicentinos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/x-icon" href="Images/DefaultImages/icon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/fonts.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
    </head>

    <body id="page-top">

        <?php 
            Menu(1);
			$index = new Index();
        ?>

        <header class=" text-white text-center larger">

            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
                <div class="container extra">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                
                <ol class="carousel-indicators">
                    <?php $index->SliderNumber(); ?>
                </ol>

                <div class="carousel-inner">
                    <?php $index->SliderImage(); ?>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </header>

        <!-- Evangelio Section-->
        <section class="page-section" id="" style="padding-top:12rem;">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Evangelio del día</h2>
                <div class="divider-custom"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                <div class="row">
                    <div class="col-lg ml-auto"><?php $index->Evangelio();?></div>
                </div>
            </div>
        </section>

         <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Radio online</h2>
                <div class="divider-custom divider-light"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                <?php $index->Radio();?>
            </div>
        </section>

        <!-- Vinculos Section-->
        <section class="page-section" id="">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Vínculos vicentinos</h2>
                <div class="divider-custom"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                <div class="row">
                    <?php $index->Vinculos();?>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <?php Footer(); ?>
        
       <!-- JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
