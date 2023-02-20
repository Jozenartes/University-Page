<?php
	include_once("../conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
	
	//echo "Nome: $nome <br>";
	//echo "E-mail: $email <br>";
	//echo "senha: $senha <br>";
	
	$result_usuario = "INSERT INTO aluno (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
	
	if(mysqli_insert_id($mysqli)){
		header("Location:sign-in.html");
	}else{
		//
	}
?>