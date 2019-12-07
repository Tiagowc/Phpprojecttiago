<?php 

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "POST") {
    
    
    $min = $_POST["min"];
    $max = $_POST["max"];

    $resultado = rand($min, $max);
    
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lancador de dados v2</title>
</head>
<body>
 <a href="index.html">Voltar</a>
<h1>Lancador de Dados</h1>

<?php  if( $method == "GET") { ?>

	<form method="POST">
	
	<P>
	<label>Valor Mínimo :</label><input name="min" type="number" />
	<p>
	<label>Valor Máximo :</label><input name="max" type="number" />
	<P>
	<input type="submit">
	
	
		</form>
	<a href="/Atividadesphp/index.html"><button>Home</button></a>

<?php }  else { ?>

	<form method="POST">
	
	<P>
	<label>Valor Mínimo :</label><input name="min" type="number" />
	<p>
	<label>Valor Máximo :</label><input name="max" type="number" />
	<P>
	<input type="submit">
		
	
		</form>
		
	<a href="/Atividadesphp/index.html"><button>Home</button></a>
	
	
		
	
		<h1> Numero Sorteado:
		<?php echo  $resultado; ?>
		</h1> 
		
		<?php }?>


</body>
</html>