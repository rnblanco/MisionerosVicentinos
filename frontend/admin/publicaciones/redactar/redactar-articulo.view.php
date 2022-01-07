<!DOCTYPE html>
<html lang="es">
    <head>
      <title>Redactar Artículo</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/x-icon" href="Images/DefaultImages/icon.ico" />
      <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">
      <link href="../../assets/css/form.css" rel="stylesheet">
    </head>

    <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <?php
          require_once '../../menu.php';
			Menu($_SESSION['tipo'],"../../");
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <?php
                  User();
                ?>

              </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <div class="container-fluid px-1 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-10 col-lg-11 col-md-12">
                        <div class="card b-0">
                            <h4 class="heading">Redactar un artículo</h4>
                            <p class="desc"></p>
                            <ul id="progressbar" class="text-center">
                                <li class="active step0" id="step1"></li>
                                <li class="step0" id="step2"></li>
                                <li class="step0" id="step3"></li>
                            </ul>
                            <fieldset class="show">
                                <div class="form-card">
                                    <h6 class="sub-heading">Elije el tipo de artículo que deseas escribir</h6>
                                    <div class="row px-1">

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio selected" id="Obras">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Obras > Quienes somos</p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio" id="ActividadesPastorales">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Actividades pastorales > Noticias</p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio" id="Misiones">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Misiones > Noticias</p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio" id="ArticulosVocacionales">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Artículos vocacionales > Cultura vocacional</p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio" id="TestimoniosVocacionales">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Testimonios vocacionales > Cultura vocacional</p>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="card portfolio-item mx-auto card-block text-center radio" id="ArticulosVarios">
                                            <img class="card-img-top icon icon1" src="../../../../backend/images/default-images/doc.png">
                                            <div class="card-body">
                                                <p class='sub-desc' style='height:50px!important;text-align:center;'>Artículos varios > Espiritualidad</p>
                                            </div>
                                        </div>
                                      </div>

                                    </div> <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">SIGUIENTE<span class="fa fa-long-arrow-right"></span></button>
                                </div>
                            </fieldset>
                            <fieldset>
                              <form action="../Db/AgregarPublicacion.php" method="post" enctype="multipart/form-data" id="form">
                                <div class="form-card">
                                  <label class="mb-3">Para proteger la información que ingresa al sitio, se ha bloqueado la función de pegar texto. Además, no es posible introducir los siguientes caracteres "<  >  =  ." .</label><br>
                                  <input id="seccion" name="seccion" class="seccion-input">
                                    <div class='form-group'> <label class='form-control-label'>Imagen * :</label> <br><img src='https://via.placeholder.com/250' id='preview' class='img-thumbnail' style='height:250px!important;width:300px!important;'><br><div id='msg'></div><input type='file' name='img' id='img' class='file' accept='image/*' onblur="validate1(3)"><div class='input-group my-3'><input type='text' class='form-control' disabled placeholder='Subir imagen' id="file"><div class='input-group-append'><button type='button' class='browse btn btn-primary'>Subir</button></div></div></div>
                                    <div class="form-group"> <label class="form-control-label">Título * :</label> <input onkeypress="javascript:return tprotection(event)" type="text" id="title" name="title" placeholder="" class="form-control" onblur="validate1(1)"> </div>
                                    <div class="form-group"> <label class="form-control-label">Cuerpo * :</label> <textarea onkeypress="javascript:return bprotection(event)" id="body" name="body" class="form-control" onblur="validate1(2)"></textarea></div>
                                    <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4" type="submit">PUBLICAR<span class="fa fa-long-arrow-right"></span></button>
                                    <button class="btn-block btn-secondary mt-3 mb-1 prev"><span class="fa fa-long-arrow-left"></span>ANTERIOR</button>
                                </div>
                              </form>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h5 class="sub-heading mb-4">¡Artículo publicado con éxito!</h5>
                                    <div class="check"> <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif"> </div>
                                    <button onclick="r()" style="color:white;text-align:center;" class="btn-block btn-primary mt-3 mb-1 next mt-4">REDACTAR OTRO ARTÍCULO</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Misioneros Vicentinos 2020</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres cerrar sesión?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Selecciona "cerrar sesión" si estás seguro de irte.</div>
            <div class="modal-footer" style="align-items: center;">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
				<a class="btn btn-primary" style="color:white!important;" href="../../../../backend/auth/log-out.php">Cerrar sesión</a>
            </div>
          </div>
        </div>
      </div>

      <script src="../../assets/vendor/jquery/jquery.js"></script>
      <script src="../../assets/vendor/jquery-easing/jquery.easing.js"></script>
      <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script src="../../assets/js/sb-admin-2.js"></script>
      <script src="redactar-articulo.js"></script>

    </body>
</html>
