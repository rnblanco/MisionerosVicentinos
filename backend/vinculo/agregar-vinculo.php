<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarVinculo extends DB{

		public function __construct(){

			parent::__construct();

			$error="";$enlace="";$titulo="";$test="";$ext="";$name="";$locacion="";$nuevalocacion="";

			if(empty($_POST['enlace'])){
				$error = "falta enlace";
			}
			else{
				$enlace = $_POST['enlace'];
			}

			if(empty($_POST['titulo'])){
				$error .= "falta titulo";
			}
			else{
				$titulo = $_POST['titulo'];
			}

			if( $_FILES['img'] ){
				$locacion = '../images/links-images/' . $_FILES['img']['name'];
				$nuevalocacion = $_FILES['img']['name'];
			}
			else{
				$error .= "falta img";
			}

			if( $enlace!=="" && $titulo!=="" && $locacion!=="" ) {
				$conexion = $this->conectar();
				$agregarVinculo = $conexion->prepare('INSERT INTO vinculos (Titulo, Imagenes, Enlace) VALUES (?,?,?)');
				$agregarVinculo->execute([$titulo, $nuevalocacion, $enlace]);

				if($agregarVinculo->rowCount() >= 1){
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
	$agregarVinculo = new AgregarVinculo();
?>