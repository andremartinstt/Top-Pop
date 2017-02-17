<?php
	require_once("config/connection.php");

	$itens_pag = 10; // Itens por página

	$num_total = $connection->query("SELECT * FROM noticias")->num_rows; // Qtd de registros
	$num_paginas = ceil($num_total/$itens_pag);

	if(!isset($_GET['pagina'])){
		$pagina = 1;
	} else{
		$pagina = $_GET['pagina'];
	}

	$pagina_result = ($pagina-1)*$itens_pag;

	$sql = "SELECT * FROM noticias order by id_noticia desc LIMIT $pagina_result, $itens_pag";
	$result = $connection->query($sql) or die($connection->error);
?>