<?php  
require_once '../database/db_connect.php';
function showCliente()
{
	if(isset($_REQUEST['pj']))
		$sql = "SELECT * FROM cliente_pj";

	else if(isset($_REQUEST['pf']))
		$sql = "SELECT * FROM cliente_pf";

	try
	{
		$registers = (new Db())->connect()->query($sql);
		$data = $registers->fetchAll(PDO::FETCH_OBJ);
		return $data;
	}
	catch(PDOException $error)
	{
		echo "Erro ao exibir os Clientes";
		echo $error;
		exit;
	}
}

function getCpf($cpf)
{
	$str = '';

	for($i = 0; $i<11;$i++)
	{
		if($i === 3)
			$str.='.';

		else if($i === 6)
			$str.='.';

		else if($i === 9)
			$str.='-';

		$str .= $cpf[$i];
	}
	//exit($str);
	return $str;
}

function getCnpj($cnpj)
{
	$str = '';

	for($i = 0; $i < 14; $i++)
	{
		if($i === 2)
			$str.='.';

		else if($i === 5)
			$str.='.';

		else if($i === 8)
			$str.='/';

		else if($i === 12)
			$str.='-';

		$str .= $cnpj[$i];
	}
	//exit($str);
	return $str;
}