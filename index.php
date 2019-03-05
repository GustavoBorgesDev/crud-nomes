<?php require_once 'config.php'; ?>
<?php require_once 'inc/header.php'; ?>
		
	<div class="row mt-5">
		<div class="col-md-12 mb-5">
			<h2>Tabela de Nomes</h2>
		</div>
		
		<form action="" method="POST" id="id-form" class="col-md-4">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" class="form-control text-white bg-secondary" name="nome_dado" id="id-nome">
			</div>
			<div class="form-group">
				<label>Sobre Nome:</label>
				<input type="text" class="form-control text-white bg-secondary" name="sobre_nome_dado" id="id-sobrenome">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</form>
	</div>

	<div class="row mt-5">
		<table class="table table-dark">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobre Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>

			<?php 
				require_once 'inc/renderiza-tabela.php';
			?>

			</tbody>
		</table>
	</div>

	<div id="render"></div>

 <?php include 'inc/footer.php'; ?>