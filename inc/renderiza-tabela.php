<?php
	$listaDados = [];
	$querySelect = "SELECT * FROM tabela_nomes_ed ORDER BY id ASC";
	$consultaSelect = mysqli_query($con, $querySelect);
	while ($dadoLinha  = mysqli_fetch_assoc($consultaSelect)) {
		array_push($listaDados, $dadoLinha);
	}
	foreach ($listaDados as $dados) {
	?>
	<tr>
		<td><?php echo $dados['nome']; ?></td>
		<td><?php echo $dados['sobrenome']; ?></td>
		<td>
			<button onclick="AtualizaDado('<?php echo $dados["id"]; ?>','<?php echo $dados["nome"]; ?>','<?php echo $dados["sobrenome"]; ?>')" class="btn btn-primary">

				<i class="fa fa-edit"></i>
			</button>
			<button onclick="DeletaDado(<?php echo $dados['id']; ?>)" class="btn btn-danger">
				<i class="fa fa-remove"></i>
			</button>
		</td>
	</tr>
	<?php 
	}
?>