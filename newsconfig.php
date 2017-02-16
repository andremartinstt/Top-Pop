<?php
	require_once("config/connection.php");
	session_start();
?>

<?php

	$titulo = $_POST["titulo-post"];
	$conteudo = $_POST["conteudo-post"];
	$categoria = $_POST["categoria-post"];
	// $imagem = $_FILES["imagem-post"]["name"];
	$autor = $_SESSION['nome'];

	if(isset($_FILES['imagem-post'])){
		$extensao = strtolower(substr($_FILES['imagem-post']['name'], -4)); // Pega a extensão do arquivo
		$novo_nome = md5(time()) . $extensao; // Define o nome do arquivo
		$diretorio = "img/";

		move_uploaded_file($_FILES['imagem-post']['tmp_name'], $diretorio.$novo_nome);

		$result_post = "INSERT INTO noticias (id_noticia, titulo_noticia, conteudo_noticia, img_noticia, data_noticia, usuario, categoria_noticia) VALUES (null, '$titulo', '$conteudo', '$novo_nome', NOW(), '$autor', '$categoria')";

		if(!mysqli_query($connection,$result_post)){
			echo "Falha no Envio!";
		}
		else{
			header("Location: topmanager.php");
		}
	}

?>