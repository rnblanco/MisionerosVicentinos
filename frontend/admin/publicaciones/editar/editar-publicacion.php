<?php
	require_once '../../../../backend/auth/sesiones.php';
	require("../../../../backend/conexion.php");

	class EditarPublicacion extends DB{

		public function Secciones($seccion){

			switch($seccion){
				case "Obras":
					echo " <option value='Obras' selected='selected'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";
					break;
				case "Actividades Pastorales":
					echo " <option value='Actividades Pastorales' selected='selected'> Actividades Pastorales </option>
                <option value='Obras'> Obras </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";
					break;
				case "Misiones":
					echo " <option value='Misiones' selected='selected'> Misiones </option>
                <option value='Obras'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";
					break;
				case "Articulos Vocacionales":
					echo "<option value='Articulos Vocacionales' selected='selected'> Artículos Vocacionales </option>
                <option value='Obras'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";
					break;
				case "Testimonios Vocacionales":
					echo "<option value='Testimonios Vocacionales' selected='selected'> Testimonios Vocacionales </option>
                <option value='Obras'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";
					break;
				case "Articulos varios":
					echo " <option value='Articulos Varios' selected='selected'> Artículos Varios </option>
                <option value='Obras'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>";
					break;
				default:
					echo " <option value='Obras' selected='selected'> Obras </option>
                <option value='Actividades Pastorales'> Actividades Pastorales </option>
                <option value='Misiones'> Misiones </option>
                <option value='Articulos Vocacionales'> Artículos Vocacionales </option>
                <option value='Testimonios Vocacionales'> Testimonios Vocacionales </option>
                <option value='Articulos Varios'> Artículos Varios </option>";

					break;
			}
		}

		public function CargarPublicacion(){

			$conexion = $this->conectar();
			if( $_SESSION['tipo'] ==3 | $_SESSION['tipo'] == 2){
				$id = $_GET['id'];
				$buscarPublicacion = $conexion->prepare("SELECT * FROM publicaciones WHERE Id_Publicacion = ? ");
				$buscarPublicacion->execute([$id]);
				$Publicacion = $buscarPublicacion->fetchAll();

				foreach($Publicacion as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen, $estado, $seccion)){

					$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
					$imagen2 = $imagen;
					$imagen2 = explode("/", $imagen2);
					echo"
                    <input id='tipo' class='seccion-input' value='"; echo ("{$_SESSION['tipo']}"); echo "'>
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <div class='form-group'> <label class='form-control-label'>Imagen:</label> <br><img src='../../../../backend/images/posts-images/$imagen' id='preview' class='img-thumbnail' style='height:250px!important;width:300px!important;'><br><div id='msg'></div><input type='file' name='img' id='img' class='file' accept='image/*' onblur='validate1(3)'><div class='input-group my-3'><input type='text' class='form-control' disabled placeholder='$imagen2[2]' id='file'><div class='input-group-append'><button type='button' class='browse btn btn-primary'>Cambiar</button></div></div></div>  
                    <div class='form-group'> <label class='form-control-label'>Sección:</label>
                    <select class='form-control' id='seccion' onblur='validate1(4)'>";
					self::Secciones($seccion);
					echo"    
                    </select></div>
                    <div class='form-group'> <label class='form-control-label'>Título:</label> <input onkeypress='javascript:return tprotection(event)'' type='text' id='title' name='title' placeholder='' class='form-control' onblur='validate1(1)' value='$titulo'> </div>
                    <div class='form-group'> <label class='form-control-label'>Cuerpo:</label> <textarea onkeypress='javascript:return bprotection(event)'' id='body' name='body' class='form-control' onblur='validate1(2)'>$cuerpo</textarea></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
				}
			}
			else{

				$buscarPublicacion = $conexion->prepare("SELECT * FROM publicaciones WHERE Id_Publicacion = ' " . $_GET['id'] . " ' AND Id_Usuario = ' ". $_SESSION['id'] ." ' ");
				$buscarPublicacion->execute();
				$Publicacion = $buscarPublicacion->fetchAll();

				foreach($Publicacion as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen, $estado, $seccion)){

					$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
					$imagen2 = $imagen;
					$imagen2 = explode("/", $imagen2);
					echo"
                    <input id='tipo' class='seccion-input' value='"; echo ("{$_SESSION['tipo']}"); echo "'>
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <div class='form-group'> <label class='form-control-label'>Imagen:</label> <br><img src='../../../../backend/images/posts-images/$imagen' id='preview' class='img-thumbnail' style='height:250px!important;width:300px!important;'><br><div id='msg'></div><input type='file' name='img' id='img' class='file' accept='image/*' onblur='validate1(3)'><div class='input-group my-3'><input type='text' class='form-control' disabled placeholder='$imagen2[2]' id='file'><div class='input-group-append'><button type='button' class='browse btn btn-primary'>Cambiar</button></div></div></div>  
                    <div class='form-group'> <label class='form-control-label'>Sección:</label>
                    <select class='form-control' id='seccion' onblur='validate1(4)'>";
					self::Secciones($seccion);
					echo"    
                    </select></div>
                    <div class='form-group'> <label class='form-control-label'>Título:</label> <input onkeypress='javascript:return tprotection(event)'' type='text' id='title' name='title' placeholder='' class='form-control' onblur='validate1(1)' value='$titulo'> </div>
                    <div class='form-group'> <label class='form-control-label'>Cuerpo:</label> <textarea onkeypress='javascript:return bprotection(event)'' id='body' name='body' class='form-control' onblur='validate1(2)'>$cuerpo</textarea></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
				}
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	$id = $_GET['id'];
	if($id == null || $id = '') header("Location: ../../admin/");
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'editar-publicacion.view.php';
?>