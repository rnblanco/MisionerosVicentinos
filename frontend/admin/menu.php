<?php

function User(){
    echo"
        <li class='nav-item dropdown no-arrow'>
            <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-user mr-3 mb-1'></i>
            <span class='mr-2 d-none d-lg-inline text-gray-600 small'>"; echo $_SESSION['nombre']; echo"</span>
            </a>
            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
            
            <a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>
                <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                Cerrar sesión
            </a>
            </div>
        </li>
    ";
}

function Menu($tipo,$path=''){
    switch($tipo){

        case 1:
            echo '
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-left" href="'.$path.'index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Escritor</div>
                </a>

                <hr class="sidebar-divider">
                
                <div class="sidebar-heading" style="color:white!important;">
                    Escritor
                </div>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'publicaciones/redactar/redactar-articulo.php">
                    <i class="fas fa-keyboard"></i>
                    <span>Redactar artículo</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'mis-publicaciones/mis-publicaciones.php">
                    <i class="fas fa-edit"></i>
                    <span>Mis publicaciones</span></a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading" style="color:white!important;">
                    Editables
                </div>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'santoral/santoral.php">
                    <i class="far fa-smile"></i>
                    <span>Santoral</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'carrusel/carrusel.php">
                    <i class="fas fa-images"></i>
                    <span>Carrusel de Imágenes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'vinculos/vinculos.php">
                    <i class="fas fa-link"></i>
                    <span>Vinculos Vicentinos</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'historial/historial.php">
                    <i class="fas fa-history"></i>
                    <span>Historia Provincial</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'seminarios/seminarios.php">
                    <i class="fas fa-home"></i>
                    <span>Seminarios</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'evangelio/editar-evangelio.php?id=1">
                    <i class="fas fa-bible"></i>
                    <span>Evangelio</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'radio/editar-radio.php?id=1">
                    <i class="fas fa-microphone-alt"></i>
                    <span>Radio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mision/editar-mision.php?id=1">
                    <i class="fas fa-bullseye"></i>
                    <span>Misión</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'vision/editar-vision.php?id=1">
                    <i class="fas fa-eye"></i>
                    <span>Visión</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'eco/editar-eco.php?id=1">
                    <i class="fas fa-book-open"></i>
                    <span>Eco Provincial</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mariologia/editar-mariologia.php?id=1">
                    <i class="fas fa-female"></i>
                    <span>Mariología Vicentina</span></a>
                </li>

            </ul>
            ';
        break;

        case 2:
            echo '
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-left" href="'.$path.'index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Administrador</div>
                </a>

                <hr class="sidebar-divider">

                <div class="sidebar-heading" style="color:white!important;">
                    Administrador
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'publicaciones/publicaciones.php">
                    <i class="fas fa-edit"></i>
                    <span>Todas las publicaciones</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'usuarios/escritores.php">
                    <i class="fas fa-users"></i>
                    <span>Escritores</span></a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading" style="color:white!important;">
                    Editables
                </div>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'santoral/santoral.php">
                    <i class="far fa-smile"></i>
                    <span>Santoral</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'carrusel/carrusel.php">
                    <i class="fas fa-images"></i>
                    <span>Carrusel de Imágenes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'vinculos/vinculos.php">
                    <i class="fas fa-link"></i>
                    <span>Vinculos Vicentinos</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'historial/historial.php">
                    <i class="fas fa-history"></i>
                    <span>Historia Provincial</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'seminarios/seminarios.php">
                    <i class="fas fa-home"></i>
                    <span>Seminarios</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'evangelio/editar-evangelio.php?id=1">
                    <i class="fas fa-bible"></i>
                    <span>Evangelio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'radio/editar-radio.php?id=1">
                    <i class="fas fa-microphone-alt"></i>
                    <span>Radio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mision/editar-mision.php?id=1">
                    <i class="fas fa-bullseye"></i>
                    <span>Misión</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'vision/editar-vision.php?id=1">
                    <i class="fas fa-eye"></i>
                    <span>Visión</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'eco/editar-eco.php?id=1">
                    <i class="fas fa-book-open"></i>
                    <span>Eco Provincial</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mariologia/editar-mariologia.php?id=1">
                    <i class="fas fa-female"></i>
                    <span>Mariología Vicentina</span></a>
                </li>

            </ul>
            ';
        break;

        case 3:
            echo '
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-left" href="'.$path.'index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Súper Administrador</div>
                </a>

                <hr class="sidebar-divider">
        
                <div class="sidebar-heading" style="color:white!important;">
                    Súper administrador
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'publicaciones/publicaciones.php">
                    <i class="fas fa-edit"></i>
                    <span>Todas las publicaciones</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'usuarios/administradores/administradores.php">
                    <i class="fas fa-users"></i>
                    <span>Administradores</span></a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading" style="color:white!important;">
                    Editables
                </div>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'santoral/santoral.php">
                    <i class="far fa-smile"></i>
                    <span>Santoral</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'carrusel/carrusel.php">
                    <i class="fas fa-images"></i>
                    <span>Carrusel de Imágenes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="'.$path.'vinculos/vinculos.php">
                    <i class="fas fa-link"></i>
                    <span>Vinculos Vicentinos</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'historial/historial.php">
                    <i class="fas fa-history"></i>
                    <span>Historia Provincial</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'seminarios/seminarios.php">
                    <i class="fas fa-home"></i>
                    <span>Seminarios</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'evangelio/editar-evangelio.php?id=1">
                    <i class="fas fa-bible"></i>
                    <span>Evangelio</span></a>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'radio/editar-radio.php?id=1">
                    <i class="fas fa-microphone-alt"></i>
                    <span>Radio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mision/editar-mision.php?id=1">
                    <i class="fas fa-bullseye"></i>
                    <span>Misión</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'vision/editar-vision.php?id=1">
                    <i class="fas fa-eye"></i>
                    <span>Visión</span></a>
                </li>

                

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'eco/editar-eco.php?id=1">
                    <i class="fas fa-book-open"></i>
                    <span>Eco Provincial</span></a>
                </li>

                

                <li class="nav-item">
                    <a class="nav-link active" href="'.$path.'mariologia/editar-mariologia.php?id=1">
                    <i class="fas fa-female"></i>
                    <span>Mariología Vicentina</span></a>
                </li>

            </ul>
            ';
        break;
    }
}
?>