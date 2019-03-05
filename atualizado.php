<?php 
	require_once 'config.php';

	$setaId = $_GET['id'];
	$atualizaNome = $_GET['nome'];
	$atualizaSobreNome = $_GET['sobrenome'];
	$queryAtuliza = "UPDATE tabela_nomes_ed SET nome = $atualizaNome, sobrenome = $atualizaSobreNome WHERE $setaId";
	$consultaAtuliza = mysqli_query($con, $queryAtuliza);

	require_once 'inc/renderiza-tabela.php';

?>