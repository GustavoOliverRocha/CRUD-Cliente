<?php
	require_once '../controller/showCliente.php';

	$clientes = showCliente();
?>

<table class="table table-dark table-striped "> 
	<thead>
		<tr>
			<th>#</th>
			<th>Razão Social</th>
			<th>CNPJ</th>
			<th>E-mail</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach($clientes as $c): ?>

			<tr>
				<th><?= $c->cliente_pj_id ?></th>
				<th><?= $c->cliente_pj_razao ?></th>
				<th><?= @getCnpj($c->cliente_pj_cnpj) ?></th>
				<th><?= $c->cliente_pj_email ?></th>
				<th>
					<button class="btn btn-primary" onclick="showPjModal('<?=$c->cliente_pj_id?>','<?=$c->cliente_pj_razao?>','<?=$c->cliente_pj_cnpj?>','<?=$c->cliente_pj_email?>')">Editar</button>
					<button class="btn btn-danger" onclick="deleteClientePj(<?=$c->cliente_pj_id?>)">Deletar</button>
				</th>
			</tr>

		<?php endforeach; ?>

	</tbody>
</table>