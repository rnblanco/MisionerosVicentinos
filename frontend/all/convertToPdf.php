<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    
    $data ="";
    $idPublicacion = $_POST['idPublicacion'];
    $titulo = $_POST['titulo'];
    $imagen = $_POST['imagen'];
    $cuerpo = $_POST['cuerpo'];
    $user = $_POST['user'];

        $data .="
            <div class='portfolio-modal modal fade' id='portfolioModal$idPublicacion' tabindex='-1' role='dialog' aria-labelledby='portfolioModal$idPublicacion' aria-hidden='true'>
                <div class='modal-dialog modal-xl' role='document'>
                    <div class='modal-content'>
                        <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'><i class='fas fa-times'></i></span>
                        </button>
                        <div class='modal-body text-center'>
                            <div class='container'>
                                <div class='row2 justify-content-center'>
                                    <div class='col-lg-8'>
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class=' text-secondary text-uppercase mb-0 m-title' id='portfolioModal$idPublicacion'>$titulo</h2>
                                        <!-- Icon Divider-->
                                        <div class='divider-custom'>
                                            <div class='divider-custom-line'></div>
                                            <div class='divider-custom-icon'><i class='fas fa-star'></i></div>
                                            <div class='divider-custom-line'></div>
                                        </div>
                                        <!-- Portfolio Modal - Image--><img class='m-img img-fluid rounded mb-5' style='height:250px!important;' src='$imagen' alt='' />
                                        <!-- Portfolio Modal - Text--><p class='mb-5 justified news-text'>$cuerpo</p>
                                        <br>
                                        <p class='mb-5 justified news-text' style='font-weight: bold;'>Por: $user.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        // escribir pdf
        $mpdf->WriteHTML($data);
        // descargar pdf
        $mpdf->Output("$titulo".".pdf", 'D');
    
?>