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

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container extra">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="noticias.php">Noticias</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php 
            Menu(3);
            $publicaciones = new Publicaciones(6);
            $noticias = new Noticias();
        ?>

        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column ">
                <h1 class="masthead-heading text-uppercase text-header">NOTICIAS</h1>
            </div>
        </header>

        
        <section class="page-section portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Actividades pastorales de las Obras</h2>
                <div class="divider-custom"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>

                <div class="row">
                    <?php $publicaciones->NoticiasInicio("Actividades Pastorales"); ?>
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
                <h2 class="page-section-heading text-center text-uppercase text-white">Eco provincial</h2>
                <div class="divider-custom divider-light"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>
                <?php $noticias->Eco(); ?>
            </div>
        </section>
                
        <section class="page-section portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Misiones</h2>
                <div class="divider-custom"> <div class="divider-custom-line"></div> <div class="divider-custom-icon"><i class="fas fa-star"></i></div> <div class="divider-custom-line"></div> </div>

                <div class="row">
                    <?php $publicaciones->NoticiasInicio("Misiones"); ?>
                </div>
                <div class="d-flex justify-content-center pagination-lg">
                    <nav aria-label='Páginas de artículos'>
                    
                    <?php $publicaciones->Paginas(); ?>
                    </nav>
                    
                </div>
            </div>
        </section>

        <!-- Footer-->
        <?php Footer(); ?>

        <!-- Portfolio Modals-->
        <?php
            $publicaciones->VistaNoticiasInicio("Actividades Pastorales");
            $publicaciones->VistaNoticiasInicio("Misiones");
        ?>
        
       <!-- JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
