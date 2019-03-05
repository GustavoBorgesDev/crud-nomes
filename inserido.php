<?php 
	require_once 'config.php';

	$rcNome      = $_POST['nome_dado'];
	$rcSobreNome = $_POST['sobre_nome_dado'];

	$queryInsert    = "INSERT INTO tabela_nomes_ed (nome, sobrenome) VALUES ('$rcNome', '$rcSobreNome')";
	$consultaInsert = mysqli_query($con, $queryInsert);

	require_once 'inc/renderiza-tabela.php';

?>