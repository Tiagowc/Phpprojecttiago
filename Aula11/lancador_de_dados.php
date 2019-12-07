<?php 

    $method = $_SERVER["REQUEST_METHOD"];

        if ($method == "POST")  {
    
         $min = $_POST["min"];
         $max = $_POST["max"];
         $dados = $_POST["dados"];
    
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Aula 11</title>
</head>
<body>
		<a href="index.html"><button>Voltar</button></a>
	<h1>Aula 11</h1>
	
	<form method="POST">
	
		<label>Valor mínimo:</label><input type="number" name="min" />
	<p>
		<label>Valor Máximo</label><input type="number" name="max" />
	</p>
	<p>
		<label>Numero de Dados:</label><input type="number" name="dados" />
	</p>
	<p>
		<input type="submit" />
	
	</form>
	
	
	<?php  if ($method == "GET")  {?>
	
	
	<?php } else  {?>

		<h1>Números Sorteados:</h1>
		
		<?php for ($i=0; $i < $dados; $i++) { ?>
		    
	   
		<?php echo  rand($min, $max); ?>
		    
		<?php } ?>	
		
		<?php } ?>
<br>
	<a href ="index.html"><button>Aula 11</button></a>
	<a href ="/atividadesphp/index.html"><button>Home</button></a>


</body>
</html>
