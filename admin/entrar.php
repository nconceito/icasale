<?php

	SESSION_START();
	
	if (isset($_POST['usuario'])){
		
		$login = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		include	"config.php";
		if ($comando = $Dados->prepare("select * from Usuarios where Usuario = ? and Senha = ?")){
			
			$comando->bind_param("ss", $login, $senha);
			$comando->execute();
			$resultado = $comando->get_result();
			$usuario = $resultado->fetch_object();
			
			if(isset($usuario->Nome)){
				$_SESSION['usuario']=$usuario->Usuario;
				//echo $usuario->Nome;
				header("location: index.php");
			} else {
				$_SESSION['erro']="Usuário ou senha inválidos";
				header("location: login.php");
			}
		}		
	} else{
		Echo "Requisição inválida!";
	}
	

?>