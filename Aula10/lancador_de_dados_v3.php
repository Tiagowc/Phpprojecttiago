<?php 

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "POST") {
        
        $min = $_POST["min"];
        $max = $_POST["max"];
        $dados = $_POST["dados"];
        
       
    }
       
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Repetição de dados</title>
</head>
<body>
		<?php  if ($method=="GET") {?>
		
		<form method="post">
		
		 <p>
		 	<label>Valor Mínimo:</label><input type="number" name="min" />
		 </p>
		 	<label>Valor Máximo:</label><input type="number" name="max" />
		 <P>
		 	<label>Numero de dados:</label><input type="number" name="dados" />
		</P>
		<input type="submit" />
		
		
		</form>
		
		<?php  }  else {?>

		<h1>Números Sorteados	: </h1> 
		
		
		
		<?php  for($i = 0; $i < $dados ; $i++) { ?>
		
		<h3>
		<?php echo rand($min, $max); ?>
		</h3>
		
		
		<?php }?>
		
		

<?php } ?>


</body>
</html>