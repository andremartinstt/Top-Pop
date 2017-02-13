<?php
	require_once("config/connection.php");
	session_start();
?>

<?php

	$user = $_POST['user'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM adm WHERE usuario = '$user' AND senha = '$password'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	if (isset($row)) {
		session_start();
		$_SESSION['nome'] = $row['nome'];
		$_SESSION['usuario'] = $row['usuario'];
		$_SESSION['senha'] = $row['senha'];

		header("Location: newsmanager.php");

	} else {
		$_SESSION['loginErro'] = "Usuário ou Senha Inválidos!";
		header("Location: contato.php");
	}

?>