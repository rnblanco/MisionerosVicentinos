<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarHistorial extends DB{

		public function __construct(){

			parent::__construct();

			$id = $_SESSION['id'];
			$error="";$texto="";$pais="";$test="";$ext="";$name="";$locacion=""; $nuevalocacion="";

			if(empty($_POST['texto'])) $error = "falta texto";
			else $texto = $_POST['texto'];

			if(empty($_POST['pais'])) $error .= "falta pais";
			else $pais = $_POST['pais'];

			if( $_FILES['img'] ){
				$locacion = '../images/countries-images/' . $_FILES['img']['name'];
				$nuevalocacion = $_FILES['img']['name'];
			}
			else $error .= "falta img";

			if( $texto!=="" && $pais!=="" && $locacion!=="" ) {
				$conexion = $this->conectar();
				$agregarHistorial = $conexion->prepare('INSERT INTO historial (Pais, Texto, Imagenes) VALUES (?,?,?)');
				$agregarHistorial->execute([$pais, $texto, $nuevalocacion]);

				if($agregarHistorial->rowCount() >= 1){
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
	$agregarHistorial = new AgregarHistorial();
?>