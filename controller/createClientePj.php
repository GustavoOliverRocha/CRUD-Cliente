<?php

require_once '../database/db_connect.php';

function save()
{
	if(!isset($_POST['cliente_pj_razao'], 
		$_POST['cliente_pj_cnpj'], 
		$_POST['cliente_pj_email']))
		return;
	
	$razaoSocial = $_POST['cliente_pj_razao'];
	$cnpj = setCnpj($_POST['cliente_pj_cnpj']);
	$email = $_POST['cliente_pj_email'];
	
	if(isset($_REQUEST['cliente_pj_id']))
	{
		$id = $_REQUEST['cliente_pj_id'];

		$sql = "UPDATE cliente_pj SET 
					cliente_pj_razao = '$razaoSocial',
					cliente_pj_cnpj = '$cnpj',
					cliente_pj_email = '$email' 
				WHERE cliente_pj_id = $id;";
	}
	else
		$sql = "INSERT INTO cliente_pj VALUES (null,'$razaoSocial','$cnpj','$email');";
	
	try
	{
			(new Db())->connect()->exec($sql);
	}
	catch(PDOException $error)
	{
		echo "Erro na Inserção ou Atualização de um Cliente PJ";
		echo $error;
		exit;
	}
}

function setCnpj($cnpj)
{
	$data = str_replace('.','',$cnpj);
	$data = str_replace('/','',$data);
	$data = str_replace('-','',$data);

	return $data;

}
save();