<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	

	session_start();
	
	
	if ( isset( $_SESSION["lista"] ) == false ) {
		
		$_SESSION["lista"] = array();
	}
	$lista = $_SESSION["lista"];
	
	
	$email = $_POST["email"];
	
	
	$usuarioRemovido = false;
	foreach ($lista as $i => $u) {
		
		if ( $lista[$i]["email"] == $email ) {
			unset( $lista[$i] );
			$usuarioRemovido = true;
			$mensagem = "* Removido com sucesso";
			break;
		}
	}
	
	
	$_SESSION["lista"] = $lista;
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Remover | Usuários</title>
</head>
<body>
	<a href="usuarios_mysql.php">Voltar</a>
	<h1>Remova um usuário</h1>
	<form method="POST">
		<p>
			<label>E-mail: </label> <input type="email" name="email" />
		</p>
		<input type="submit" value="Remover" />
	</form>
	<?php if ( isset( $usuarioRemovido ) and $usuarioRemovido == true ) { ?>
		<p>* Usuário removido com sucesso</p>
	<?php } ?>
</body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

