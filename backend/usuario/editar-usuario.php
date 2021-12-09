<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarUsuario extends DB{

		public function __construct(){

			parent::__construct();

			$nombre="";$pais="";$email="";$pass="";$error="";$id="";$tipo="";

			if(empty($_POST['nombre'])){
				$error = "falta nombre";
			}
			else{
				$nombre = $_POST['nombre'];
			}

			if(empty($_POST['pais'])){
				$error .= "falta title";
			}
			else{
				$pais = $_POST['pais'];
			}

			if(empty($_POST['email'])){
				$error .= "falta email";
			}
			else{
				$email = $_POST['email'];
			}

			if(empty($_POST['pass'])){
				$error .= "falta pass";
			}
			else{
				$pass = md5($_POST['pass']);
			}
			if(empty($_POST['id'])){
				$error .= "falta id";
			}
			else{
				$id = $_POST['id'];
			}
			if(empty($_POST['tipo'])){
				$error .= "falta tipo";
			}
			else{
				$tipo = $_POST['tipo'];
			}

			//con pass y con tipo
			if($nombre!=="" && $pais!=="" && $email!=="" && $pass!=="" && $tipo!==""){

				$conexion = $this->conectar();
				$usuarioActual = $conexion->prepare("SELECT Nombre, Pais, Email, Pass, Tipo FROM usuarios WHERE Id_Usuario= '$id' ");
				$usuarioActual->execute();

				foreach($usuarioActual as list($aNombre, $aPais, $aEmail, $aPass, $aTipo )){

					if($aNombre==$nombre && $aPais==$pais && $aEmail==$email && $aPass==$pass && $aTipo==$tipo){
						http_response_code(505);
						echo $error;
					}
					else{

						$editarUsuario = $conexion->prepare("UPDATE usuarios set Nombre = :nombre , Pais = :pais , Email = :email, Pass= :pass, Tipo = :tipo WHERE Id_Usuario = :id  ");
						$editarUsuario->bindParam(':nombre', $nombre, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pais', $pais, PDO::PARAM_STR);
						$editarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pass', $pass, PDO::PARAM_STR);
						$editarUsuario->bindParam(':tipo', $tipo, PDO::PARAM_STR);
						$editarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
						$editarUsuario->execute();

						if($editarUsuario->rowCount() >= 1){
							http_response_code(200);
							echo $editarUsuario->execute();
						}
						else{
							http_response_code(404);
							echo $error;
						}
					}
				}
			}
			//sin pass con tipo
			else if($nombre!=="" && $pais!=="" && $email!=="" && $tipo!==""){

				$conexion = $this->conectar();
				$usuarioActual2 = $conexion->prepare("SELECT Nombre, Pais, Email, Tipo FROM usuarios WHERE Id_Usuario= '$id' ");
				$usuarioActual2->execute();

				foreach($usuarioActual2 as list($aNombre, $aPais, $aEmail, $aPass, $aTipo )){

					if($aNombre==$nombre && $aPais==$pais && $aEmail==$email && $aTipo==$tipo){
						http_response_code(505);
						echo $error;
					}
					else{

						$editarUsuario = $conexion->prepare("UPDATE usuarios set Nombre = :nombre , Pais = :pais , Email = :email, Tipo = :tipo WHERE Id_Usuario = :id  ");
						$editarUsuario->bindParam(':nombre', $nombre, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pais', $pais, PDO::PARAM_STR);
						$editarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
						$editarUsuario->bindParam(':tipo', $tipo, PDO::PARAM_STR);
						$editarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
						$editarUsuario->execute();

						if($editarUsuario->rowCount() >= 1){
							http_response_code(200);
							echo $editarUsuario->execute();
						}
						else{
							http_response_code(404);
							echo $error;
						}
					}
				}
			}
			//con pass sin tipo
			else if($nombre!=="" && $pais!=="" && $email!=="" && $pass!==""){


				$conexion = $this->conectar();
				$usuarioActual3 = $conexion->prepare("SELECT Nombre, Pais, Email, Pass FROM usuarios WHERE Id_Usuario= '$id' ");
				$usuarioActual3->execute();

				foreach($usuarioActual3 as list($aNombre, $aPais, $aEmail, $aPass )){

					if($aNombre==$nombre && $aPais==$pais && $aEmail==$email && $aPass==$pass){
						http_response_code(505);
						echo $error;
					}
					else{

						$editarUsuario = $conexion->prepare("UPDATE usuarios set Nombre = :nombre , Pais = :pais , Email = :email, Pass= :pass WHERE Id_Usuario = :id  ");
						$editarUsuario->bindParam(':nombre', $nombre, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pais', $pais, PDO::PARAM_STR);
						$editarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pass', $pass, PDO::PARAM_STR);
						$editarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
						$editarUsuario->execute();

						if($editarUsuario->rowCount() >= 1){
							http_response_code(200);
							echo $editarUsuario->execute();
						}
						else{
							http_response_code(404);
							echo $error;
						}
					}
				}
			}

			//sin pass sin tipo
			else if($nombre!=="" && $pais!=="" && $email!==""){

				$conexion = $this->conectar();
				$usuarioActual4 = $conexion->prepare("SELECT Nombre, Pais, Email FROM usuarios WHERE Id_Usuario= '$id' ");
				$usuarioActual4->execute();

				foreach($usuarioActual4 as list($aNombre, $aPais, $aEmail )){

					if($aNombre==$nombre && $aPais==$pais && $aEmail==$email){
						http_response_code(505);
						echo $error;
					}
					else{
						$editarUsuario = $conexion->prepare("UPDATE usuarios set Nombre = :nombre , Pais = :pais , Email = :email WHERE Id_Usuario = :id  ");
						$editarUsuario->bindParam(':nombre', $nombre, PDO::PARAM_STR);
						$editarUsuario->bindParam(':pais', $pais, PDO::PARAM_STR);
						$editarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
						$editarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
						$editarUsuario->execute();

						if($editarUsuario->rowCount() >= 1){
							http_response_code(200);
							echo $editarUsuario->execute();
						}
						else{
							http_response_code(404);
							echo $error;
						}
					}
				}
			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarUsuario = new EditarUsuario();
?>