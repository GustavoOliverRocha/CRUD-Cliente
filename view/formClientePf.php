<div id="formPf">
	<h1>Dashboard Cliente Pessoa Fisica</h1>
	<form method="POST" action="createClientePf.php" name="clienteFisicoForm">
		<label for="cliente_nome">Nome:</label>
		<input type="text" id="cliente_nome" name="cliente_nome" required>

		<label for="cliente_cpf">CPF:</label>
		<input type="text" id="cliente_cpf" class="cpf" name="cliente_cpf" maxlength="11" placeholder="000.000.000-00" required>

		<label for="cliente_pj_email">E-mail:</label>
		<input type="email" id="cliente_email" name="cliente_email" placeholder="name@nam.com" required>

		<button type="submit" class="btn btn-secondary">Enviar</button>
	</form>
</div>