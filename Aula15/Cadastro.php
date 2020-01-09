<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
session_start();

if ( isset($_SESSION["lista"]) == FALSE) {

$_SESSION["lista"] = array ();
}

$lista = $_SESSION["lista"];
$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

$usuario = array ();
$usuario["email"] = $email;
$usuario["senha"] = $senha;

$lista[] = $usuario;

 echo "<h1> . print_r($lista) . </h1>;

        
 ?>


