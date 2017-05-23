<?php 
	require_once("config/connection.php");

	$id_comentario = (int)$_GET["id_comentario"];

	$sql_not = "SELECT id_noticia FROM comentarios WHERE id_comentario=$id_comentario";

	$delete_coment = "DELETE FROM comentarios WHERE id_comentario=$id_comentario";

	$result = mysqli_query($connection,$sql_not);
	mysqli_query($connection,$delete_coment);

	$row_not = mysqli_fetch_array($result);
	$id_noticia = $row_not["id_noticia"];


	if($delete_coment){
		echo "<script>alert('Comentário Excluído com Sucesso!');location.href=\"top.php?id_noticia=$id_noticia#coment\";</script>";
	}else{
		echo $connection->error;
	}
?>