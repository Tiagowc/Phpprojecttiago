<?php
$pessoas = array();
$pessoa = array(
    "nome" => "Tiago",
    "sobrenome" => "Werneck",
    "curso" => "PHP",
    "endereco" => "Brasília"
);

$pessoa2 = array(
    "nome" => "Adriana",
    "sobrenome" => "Gomes",
    "curso" => "PHP",
    "endereco" => "GO"
);


$pessoas[] = $pessoa;
$pessoas[] = $pessoa2;


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Array</title>
</head>
<body>
<a href="index.html">Voltar</a>
<h1>Array</h1>

<?php for($i = 0; $i < count($pessoas); $i++) { ?>
	<p>Pessoa <?php echo $i; ?></p>
	<p><?php echo $pessoas[$i]["nome"]; ?></p>
	<p><?php echo $pessoas[$i]["sobrenome"]; ?></p>
	<p><?php echo $pessoas[$i]["curso"]; ?></p>
	<p><?php echo $pessoas[$i]["endereco"]; ?></p>
<?php } ?>
</body>
</html>