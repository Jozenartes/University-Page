<?php

    include_once('../conexao.php');

    if(isset($_POST['btn-save']))
    {
       
        $name = mysqli_real_escape_string($conn, $_POST['name']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha); 

        echo  'working';
    }

   
?>