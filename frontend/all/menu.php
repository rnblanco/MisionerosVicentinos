<?php

	require_once "../../backend/conexion.php";

	class Publicaciones extends DB{
		private $paginaActual;
		private $totalPaginas;
		private $nResultados;
		private $resultadosPorPagina;
		private $indice;
		private $conexion;
        private $tipo;

		public function __construct($nPorPagina,$tipo){
			parent::__construct();
			$this->conexion=$this->conectar();
			$this->resultadosPorPagina = $nPorPagina;
			$this->indice = 0;
			$this->paginaActual = 1;
            $this->tipo = $tipo;
            $this->calcularPaginas();
		}

		public function calcularPaginas(){
			$totalResultados = $this->conexion->prepare("SELECT * FROM publicaciones WHERE Estado = 2 AND Seccion = :seccion" );
            $totalResultados->bindParam(':seccion', $this->tipo, PDO::PARAM_STR);
            $totalResultados->execute();
			$this->nResultados = $totalResultados->rowCount();
			$this->totalPaginas = ceil($this->nResultados/$this->resultadosPorPagina);
			if(isset($_GET['pagina'])){
				$this->paginaActual = $_GET['pagina'];
				$this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
			}
		}

		public function NoticiasInicio($Seccion){
			$buscarNoticiasInicio = $this->conexion->prepare('SELECT * FROM publicaciones WHERE Estado = 2 AND Seccion = :seccion ORDER BY id_Publicacion LIMIT :pos, :n');
			$buscarNoticiasInicio->bindParam(':seccion', $Seccion, PDO::PARAM_STR);
			$buscarNoticiasInicio->bindParam(':pos', $this->indice, PDO::PARAM_INT);
			$buscarNoticiasInicio->bindParam(':n', $this->resultadosPorPagina, PDO::PARAM_INT);
			$buscarNoticiasInicio->execute();
			$noticiasInicio = $buscarNoticiasInicio->fetchAll();

            if($buscarNoticiasInicio->rowCount()<1) echo '<p class="col-12 text-center">No hay resultados para esta página</p>';

			foreach($noticiasInicio as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen)){

				$imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
				if( strlen($cuerpo) >=100 ){
					$cuerpo = substr($cuerpo, 0, 100); $cuerpo .= "...";
				}
				if( strlen($titulo) >=50 ){
					$titulo = substr($titulo, 0, 50); $titulo .= "...";
				}
				echo"
                    <div class='col-md-6 col-lg-4 mb-5'>
                        <div class='card portfolio-item mx-auto' data-toggle='modal' data-target='#portfolioModal$idPublicacion'>
                            <div class='portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100'>
                                <div class='portfolio-item-caption-content text-center text-white'><p>Leer más</p></div>
                            </div>
                            <img class='card-img-top' src='../../backend/images/posts-images/$imagen' alt='Card image cap' style='height:200px!important;'>
                            <div class='card-body'style='align-items:center;'>
                                <h5 class='card-title' style='height:50px!important;text-align:center;margin-bottom:32px;vertical-align:middle;'>$titulo</h5>
                                <p class='card-text justified' style='height:100px!important;padding-top:10px;'>$cuerpo</p>
                            </div>
                        </div>
                    </div>
                ";
			}
		}

		public function VistaNoticiasInicio($Seccion){
			$buscarNoticiasInicio = $this->conexion->prepare('SELECT * FROM publicaciones WHERE Estado = 2 AND Seccion = :seccion ORDER BY id_Publicacion LIMIT :pos, :n');
			$buscarNoticiasInicio->bindParam(':seccion', $Seccion, PDO::PARAM_STR);
			$buscarNoticiasInicio->bindParam(':pos', $this->indice, PDO::PARAM_INT);
			$buscarNoticiasInicio->bindParam(':n', $this->resultadosPorPagina, PDO::PARAM_INT);
			$buscarNoticiasInicio->execute();
			$noticiasInicio = $buscarNoticiasInicio->fetchAll();

			foreach($noticiasInicio as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen)){
				$buscarUsuario= $this->conexion->prepare('SELECT Nombre from usuarios WHERE Id_Usuario = :id ');
				$buscarUsuario->bindParam(':id', $id_Usuario, PDO::PARAM_STR);
				$buscarUsuario->execute();
				$usuarios = $buscarUsuario->fetchAll();
				foreach($usuarios as $usuario){
					$user=$usuario['Nombre'];
				}
				$imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
				echo'
                    <div class="portfolio-modal modal fade" id="portfolioModal'.$idPublicacion.'" tabindex="-1" role="dialog" aria-labelledby="portfolioModal'.$idPublicacion.'" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                                <div class="modal-body text-center">
                                    <div class="container">
                                        <div class="row2 justify-content-center">
                                            <div class="col-lg-8">
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class=" text-secondary text-uppercase mb-0 m-title" id="portfolioModal'.$idPublicacion.'">'.$titulo.'</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div>
                                                <img class="m-img img-fluid rounded mb-5" style="height:250px!important;" src="../../backend/images/posts-images/'.$imagen.'" alt="" />
                                                <p class="mb-5 justified news-text">'.$cuerpo.'</p>
                                                <br>
                                                <p class="mb-5 justified news-text" style="font-weight: bold;">Por: '.$user .'.</p>
                                                <form action="convertToPdf.php" method="post">
                                                    <input type="text" style="display:none;" name="idPublicacion" value="'.$idPublicacion.'">
                                                    <input type="text" style="display:none;" name="titulo" value="'.$titulo.'">
                                                    <input type="text" style="display:none;" name="cuerpo" value="'.$cuerpo.'">
                                                    <input type="text" style="display:none;" name="imagen" value="'.$imagen.'">
                                                    <input type="text" style="display:none;" name="user" value="'.$user.'">
                                                    <button type="submit" class="btn btn-secondary"><i class="fas fa-file-pdf fa-fw"></i>Crear Pdf</button>
                                                </form><br>
                                                <button class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
			}
		}

		public function Paginas(){
			$actual = '';
			echo "<ul class='pagination'>";
			for($i=0; $i < $this->totalPaginas; $i++){
				if(($i + 1) == $this->paginaActual) $actual = ' class="page-item active" ';
                else $actual = ' class="page-item " ';
				echo '<li ' .$actual . ' style="font-weight:bold;"><a class="page-link" href="?pagina='. ($i + 1). '">'. ($i + 1) . '</a></li>';
			}
			echo "</ul>";
			$actual = '';
			echo "<ul>";
		}

		public function mostrarTotalResultados(){
			return $this->nResultados;
		}
	}

    function Footer(){
        echo "
            <footer class='footer text-center'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg mb mb-lg'>
                            <h4 class='text-uppercase mb-4'>REDES SOCIALES</h4>
                            <a class='btn btn-outline-light btn-social mx-1' href='https://www.facebook.com/RadioVicentinaCentroamericana/'><i class='fab fa-fw fa-facebook-f'></i></a>
                            <a class='btn btn-outline-light btn-social mx-1' href='https://twitter.com/radio_vicentina'><i class='fab fa-fw fa-twitter'></i></a>
                            <a class='btn btn-outline-light btn-social mx-1' href='https://www.youtube.com/channel/UCxFbq2LR1P4zmR_gF6J41UQ'><i class='fab fa-fw fa-youtube'></i></a>
                        </div>

                    </div>
                </div>
            </footer>

            <!-- Copyright Section-->
            <div class='copyright py-4 text-center text-white'>
                <div class='container'><small>Copyright © Misioneros Vicentinos ".date("Y")."</small></div>
            </div>

            <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
            <div class='scroll-to-top d-lg-none position-fixed'>
                <a class='js-scroll-trigger d-block text-center text-white rounded' href='#page-top'><i class='fa fa-chevron-up'></i></a>
            </div>
        ";
    }

    function Menu($id){
        switch ($id){
            case 1:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container extra">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="index.php">Inicio</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                ';
            break;
    
            case 2:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container extra">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="quienes_somos.php">¿Quiénes somos?</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                ';
            break;

            case 3:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
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
                ';
            break;

            case 4:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container extra">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="culturavocacional.php">Cultura V.</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galería</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                ';
            break;

            case 5:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
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
                ';
            break;

            case 6:
                echo '
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container extra">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Misioneros Vicentinos<p class="sub-titulo">Provincia de América Central</p></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="quienes_somos.php">¿Quiénes somos?</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias.php">Noticias</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="culturavocacional.php">Cultura V.</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="espiritualidad.php">Espiritualidad</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="galeria.php">Galería</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                ';
            break;
        }
    }
?>