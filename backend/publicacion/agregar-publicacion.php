<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarPublicacion extends DB{

		public function __construct(){

			parent::__construct();

			$id = $_SESSION['id'];

			$error="";$seccion="";$titulo="";$cuerpo="";$test="";$ext="";$name="";$locacion="";$nuevalocacion="";

			if(empty($_POST['seccion'])){
				$error = "falta seccion";
			}
			else{
				$seccion = $_POST['seccion'];
			}

			if(empty($_POST['title'])){
				$error .= "falta title";
			}
			else{
				$titulo = $_POST['title'];
			}

			if(empty($_POST['body'])){
				$error .= "falta body";
			}
			else{
				$cuerpo = $_POST['body'];
			}

			if( $_FILES['img'] ){
				$locacion = '../images/posts-images/' . $_FILES['img']['name'];
				$nuevalocacion = $_FILES['img']['name'];
			}
			else{
				$error .= "falta img";
			}

			if( $cuerpo!=="" && $titulo!=="" && $locacion!=="" && $seccion!=="") {
				$conexion = $this->conectar();
				$agregarPublicacion = $conexion->prepare('INSERT INTO publicaciones (Id_Usuario, Titulo, Cuerpo, Imagenes, Estado, Seccion) VALUES (?,?,?,?,?,?)');
				$agregarPublicacion->execute([$id, $titulo, $cuerpo, $nuevalocacion, 2, $seccion]);

				if($agregarPublicacion->rowCount() >= 1){
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
	$agregarPublicacion = new AgregarPublicacion();
?>