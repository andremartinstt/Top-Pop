<?php 
	require_once("config/connection.php");

	$id_noticia = (int)$_GET["id_noticia"];

	$delete_post = "DELETE FROM noticias WHERE id_noticia=$id_noticia";

	$delete_item = "DELETE FROM item_noticia WHERE id_noticia=$id_noticia";

	$delete_coment = "DELETE FROM comentarios WHERE id_noticia=$id_noticia";

	mysqli_query($connection,$delete_post);

	mysqli_query($connection,$delete_item);

	mysqli_query($connection,$delete_coment);

	if($delete_post){
		echo "<script>alert('Post Excluído com Sucesso!');location.href=\"index.php\";</script>";
	}else{
		echo $connection->error;
	}

	//header("Location: postdeletado.php");
?>