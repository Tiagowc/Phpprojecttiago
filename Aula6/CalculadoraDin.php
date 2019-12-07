<?php

$method = $_SERVER["REQUEST_METHOD"];

$ehpost = $method == "POST";

if ($ehpost) {
    // Variaveis para o n�meros
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
    $Soma = $num1 + $num2;
    $Sub = $num2 - $num1;
    $Mult = $num1 * $num2;
    $Div = $num1 / $num2;
    
    
   
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
</head>
<body>	

				<form method ="POST">
					<label>Numero 1:</label>
					<input name="num1" />
					<label>Numero 2:</label>
					<input name="num2" />
					<input type="submit" />
									
				</form>
				
				
	<?php if($ehpost) {?>		
		<h1>Calculadora</h1>
		<p> Numero 1: <?php echo $num1; ?></p>
		<p> Numero 2: <?php echo $num2; ?></p>
		<h2>Resultados:</h2>
		<p> Soma = <?php echo $Soma; ?></p>
		<p> Sub = <?php echo $Sub; ?></p>
		<p> Mult = <?php echo $Mult; ?></p>
		<p> Div = <?php echo $Div; ?></p>
	<?php }?>
		
		
<br>
<Br>
<br>
	<a href ="/atividadesphp/aula6/index.html"><button>Voltar</button></a>
	<a href =""><button>Aula 7</button></a>
	<a href ="/atividadesphp/Index.html"><button>Home</button></a>
				
		
		</body>
</html>