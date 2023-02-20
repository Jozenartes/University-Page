<?php

$usuario = 'root';
$senha = '';
$database = 'idero';
$host = 'localhost';

$mysqli = mysqli_connect ($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
} 

?>