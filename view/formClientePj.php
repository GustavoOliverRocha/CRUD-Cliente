<div id="formPj" hidden>
	<h1>Dashboard Cliente Pessoa Jurídica</h1>

	<form method="POST" action="createClientePj.php" name="clienteJuridicoForm">
		<label for="cliente_pj_razao">Razão Social:</label>
		<input type="text" id="cliente_pj_razao" name="cliente_pj_razao" placeholder="" required>

		<label for="cliente_pj_cnpj">CNPJ:</label>
		<input type="text" id="cliente_pj_cnpj" class="cnpj" name="cliente_pj_cnpj" maxlength="14" placeholder="00.000.000/0000-00" required>

		<label for="cliente_pj_email">E-mail:</label>
		<input type="email" id="cliente_pj_email" name="cliente_pj_email" placeholder="nome@email.com" required>

		<button type="submit" class="btn btn-secondary">Enviar</button>
	</form>
</div>