<?php

require_once '../database/db_connect.php';

function destroy()
{
	if(!isset($_REQUEST['cliente_pj_id']) || !($_REQUEST['cliente_pj_id'] >= 0))
		return;


	$id = $_REQUEST['cliente_pj_id'];
	$sql = "DELETE FROM cliente_pj WHERE cliente_pj_id = $id";

	try
	{
		(new Db())->connect()->exec($sql);
	}
	catch(PDOException $error)
	{
		echo "Erro na Remoção de um Cliente PJ<br><br>";
		echo $error;
		exit;
	}
}

destroy();