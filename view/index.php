<?php 

session_start();

if(isset($_SESSION['logado']))
	require_once 'dashboard.php';
else
	require_once 'login.php';