<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class AgregarSeminario extends DB{

		public function __construct(){

			parent::__construct();

			$id = $_SESSION['id'];

			$error="";$cuerpo="";$titulo="";$test="";$ext="";$name="";$locacion="";$nuevalocacion="";

			if(empty($_POST['cuerpo'])){
				$error = "falta cuerpo";
			}
			else{
				$cuerpo = $_POST['cuerpo'];
			}

			if(empty($_POST['titulo'])){
				$error .= "falta titulo";
			}
			else{
				$titulo = $_POST['titulo'];
			}

			if( $_FILES['img'] ){
				$locacion = '../images/seminarios-images/' . $_FILES['img']['name'];
				$nuevalocacion = $_FILES['img']['name'];
			}
			else{
				$error .= "falta img";
			}

			if( $cuerpo!=="" && $titulo!=="" && $locacion!=="" ) {
				$conexion = $this->conectar();
				$agregarSeminario = $conexion->prepare('INSERT INTO seminarios (Titulo, Cuerpo, Imagenes) VALUES (?,?,?)');
				$agregarSeminario->execute([$titulo, $cuerpo, $nuevalocacion]);

				if($agregarSeminario->rowCount() >= 1){
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
	$agregarSeminario = new AgregarSeminario();
?>