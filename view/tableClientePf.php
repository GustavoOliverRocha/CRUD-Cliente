<?php
	require_once '../controller/showCliente.php';

	$clientes = showCliente();
?>
<table class="table table-dark table-striped "> 
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>E-mail</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach($clientes as $c): ?>

			<tr>
				<th><?=$c->cliente_id?></th>
				<th><?=$c->cliente_nome?></th>
				<th><?= @getCpf($c->cliente_cpf)?></th>
				<th><?=$c->cliente_email?></th>
				<th>
					<button class="btn btn-primary" onclick="showEditModal('<?=$c->cliente_id?>','<?=$c->cliente_nome?>','<?=$c->cliente_cpf?>','<?=$c->cliente_email?>')"> Editar</button>
					<button class="btn btn-danger" onclick="deleteClientePf(<?=$c->cliente_id?>)">
						Deletar
					</button>
				</th>
			</tr>

		<?php endforeach; ?>

	</tbody>
</table>