<?php

include 'conexao.php';

$login = $_POST ['login'];
$email = $_POST ['email'];
$pass = $_POST ['pass'];

$sql = "INSERT INTO usuarios (loginn,email,senha) VALUES ('$login','$email', MD5('$pass'))";

$teste = mysqli_query ($conexao, $sql);

header ("Location:index.php");

?>