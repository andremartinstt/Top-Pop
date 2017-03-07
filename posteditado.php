<?php 
	require_once("config/connection.php");

	//$id_noticia = (isset($_GET["id_noticia"])) ? (int)$_GET["id_noticia"] : "";
	//$id_noticia = (int)$_GET["id_noticia"];

	$id_noticia = $_POST["id_noticia"];
	$titulo_post = $_POST["titulo-post"];
	$conteudo_post = $_POST["conteudo-post"];

	$edit_post = "UPDATE noticias SET titulo_noticia='$titulo_post', conteudo_noticia='$conteudo_post' WHERE id_noticia=$id_noticia";

	//$edit_post = $connection->query("UPDATE noticias SET titulo_noticia='$titulo_post', conteudo_noticia='$conteudo_post' WHERE id_noticia=$id_noticia");

	mysqli_query($connection, $edit_post);

	if($edit_post){
		header("Location: index.php");
	}else{
		echo $connection->error;
	}
?>