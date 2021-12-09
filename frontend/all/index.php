<?php
    require_once 'menu.php';
    require_once '../../backend/conexion.php';

    class Index extends DB {

        public function Evangelio(){
            $conexion = $this->conectar();
            $buscarEvangelio = $conexion -> prepare('SELECT * FROM evangelio WHERE ID = 1');
            $buscarEvangelio -> execute();
            $evangelio = $buscarEvangelio -> fetchAll();
            echo "<p class='lead justified' style='font-weight:bold!important;'>";
            echo ($evangelio[0][2]);
            echo ":</p>";
            echo "<p class='lead justified'>";
            echo ($evangelio[0][1]);
            echo "</p>";
        }

        public function SliderNumber(){
            $conexion = $this->conectar();
            $buscarSlider = $conexion -> prepare('SELECT * FROM slider WHERE Estado = 2');
            $buscarSlider -> execute();
            $slides = $buscarSlider -> fetchAll();

            foreach ($slides as $slide){
                if ($slide['ID'] == 1){
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                }
                else{
                    $num = $slide['ID'] - 1;
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$num.'"></li>';
                }
            }
        }

        public function SliderImage(){
            $conexion = $this->conectar();
            $buscarSlider = $conexion -> prepare('SELECT * FROM slider');
            $buscarSlider -> execute();
            $slides = $buscarSlider -> fetchAll();

            foreach ($slides as $slide){
                if ($slide['ID'] == 1){
                    echo '<div class="carousel-item active"><img class="d-block w-100" src="../../backend/images/slider-images/'.$slide['Imagenes'].' " style="height:600px!important;"></div>';
                }
                else{
                    echo'<div class="carousel-item"><img class="d-block w-100" src="../../backend/images/slider-images/'.$slide['Imagenes'].' " style="height:600px!important;"></div>';
                }
            }
        }

        public function Radio(){
            $conexion = $this->conectar();
            $buscarRadio = $conexion -> prepare('SELECT * FROM radio');
            $buscarRadio -> execute();
            $radios = $buscarRadio -> fetchAll();

            foreach ($radios as $radio){
                echo'
                    <div class="row" style="margin-bottom:30px;">
                    <div class="col-lg ml-auto"><p class="lead centered"> '. $radio["Texto"] .' </p></div>
                    </div>
                    <center>
                        <audio id="stream" controls preload="none" style="width: 300px;">
                            <source src=" '.$radio["Enlace"] .' " type="audio/mpeg">
                        </audio>
                    </center>
                ';
            }
        }

        public function Vinculos(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM vinculos');
            $buscarVinculos -> execute();
            $vinculos = $buscarVinculos -> fetchAll();

            foreach ($vinculos as $vinculo){
                $imagen = $vinculo['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
                echo'
                    <div class="col-md-6 col-lg-3 mb-5">
                        <a href=" '. $vinculo['Enlace']. ' " style="color:black">
                            <div class="card portfolio-item mx-auto">
                                <img class="card-img-top" src="../../backend/images/links-images/'. $imagen. ' " " alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="height:50px!important;text-align:center;"> '. $vinculo['Titulo']. ' </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                ';
            }
        }
    }

    require_once 'views/index.view.php';
?>
