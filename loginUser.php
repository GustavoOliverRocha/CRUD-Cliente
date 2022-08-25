<?php

require_once 'database/db_connect.php';

function login()
{
	$email = $_POST['user_email'];
	$password = $_POST['user_password'];

	$sql = "SELECT user_email, user_password FROM user WHERE user_email = '$email' and user_password = '$password';";

	try
	{
		$con = new Db();
		$register = (new Db())->connect()->query($sql);
		$data = $register->fetchAll(PDO::FETCH_CLASS);

		if(sizeof($data) < 1)
			echo "Usuario e senha incorretos";

		else if(($email === $data[0]->user_email) && ($password === $data[0]->user_password))
		{
			session_start();
			$_SESSION['logado'] = true; 
			header('location: index.php');//echo "esta logado";
		}	


		else
			echo "Usuario e senha incorretos";
		

	}
	catch(PDOException $error)
	{
		echo "Erro ao logar";
		echo $error;
		exit;
	}

}

login();