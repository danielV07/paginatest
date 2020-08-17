<?php

include_once 'connection.php';
	
	class Registration {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
		
		public function does_user_exist($nombre,$apellido,$email,$pass,$residencia,$edad)
		{
		
			$query = "SELECT * FROM `Usuarios` WHERE email = '$email' AND pass = '$pass';";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				$json['existe'] = ' Ya existe '.$email;
				echo json_encode($json);
				mysqli_close($this -> connection);
			}else{
				
				$query = "INSERT INTO `Usuarios`(`email`, `nombre`, `apellido`, `pass`, `residencia`, `edad`) VALUES ('$email','$nombre','$apellido','$pass','$residencia','$edad');";
				$inserted = mysqli_query($this -> connection, $query);
				if($inserted == 1 ){
					$json['success'] = 'Cuenta Creada Correctamente' .$email;
				}else{
					$json['error'] = 'Tenemos un problema';
				}
				echo json_encode($json);
				mysqli_close($this->connection);
			}
			
		}
		
	}
	
	
	$regis = new Registration();
	if(isset($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['pass'],$_POST['residencia'],$_POST['edad'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];		
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$edad = $_POST['edad'];
		$residencia = $_POST['residencia'];
		echo ('Nombre: ' . $nombre . $apellido  . $email  . $pass  .$residencia  .$edad);
		
		if(!empty($email) && !empty($pass) && !empty($nombre) && !empty($apellido) && !empty($residencia) && !empty($edad)){
			echo (' INTENTO DE REGISTRACION FASE 1 : '  . $nombre . $apellido  . $email  . $pass  .$residencia  .$edad);
			$encrypted_password = md5($pass);
			$regis-> does_user_exist($nombre,$apellido,$email,$pass,$residencia,$edad);
			
		}else{
			echo json_encode("Introduce todos los valores");
		}
		
	}
