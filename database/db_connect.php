<?php
class Db
{
	private $db_host = "localhost";
	private $db_name = "db_clientes";
	private $db_user = "root";
	private $db_password = "";
	private $con;

	public function connect()
	{
		try
		{
			$this->con = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_password);

			return $this->con;
		}
		catch(PDOException $error)
		{
			echo $error;
			exit;
		}
		
	}

	public function close()
	{
		$this->con = null;
	}
}