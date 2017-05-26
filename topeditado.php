<?php 
	require_once("config/connection.php");

	//$id_noticia = (isset($_GET["id_noticia"])) ? (int)$_GET["id_noticia"] : "";
	//$id_noticia = (int)$_GET["id_noticia"];

	$id_item = $_POST["id_item"];
	$id_noticia = $_POST["id_noticia"];
	$titulo_item = $_POST["titulo-item"];
	$conteudo_item = $_POST["conteudo-item"];

	$edit_item = "UPDATE item_noticia SET titulo_item='$titulo_item', conteudo_item='$conteudo_item' WHERE id_item=$id_item";

	//$edit_post = $connection->query("UPDATE noticias SET titulo_noticia='$titulo_post', conteudo_noticia='$conteudo_post' WHERE id_noticia=$id_noticia");

	mysqli_query($connection, $edit_item);

	if($edit_item){
		echo "<script>alert('Post Editado com Sucesso!');location.href=\"top.php?id_noticia=$id_noticia\";</script>";
	}else{
		echo $connection->error;
	}


	//header("Location: index.php");
?>