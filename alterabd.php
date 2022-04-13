<?php
include 'conexao.php';

$login = $_POST ['login'];
$pass = $_POST ['pass'];

$sql = "UPDATE INTO usuarios (senha) VALUES (MD5('$pass') WHERE loginn = '{$login}')";

$teste = mysqli_query ($conexao, $sql);

header ("Location:index.php");

?>