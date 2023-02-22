<?php
	include_once("../conexao.php");

	$estado_pagamento = filter_input(INPUT_POST, 'estado_pagamento', FILTER_SANITIZE_STRING);
	$tip_pagamentos = filter_input(INPUT_POST, 'tip_pagamentos', FILTER_SANITIZE_STRING);
	$dt_pagamento = filter_input(INPUT_POST, 'dt_pagamento', FILTER_SANITIZE_EMAIL);
	$valor_pagamento = filter_input(INPUT_POST, 'valor_pagamento', FILTER_SANITIZE_EMAIL);
    $referencia = filter_input(INPUT_POST, 'referencia', FILTER_SANITIZE_EMAIL);
	
	//echo "tipo: $tip_pagamentos <br>";
	//echo "data: $dt_pagamento <br>";
	//echo "Valor: $valor_pagamento <br>";
	
	$result_usuario = "INSERT INTO pagamentos (estado_pagamento, tip_pagamentos, dt_pagamento, valor_pagamento, referencia) VALUES ('$estado_pagamento', '$tip_pagamentos', '$dt_pagamento', '$valor_pagamento', '$referencia')";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
	
	if(mysqli_insert_id($mysqli)){
		header("Location:matricula.html");
	}else{
		echo "error";
	}
?>