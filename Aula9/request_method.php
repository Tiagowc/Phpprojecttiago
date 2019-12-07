<?php 

$method = $_SERVER["REQUEST_METHOD"];



?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

		<h1>Atividades nº1</h1>

 <?php if ( $method == "GET"){ ?>
     
     	<h1> Bem Vindo!!!</h1>
     
 <?php } else  { ?>
 	
		<h1> Request feito com sucesso.</h1>
		
<?php } ?>


</body>
</html>