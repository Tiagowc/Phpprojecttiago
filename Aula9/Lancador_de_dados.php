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
<title>Lan�ador de Dados</title>
</head>
<body>
<h1>Lan�ador de Dados</h1>

<?php if ($method == "GET") {?>
		<form method="POST">
		<p>
				<label>Valor M�nimo:</label> <input name="min" />		
		<p>
				<label>Valor M�ximo:</label> <input name="max" />
		
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