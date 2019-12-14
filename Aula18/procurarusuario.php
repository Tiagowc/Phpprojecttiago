<?php

$method = $_SERVER["REQUEST_METHOD"];

    if ($method == "POST") {
        
       $email= $_POST["email"];
       
       $link = mysqli_connect("localhost", "root", "");
       
       $existente = mysqli_query($link, "select * from cadastro_usuarios.usuario where email = '$email' ");
       
       if ($existente ->num_rows > 0 ) {
           $emailexist = "Este e-mail já está cadastrado.";
           
           
    } else {
        
        $emailnaoexist = "Este e-mail não existe.";
        
    }
    }



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Aula 18 - PHP e MySQL</title>
</head>
<body>
<a href="/phpprojecttiago/">Home</a>
<h1>Procurar Usuario </h1>
<form method="POST">
    <label>E-mail: </label> <input type="email" name="email" />
    <p>
    <input type="submit" name="Procurar" />
    <p>
        <?php if (isset ($emailnaoexist)) { ?>
        <?php echo $emailnaoexist; ?>
        <?php } ?> 
        
        <?php if(isset ($emailexist)) { ?>
        <?php echo $emailexist; ?>
        <?php } ?>
        
    </p>
    
     
</form>



</body>
</html>