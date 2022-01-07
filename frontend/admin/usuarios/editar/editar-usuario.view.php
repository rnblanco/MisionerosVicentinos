<!DOCTYPE html>
<html lang="es">
    <head>
      <title> Editar Usuario</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/x-icon" href="../../../../backend/images/default-images/icon.ico" />
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
		  $editarUsuario = new EditarUsuario();
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
                            <h4 class="heading">Editar un usuario</h4>
                            <p class="desc"></p>
                            <form action='../Db/EditarPublicacion.php' method='post' enctype='multipart/form-data' id='form'></form>
                              <div class='form-card'>
                                <label class='mb-3'>Para proteger la información que ingresa al sitio, se ha bloqueado la función de pegar texto. Además, no es posible introducir los siguientes caracteres '<  >  =  .'</label><br>
                                <?php $editarUsuario->CargarPublicacion(); ?>
                              </div>
                            </form>
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
                <span>Copyright &copy; Misioneros Vicentinos <?php echo date('Y');?></span>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script src="../../assets/js/sb-admin-2.js"></script>
      <script src="editar-usuario.js"></script>

    </body>
</html>
