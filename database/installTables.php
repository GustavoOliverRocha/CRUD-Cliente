<?php

require_once 'db_connect.php';

function create_tables()
{
	$sql = "DROP TABLE IF EXISTS user;
			DROP TABLE IF EXISTS cliente_pj;
			DROP TABLE IF EXISTS cliente_pf;";

	$sql .= "CREATE TABLE IF NOT EXISTS user(
				user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				user_email VARCHAR(255) NOT NULL,
				user_password VARCHAR(255) NOT NULL
			);";

	$sql.="CREATE TABLE IF NOT EXISTS cliente_pj(
			cliente_pj_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			cliente_pj_razao VARCHAR(100) NOT NULL,
			cliente_pj_cnpj CHAR(14) NOT NULL,
			cliente_pj_email VARCHAR(100) NOT NULL
		);";

	$sql.= "CREATE TABLE IF NOT EXISTS cliente_pf(
			cliente_id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			cliente_nome VARCHAR(100) NOT NULL,
			cliente_cpf CHAR(11) NOT NULL,
			cliente_email VARCHAR(100) NOT NULL
		);";

	$sql .="INSERT INTO user VALUES(null,'admin@admin.com','admin')";

	try{
		(new Db())->connect()->exec($sql);
	}
	catch(PDOException $error)
	{	
		echo 'Erro na criação das Tabelas<br><br>';
		echo $error;
		exit;
	}
}

create_tables();