<?php
	require_once("config/connection.php");
 	session_start();

 	$usuario = $_SESSION['usuario'];
	$senha = $_SESSION['senha'];

	$sql = "SELECT nome FROM adm WHERE usuario='$usuario' AND senha='$senha' ";
	$result = mysqli_query($connection, $sql);

 	if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) { # Se a sessão de email e senha estiverem desativadas
 		header("Location: contato.php");
 		exit;
 	} 
 ?>