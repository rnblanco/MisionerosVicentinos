<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarImagen extends DB{
		public function __construct(){

			parent::__construct();

			$error="";$test="";$ext="";$name="";$locacion="";$nuevalocacion="";

			if( $_FILES['img'] ){
				$locacion = '../images/slider-images/' . $_FILES['img']['name'];
				$nuevalocacion = $_FILES['img']['name'];
			}
			else{
				$error .= "falta img";
			}

			if( $locacion!=="" ) {
				$conexion = $this->conectar();
				$agregarImagen = $conexion->prepare('INSERT INTO slider (Imagenes, Estado) VALUES (?,?)');
				$agregarImagen->execute([$nuevalocacion, 2]);

				if($agregarImagen->rowCount() >= 1){
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
	$agregarImagen = new AgregarImagen();
?>