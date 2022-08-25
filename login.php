<?php
	require_once 'view/viewHeader.php';
?>
	<form method="POST" action="loginUser.php">
		<label for="user_email" class="form-label">
			E-mail:
		</label>
		<input type="email" id="user_email" name="user_email" placeholder="Digite o Email">
		<br>
		<label for="user_password" class="form-label">
			Password:
		</label>
		<input type="password" id="user_password" name="user_password" placeholder="Digite a Senha">
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
<?php
	require_once 'view/viewFooter.php';
?>