<?php
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$local = "localhost";
	$user = "admin";
	$pass = "gybr2016";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysql_connect("$local","$user","$pass") or die("Não foi possível logar ao servidor... Entre em contato com vinicius.negrao@greenyellow.com.br");
	$db = mysql_select_db("u_log", $connect) or die("Impossível entrar na Base de dados... Entre em contato com vinicius.negrao@greenyellow.com.br");
	$result = mysql_query("SELECT * FROM `usuarios` WHERE `EMAIL` = '$login' AND `SENHA`= '$senha'");
	if(mysql_num_rows($result)>=1)
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:inicial.php');
	}
	else{
	echo "<script type=\"text/javascript\">alert(\"O endereço de e-mail ou a senha são inválidos!\");history.back();</script>";
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	//header('location:index.php'); método não deixa mostrar o JavaScript
	}
?>