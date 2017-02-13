<?php 

	session_start();
	session_destroy();

	unset(
		$_SESSION['nome'],
		$_SESSION['usuario'],
		$_SESSION['senha']
	);

	header("Location: index.php");

?>