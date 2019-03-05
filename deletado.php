<?php 
	require_once 'config.php';

	$deletaId = $_GET['id'];
	$queryDelete = "DELETE FROM tabela_nomes_ed WHERE id = $deletaId";
	$consultaDelete = mysqli_query($con, $queryDelete);

	require_once 'inc/renderiza-tabela.php';
 	
?>