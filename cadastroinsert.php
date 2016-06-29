<?php
session_start();
$prinome = $_POST['prinome'];
$ultnome = $_POST['ultnome'];
$login = $_POST['email'];
//$login1 = $_POST['confirmaemail'];
//echo $login1;
$senha = $_POST['senha'];
//$senha1 = $_POST['confirmasenha'];

$local = "localhost";
	$user = "admin";
	$pass = "gybr2016";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysql_connect("$local","$user","$pass") or die("Não foi possível logar ao servidor... Entre em contato com vinicius.negrao@greenyellow.com.br");
	$db = mysql_select_db("u_log", $connect) or die("Impossível entrar na Base de dados... Entre em contato com vinicius.negrao@greenyellow.com.br");


	if ($login==$login) //$login==$login1
	{
		if ($senha==$senha){ //$senha==$senha1
			$consulta=mysql_query("SELECT * FROM `usuarios` WHERE EMAIL like '$login'")OR DIE(mysql_error());
			if (mysql_num_rows($consulta)>=1)
			{
				echo "<script type=\"text/javascript\">alert(\"E-mail já Cadastrado!\");history.back();</script>";

			}
			else {
					$insere=mysql_query("INSERT INTO `usuarios`(P_NOME, U_NOME, EMAIL, SENHA) VALUES ('".$prinome."','".$ultnome."','".$login."','".$senha."')");
					echo "<script type=\"text/javascript\">alert(\"Cadastrado!\");history.back();</script>";

			}
		}
	}
?>