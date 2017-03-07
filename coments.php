<?php 
	require_once("config/connection.php");

	$nome = $_POST["name"];
	$email = $_POST["email"];
	$comentario = $_POST["message"];
	$id_noticia = $_POST["id_noticia"];

	$sql = "INSERT INTO comentarios VALUES (null, '$nome', '$email', '$comentario', '$id_noticia')";
	$result = mysqli_query($connection, $sql);

	header("Location: top.php?id_noticia=".$_POST["id_noticia"]);
?>