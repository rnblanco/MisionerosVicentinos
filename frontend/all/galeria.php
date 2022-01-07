<?php
    require_once 'menu.php';
    require_once '../../backend/conexion.php';

    class Galeria extends DB{
        public function ImagenesGaleria(){
            $conexion = $this->conectar();
            $buscarGaleria = $conexion -> prepare('SELECT * FROM santoral');
            $buscarGaleria -> execute();
            $images = $buscarGaleria -> fetchAll();

            $buscarImages = $conexion -> prepare('SELECT * FROM publicaciones');
            $buscarImages -> execute();
            $images2 = $buscarImages -> fetchAll();

            foreach ($images as $image){
                echo  ' <li class="col-md-6 col-lg-4 mb-5" data-src="../../backend/images/santoral-images/'.$image['Imagenes'].' ">
                        <a href="../../backend/images/santoral-images/'.$image['Imagenes'].' " style="height:300px;">
                            <img class="zoom img-fluid" src="../../backend/images/santoral-images/'.$image['Imagenes'].' ">
                        </a>    
                    </li>';
            }

            foreach ($images2 as $image){
                echo  ' <li class="col-md-6 col-lg-4 mb-5" data-src=../../backend/images/posts-images/'.$image['Imagenes'].'">
                      <a href="../../backend/images/posts-images/'.$image['Imagenes'].'" style="height:300px;">
                        <img class="zoom img-fluid" src="../../backend/images/posts-images/'.$image['Imagenes'].'">
                      </a>
                    </li>';
            }
        }
    }
    require_once 'views/galeria.view.php';
?>
