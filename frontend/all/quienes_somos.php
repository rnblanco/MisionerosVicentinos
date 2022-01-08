<?php
	require_once 'menu.php';
    require_once '../../backend/conexion.php';

    class QuienesSomos extends Db{

        public function Mision(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM mision');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;

                echo'
	            	<div class="row">
	                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"><img src="../../backend/images/default-images/'.$imagen.'" class="img-50 d-block mx-auto mb"></div>
	                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ml-auto"><p class="lead justified"> '.$mision['Texto'].' </p></div>
	                </div>
	            ';
            }
        }

        public function Vision(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM vision');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/imagen_no_disponible.png":$imagen;
                echo'
		            <div class="row">
		                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ml-auto"><p class="lead justified"> '.$mision['Texto'].' </p></div>
		                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"><img src="../../backend/images/default-images/'.$imagen.'" class="img-50 d-block mx-auto mb"></div>
		            </div>
                ';
            }
        }

        public function Presencia(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM historial');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
	            $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
	            echo'
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-5">
                            <div class="card portfolio-item mx-auto">
                                <img class="card-img-top" src="../../backend/images/countries-images/'.$imagen.'" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="height:50px!important;text-align:center;"> '.$mision['Pais'].' </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }

        public function Historia(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM historial');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
	            $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
                echo'
		            <div class="row mb-5"> 
			            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"><img src="../../backend/images/countries-images/'.$imagen.'" class="img-50 d-block mx-auto mb"></div>     
			            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ml-auto"><p class="lead justified"> '.$mision['Texto'].' </p></div>
			        </div>
            	';
            }
        }
    }

    require_once 'views/quienes_somos.view.php';
?>