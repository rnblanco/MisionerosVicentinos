<?php
	require_once "../../../../backend/conexion.php";
	require_once '../../../../backend/auth/sesiones.php';

	class EditarUsuario extends DB{

		public function Tipos($stipo){

			switch($stipo){
				case 1:
					echo " <option value='1' selected='selected'> Escritor </option>
                <option value='2'> Administrador </option>
                <option value='3'> Súper Administrador </option>
                ";
					break;
				case 2:
					echo " <option value='2' selected='selected'> Administrador </option>
                <option value='1'> Escritor </option>
                <option value='3'> Súper Administrador </option>
                ";
					break;
				case 3:
					echo " <option value='3' selected='selected'> Súper Administrador </option>
                <option value='1'> Escritor </option>
                <option value='2'> Administrador </option>
                ";
					break;

			}
		}

		public function CargarPublicacion(){
			$id = $_GET['id'];
			$conexion = $this->conectar();
			$buscarUsuario = $conexion->prepare("SELECT * FROM usuarios WHERE Id_Usuario = ? ");
			$buscarUsuario->execute([$id]);
			$Usuario = $buscarUsuario->fetchAll();
			$tipo = $_SESSION['tipo'];

			if($tipo==3){

				foreach($Usuario as list($id, $pass, $nombre, $pais, $email, $stipo, $estado)){
					echo"
                    <input id='stipo' class='seccion-input' value='"; echo ("{$_SESSION['tipo']}"); echo "'>
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <input id='lastpass' class='seccion-input' value='$pass' >
                    
                    <div class='form-group'> <label class='form-control-label'>Tipo:</label>
                    <select type='text' id='tipo' class='form-control' onblur='validate1(5)'>";
					self::Tipos($stipo);
					echo"</select></div>
                    <div class='form-group'> <label class='form-control-label'>Nombre:</label> <input onkeypress='javascript:return nprotection(event)'' type='text' id='nombre' class='form-control' onblur='validate1(1)' value='$nombre'> </div>
                    <div class='form-group'> <label class='form-control-label'>País:</label> <input onkeypress='javascript:return pprotection(event)'' type='text' id='pais' class='form-control' onblur='validate1(2)' value='$pais'></div>
                    <div class='form-group'> <label class='form-control-label'>Nombre de usuario:</label> <input onkeypress='javascript:return eprotection(event)'' type='text' id='email' class='form-control' onblur='validate1(3)' value='$email'></div>
                    <div class='form-group'> <label class='form-control-label'>Contraseña:</label> <input onkeypress='javascript:return cprotection(event)'' type='password' id='pass' class='form-control' onblur='validate1(4)' placeholder='*******'></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
				}
			}
			else{

				foreach($Usuario as list($id, $pass, $nombre, $pais, $email, $stipo, $estado)){
					echo"
                    <input id='tipo' class='seccion-input' value='"; echo ("{$_SESSION['tipo']}"); echo "'>
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <input id='lastpass' class='seccion-input' value='$pass' >
                    
                    
                    <div class='form-group'> <label class='form-control-label'>Nombre:</label> <input onkeypress='javascript:return nprotection(event)'' type='text' id='nombre' class='form-control' onblur='validate1(1)' value='$nombre'> </div>
                    <div class='form-group'> <label class='form-control-label'>País:</label> <input onkeypress='javascript:return pprotection(event)'' type='text' id='pais' class='form-control' onblur='validate1(2)' value='$pais'></div>
                    <div class='form-group'> <label class='form-control-label'>Nombre de usuario:</label> <input onkeypress='javascript:return eprotection(event)'' type='text' id='email' class='form-control' onblur='validate1(3)' value='$email'></div>
                    <div class='form-group'> <label class='form-control-label'>Contraseña:</label> <input onkeypress='javascript:return cprotection(event)'' type='password' id='pass' class='form-control' onblur='validate1(4)' placeholder='*******'></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
				}
			}
		}
	}

	$id = $_GET["id"];
	$usuario = $_SESSION['usuario'];

	if($usuario == null || $usuario = '') header("Location: ../../../../backend/auth/log-out.php");
	else{
		if($id == null || $id = '') header("Location: ../../../index.php");
		else{
			class Validator extends DB{
				public function __construct(){
					parent::__construct();
					$id = $_GET["id"];
					$tipo = $_SESSION['tipo'];

					$conexion = $this->conectar();
					$verificarId = $conexion->query("SELECT COUNT(*) FROM usuarios WHERE Id_Usuario = '$id' ");
					$verificarId->execute();
					$rows=$verificarId->fetchAll();

					if($rows){
						if($tipo==3 | $tipo==2) require_once 'editar-usuario.view.php';
						else header("Location: ../../../index.php");
					}
					else header("Location: ../../../index.php");
				}
			}
			$validator = new Validator();
		}
	}

?>