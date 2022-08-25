<?php

require_once '../database/db_connect.php';

function save()
{
	if(!isset($_POST['cliente_nome'], 
		$_POST['cliente_cpf'], 
		$_POST['cliente_email']))
		return;


	$nome = $_POST['cliente_nome'];
	$cpf = setCpf($_POST['cliente_cpf']);
	$email = $_POST['cliente_email'];

	if(isset($_REQUEST['cliente_id']))
	{
		$id = $_REQUEST['cliente_id'];

		$sql = "UPDATE cliente_pf SET 
					cliente_nome = '$nome',
					cliente_cpf = '$cpf',
					cliente_email = '$email' 
				WHERE cliente_id = $id;";
	}
	else
		$sql = "INSERT INTO cliente_pf VALUES (null,'$nome', '$cpf', '$email');";
	
	try
	{
		(new Db())->connect()->exec($sql);
	}
	catch(PDOException $error)
	{
		echo "Erro na Inserção ou Atualização de um Cliente PF<br><br>";
		echo $error;
		exit;
	}
}

function setCpf($cpf)
{
	//999999999-99
	$data = str_replace('.', '', $cpf);

	//99999999999
	$data2 = str_replace('-', '', $data);

	return $data2;
}

save();