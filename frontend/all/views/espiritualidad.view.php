<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Misioneros Vicentinos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/x-icon" href="../../backend/images/default-images/icon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/fonts.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <link href="assets/LightGallery/dist/css/lightgallery.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
    </head>

    <body id="page-top">

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container extra">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="espiritualidad.php">Espiritualidad</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php 
            Menu(5);
			$espiritualidad = new Espiritualidad();
            $publicaciones = new Publicaciones(3,"Articulos Varios");
        ?>


        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column ">
                <h1 class="masthead-heading text-uppercase text-header">ESPIRITUALIDAD</h1>
            </div>
        </header>

        <section class="page-section portfolio" id="articulos">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Artículos varios</h2>
                <div class="divider-custom"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>

                <div class="row">
                    <?php $publicaciones->NoticiasInicio("Articulos Varios"); ?>
                </div>
                <div class="d-flex justify-content-center pagination-lg">
                    <nav aria-label='Páginas de artículos'>
                    
                    <?php $publicaciones->Paginas(); ?>
                    </nav>
                    
                </div>
            </div>
        </section>

         <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="mariologia">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Mariología Vicentina</h2>
                <div class="divider-custom divider-light"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                
                <?php $espiritualidad->Mariologia(); ?>
            </div>
        </section>

        <!-- Vinculos Section-->
        <section class="page-section" id="imagenes">
            <div class="container">
              <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Santoral Vicentino</h2>
              <div class="divider-custom"><div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                  <ul class="row" id="lightgallery">
                    <?php $espiritualidad->ImagenesSantoral();?>
                  </ul>
            </div> 
        </section>

        <!-- Footer-->
        <?php Footer(); ?>

        <!-- Portfolio Modals-->
        <?php $publicaciones->VistaNoticiasInicio("Articulos Varios"); ?>
        
        <script type="text/javascript">
        	$(document).ready(function(){
            	$('#lightgallery').lightGallery();
        	});
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="assets/LightGallery/dist/js/lightgallery-all.js"></script>
        <script src="assets/LightGallery/lib/jquery.mousewheel.min.js"></script>
    </body>
</html>
