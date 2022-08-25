<?php

require_once '../database/db_connect.php';

function destroy()
{
	if(!isset($_REQUEST['cliente_id']) || !($_REQUEST['cliente_id'] >= 0))
		return;
	
	$id = $_REQUEST['cliente_id'];
	$sql = "DELETE FROM cliente_pf WHERE cliente_id = $id";

	try
	{
		(new Db())->connect()->exec($sql);
	}
	catch(PDOException $error)
	{
		echo "Erro na Remoção de um Cliente PF<br><br>";
		echo $error;
		exit;
	}
}

destroy();