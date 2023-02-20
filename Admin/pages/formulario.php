<?php
	include_once("../conexao.php");
	
	$nome_compl = filter_input(INPUT_POST, 'nomealuno', FILTER_SANITIZE_STRING);
	$nacio  = filter_input(INPUT_POST, 'nacioaluno', FILTER_SANITIZE_EMAIL);
    $tel = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_EMAIL);
    $b_i  = filter_input(INPUT_POST, 'bialuno', FILTER_SANITIZE_EMAIL);
    $est_c = filter_input(INPUT_POST, 'estaluno', FILTER_SANITIZE_EMAIL);
    $data_nasc = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_EMAIL);
    $sexo  = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_EMAIL);
    $nome_m  = filter_input(INPUT_POST, 'nomemae', FILTER_SANITIZE_EMAIL);
    $nome_p= filter_input(INPUT_POST, 'painom', FILTER_SANITIZE_EMAIL);
    $morada = filter_input(INPUT_POST, 'morada', FILTER_SANITIZE_EMAIL);
    $tel_rede = filter_input(INPUT_POST, 'telrede', FILTER_SANITIZE_EMAIL);
	
	//echo "Nome: $nome <br>";
	//echo "E-mail: $email <br>";
	//echo "senha: $senha <br>";
	

	$result_usuario = "INSERT INTO Matricula WHERE id_aluno = '$id_aluno' from aluno(nome_compl, nacio, tel, b_i, est_c, data_nasc, sexo, nome_m, nome_p, morada, tel_resi)
           VALUES ('$nome_compl', '$nacio', '$tel', '$b_i', '$est_c', '$data_nasc', '$sexo', '$nome_m', '$nome_p', '$morada', '$tel_rede')";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
    while($row=mysqli_fetch_assoc($resultado_usuario)){
        $user_id= $row['id_aluno'];
    }
	
	
	/*if(mysqli_insert_id($mysqli)){
		header("Location:sign-in.html");
	}else{
		
	}*/
?>