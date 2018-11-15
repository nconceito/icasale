<?php
	
	$Dados = new mysqli("sql157.main-hosting.eu", "u903621769_admin", "admin123.", "u903621769_imobi");
	
	/* check connection */
	if (mysqli_connect_errno()) {
		Echo "Não foi possível conectar ao banco de dados: " . $Dados->connect_error;		
	}
?>