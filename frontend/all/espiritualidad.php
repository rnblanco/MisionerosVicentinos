<?php
    require_once 'menu.php';
    require_once "../../backend/conexion.php";

    class Espiritualidad extends DB{
        public function ImagenesSantoral(){

            $conexion = $this->conectar();
            $buscarSantoral = $conexion -> prepare('SELECT * FROM santoral');
            $buscarSantoral -> execute();
            $santos = $buscarSantoral -> fetchAll();

            foreach ($santos as $santo){
                echo ' 
                    <li class="col-md-6 col-lg-4 mb-5" data-src=" '.$santo['Imagenes'].' " data-sub-html="<h4>'.$santo['Nombre'].'</h4><p>'.$santo['Historia'].'</p>">
                        <div class="card portfolio-item mx-auto">
                            <a href=" '.$santo['Imagenes'].' ">
                                <img class="card-img-top zoom img-fluid" src="assets/images/santoral-images/'.$santo['Imagenes'].' " style="height:300px;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title" style="height:50px!important;text-align:center;">'.$santo['Nombre'].'</h5>
                            </div>
                        </div>
                    </li>
                ';
            }
        }

        public function Mariologia(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM Mariologia');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;

                echo'
                    <div class="row mb-5"> 
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"><img src="../../backend/images/default-images/'.$imagen.' " class="img-50 d-block mx-auto mb r-img"></div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ml-auto"><p class="lead justified"> '.$mision['Texto'].' </p></div>
                    </div>
                ';
            }
        }
    }
    require_once 'views/espiritualidad.view.php';
?>
