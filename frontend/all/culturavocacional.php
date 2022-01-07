<?php
    require_once 'menu.php';
    require_once '../../backend/conexion.php';

    class CulturaVocacional extends DB{
        public function Seminarios(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM seminarios');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen = $mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;
                $cuerpo = $mision['Cuerpo'];
                if( strlen($cuerpo) >=220 ){
                    $cuerpo = substr($cuerpo, 0, 220); $cuerpo .= "...";
                }

                echo'
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card portfolio-item mx-auto" >
                            <img class="card-img-top" src="../../backend/images/seminarios-images/'. $imagen .' " alt="Card image cap" style="height:200px!important;"> 
                            <div class="card-body">
                                <h5 class="card-title" style="height:50px!important;text-align:center;color:black;"> '. $mision['Titulo'] .' </h5>
                                <p class="card-text justified" style="padding-top:10px;color:black;"> '. $cuerpo .' </p>
                                <a data-toggle="modal" data-target="#portfolioModal'.$mision['Id_Seminario'].'" class="btn btn-primary justify-content-center align-items-center align-content-center align-self-center" role="button"><i class="fas fa-book-open"></i>  Leer más</a>  
                            </div>
                        </div>
                    </div>
                ';
            }
        }

        public function VerSeminarios(){
            $conexion = $this->conectar();
            $buscarVinculos = $conexion -> prepare('SELECT * FROM seminarios');
            $buscarVinculos -> execute();
            $misiones = $buscarVinculos -> fetchAll();

            foreach ($misiones as $mision){
                $imagen=$mision['Imagenes'];
                $imagen==""?$imagen="../../backend/images/default-images/imagen_no_disponible.png":$imagen;

                echo'
                    <div class="portfolio-modal modal fade" id="portfolioModal'.$mision['Id_Seminario'].'" tabindex="-1" role="dialog" aria-labelledby="portfolioModal'.$mision['Id_Seminario'].'" aria-hidden="true">
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
                                                <h2 class=" text-secondary text-uppercase mb-0 m-title" id="portfolioModal'.$mision['Id_Seminario'].'">'.$mision['Titulo'].'</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div>
                                                <img class="m-img img-fluid rounded mb-5" style="height:250px!important;" src="../../backend/images/seminarios-images/'.$imagen.' " alt="" />
                                                <p class="mb-5 justified news-text"> '.$mision['Cuerpo'].' </p>
                                                <br>
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
    }
    require_once 'views/culturavocacional.view.php';
?>
