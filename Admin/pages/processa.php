<?php
session_start();	
	//Incluindo a conexão com banco de dados
	include_once("../conexao.php");	

	$result_usus="INSERT TO aluno (Nome, Email, Senha) VALUES ('$usuario','$senha')";
	$resultado_fim = mysqli_query($mysqli,$result_usus);
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($mysqli, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM aluno WHERE Email = '$usuario' && Senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($mysqli, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		header("Location:../index.html");

	}else{  
		//alert("Ola, Erroh!");
			//header("Location:index.html");
		}
        ?>