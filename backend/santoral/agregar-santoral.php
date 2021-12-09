<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarSantoral extends DB{

		public function __construct(){

			parent::__construct();

			$id = $_SESSION['id'];

			$error="";$historia="";$nombre="";$test="";$ext="";$name="";$locacion="";$nuevalocacion="";

			if(empty($_POST['historia'])){
				$error = "falta historia";
			}
			else{
				$historia = $_POST['historia'];
			}

			if(empty($_POST['nombre'])){
				$error .= "falta nombre";
			}
			else{
				$nombre = $_POST['nombre'];
			}

			if( $_FILES['img'] ){
				$locacion = '../images/santoral-images/' . $_FILES['img']['name'];
				$nuevalocacion =  $_FILES['img']['name'];
			}
			else{
				$error .= "falta img";
			}

			if( $historia!=="" && $nombre!=="" && $locacion!=="" ) {
				$conexion = $this->conectar();
				$agregarSantoral = $conexion->prepare('INSERT INTO santoral (Nombre, Historia, Imagenes) VALUES (?,?,?)');
				$agregarSantoral->execute([$nombre, $historia, $nuevalocacion]);

				if($agregarSantoral->rowCount() >= 1){
					move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
					echo json_encode(['code'=>200]);
					exit;
				}
				else {
					echo json_encode(['code'=>404]);
					echo $error;
				}
			}

			else{
				echo json_encode(['code'=>404]);
				echo $error;
			}
		}
	}
	$agregarSantoral = new AgregarSantoral();
?>