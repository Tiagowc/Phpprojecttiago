<?php 
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "POST") {
        
        $min = $_POST["min"];
        $max = $_POST["max"];
        
        $sorteado = rand($min, $max);
        
    }
?>
        




<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados</title>
</head>
<body>
<h1>Lançador de Dados</h1>

<?php if ($method == "GET") {?>
		<form method="POST">
		<p>
				<label>Valor Mínimo:</label> <input name="min" />		
		<p>
				<label>Valor Máximo:</label> <input name="max" />
		
		<P>
				<input type="submit" />
				
		</form>

<?php  } else { ?>


		<h1>
		
			Numero Sorteado:
		
			<?php echo $sorteado; ?>

		</h1>
		
		<?php }?>
		
		
</body>
</html>