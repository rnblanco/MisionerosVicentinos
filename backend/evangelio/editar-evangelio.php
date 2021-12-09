<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';


	class EditarEvangelio extends DB{

		public function __construct(){

			parent::__construct();

			$titulo="";$texto="";$id="";$error="";

			if(empty($_POST['titulo'])){
				$error .= "falta titulo";
			}
			else{
				$titulo = $_POST['titulo'];
			}

			if(empty($_POST['texto'])){
				$error .= "falta texto";
			}
			else{
				$texto = $_POST['texto'];
			}

			if(empty($_POST['id'])){
				$error .= "falta id";
			}
			else{
				$id = $_POST['id'];
			}

			//sin imagen
			if ($texto!=="" && $titulo!=="" && $id!==""){
				$conexion = $this->conectar();
				$editarEvangelio = $conexion->prepare(" UPDATE evangelio SET titulo = :titulo , evangelio = :texto WHERE  id = :id ");
				$editarEvangelio->bindParam(':titulo', $titulo, PDO::PARAM_STR);
				$editarEvangelio->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarEvangelio->bindParam(':id', $id, PDO::PARAM_STR);
				$editarEvangelio->execute();

				if($editarEvangelio->rowCount() >= 1){
					echo $editarEvangelio->execute();
					http_response_code(200);
				}
				else {
					echo $editarEvangelio->execute();
					http_response_code(500);
				}
			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarEvangelio = new EditarEvangelio();
?>