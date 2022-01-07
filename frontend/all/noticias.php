<?php
    require_once 'menu.php';
    require_once "../../backend/conexion.php";

    class Noticias extends DB{

        public function Eco(){
            $conexion = $this->conectar();
            $buscarEco = $conexion -> prepare('SELECT * FROM eco');
            $buscarEco -> execute();
            $eco = $buscarEco -> fetchAll();

            foreach ($eco as $mision){
                $imagen=$mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
                echo'
                    <div class="row mb-5"> 
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"><img src="../../backend/images/default-images/'.$imagen.'" class="img-100 d-block mx-auto mb r-img"></div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ml-auto"><p class="lead justified">'.$mision['Texto'].'</p></div>
                    </div>
                ';
            }
        }
    }
    require_once 'views/noticias.view.php';
?>
