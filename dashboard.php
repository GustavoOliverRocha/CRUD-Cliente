<?php

	if(!isset($_SESSION['logado']))
		exit('Você não tá logado, Acesse o index.php primeiro logue-se');

	require_once 'view/viewHeader.php';
?>

<div id="grid">

	<div class="btn-group" role="group" aria-label="Basic example">
		  <button id="btnClienteFisico" class="btn btn-primary" onclick="showPfTable()">
		  	Pessoa Fisica
		  </button>
		  <button id="btnClienteJuridico" class="btn btn-primary" onclick="showPjTable()">
		  	Pessoa Juridica
		  </button>
	</div>

	<!--Renderizando os Formularios do Cliente PF e do PJ-->
	<?php require_once 'view/formClientePf.php'; ?>
	<?php require_once 'view/formClientePj.php'; ?>

	<!--Div onde conterá as grids de ambos Clientes PF e PJ e serão trocadas dinamicamente-->
	<div id="cliente_table">

	</div>
	
</div>

<!--Renderizando os Modal para edição do Cliente PF e do PJ-->
<?php require_once 'view/modalEditClientePf.php'; ?>
<?php require_once 'view/modalEditClientePj.php'; ?>

<?php
	require_once 'view/viewFooter.php';
?>