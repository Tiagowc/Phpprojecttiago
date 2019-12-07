<?php
$method = $_SERVER["REQUEST_METHOD"];

$Calcv2 = $method == "POST";

if ($Calcv2) {

    // aqui eu pego os numeros
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];


    
    
    // Validação dos numeros

    // Verificar se numero1 é numerico

    if (is_numeric($num1)) {
        if (is_numeric($num2)) {
            if ($num2 != 0) {
                $Soma = $num1 + $num2;
                $Sub = $num2 - $num1;
                $Mult = $num1 * $num2;
                $Div = $num1 / $num2;
            }
            else {
                echo "Numero 2 precisa ser diferente de 0";
            }
        } else { 
            echo "Número 2 não é valor numerico. informe um valor númerico ";
        }
    }
        
    else {
        echo "Número 1 não é valor numerico. Informe um valor númerico";
    
    }
        }
   

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>CALC v2</title>
</head>
<body>
	<h1>Calculadora V2</h1>

	<form method="POST">
	
						
	
		<label>Numero 1:</label>
		 	<input name="num1" /> 
		<label>Numero 2:</label>
			<input name="num2" /> 
			<input type="submit" />
			
		
	</form>	
		<?php  if($Calcv2) { ?>
				<?php if (is_numeric($num1)) { ?>
					<?php if (is_numeric($num2)) { ?>
						<?php  if ($num2 != 0) { ?>	
	
		
		
	<?php if ($Calcv2)  { ?>
		<h2>Calculadora Versão 2</h2>
	<p> Numero 1: <?php echo $num1; ?></p>
	<p> Numero 2: <?php echo $num2; ?></p>
	<br>
	<h4>Resultados</h4>
	<p> Soma = <?php  echo $Soma; ?></p>
	<p> Sub = <?php echo $Sub; ?></p>
	<p> Mult = <?php echo $Mult; ?></p>
	<p> Div = <?php echo $Div; ?></p>
	<?php } ?>
	
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php  } ?>

	
			<br>
	<Br>
	<br>
	<a href="/atividadesphp/aula7/index.html"><button>Voltar</button></a>

	<a href="/atividadesphp/index.html"><button>Home</button></a>



</body>

</html>