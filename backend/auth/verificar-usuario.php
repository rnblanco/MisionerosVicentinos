<?php
	require_once "../conexion.php";
	session_start();
	$error="";$user="";$pass="";

	class VerificarUsuario extends DB{

		function __construct(){

			parent::__construct();
			$conexion = $this->conectar();

			if(empty($_POST["pass"])){
				$error = " falta pass ";
				$data = $error;
			}
			else {
				$pass = md5($_POST["pass"]);
			}

			if(empty($_POST["user"])){
				$error = " falta user ";
				$data = $error;
			}
			else {
				$user = $_POST["user"];
			}

			if( $user != "" && $pass != "" ) {
				$login = $conexion->prepare('SELECT * FROM usuarios WHERE Email = :email AND Pass = :pass AND Estado="1" ');
				$login->bindParam(':email', $user, PDO::PARAM_STR);
				$login->bindParam(':pass', $pass, PDO::PARAM_STR);
				$login->execute();
				$usuario = $login->fetchAll();

				if($login->rowCount() >= 1){
					$_SESSION['usuario'] = $user;
					$_SESSION['tipo']= $usuario['0']['Tipo'];
					$_SESSION['id']= $usuario['0']['Id_Usuario'];
				}
				else {
					$_SESSION["usuario"] = null;
					http_response_code(500);
				}
			}

			else{
				http_response_code(500);
			}
		}
	}
	$verificarUsuario = new VerificarUsuario();
?>