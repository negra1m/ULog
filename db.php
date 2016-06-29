<?php
header('Content-Type: text/html; charset=utf-8');
	$local = "localhost";
	$user = "admin";
	$pass = "gybr2016";
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysql_connect("$local","$user","$pass") or die("Não foi possível logar ao servidor... Entre em contato com vinicius.negrao@greenyellow.com");
	$db = mysql_select_db("u_log", $connect) or die("Impossível entrar na Base de dados... Entre em contato com vinicius.negrao@greenyellow.com");
	mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');
?>