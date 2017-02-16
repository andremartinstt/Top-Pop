<?php
	require_once("config/connection.php");
?>

<?php

	for ($i=0; $i <= 2; $i++) {
		
		$titulo[$i] = $_POST["titulo-top"][$i];
		$conteudo[$i] = $_POST["conteudo-top"][$i];
		$posicao[$i] = $_POST["posicao-top"][$i];
		$id[$i] = $_POST["id-top"][$i];

		$imagem[$i] = $_FILES['imagem-top']['name'][$i];

		$extensao[$i] = strtolower(substr($_FILES['imagem-top']['name'][$i], -4)); // Pega a extensão do arquivo
		$novo_nome[$i] = md5(time()) . $extensao[$i]; // Define o nome do arquivo
		$diretorio[$i] = "img/top/";

		move_uploaded_file($_FILES['imagem-top']['tmp_name'][$i], $diretorio[$i].$novo_nome[$i]);

	//}

	//for ($i=0; $i <= 2; $i++){
	//	if(isset($_FILES['imagem-top'][$i])){
	//		$extensao = strtolower(substr($_FILES['imagem-top'][$i]['name'], -4)); // Pega a extensão do arquivo
	//		$novo_nome = md5(time()) . $extensao; // Define o nome do arquivo
	//		$diretorio = "img/top/";

	////		move_uploaded_file($_FILES['imagem-top'][$i]['tmp_name'], $diretorio.$novo_nome);

			$result = "INSERT INTO item_noticia (id_item, titulo_item, conteudo_item, img_item, posicao_item, id_noticia) VALUES (null, '$titulo[$i]', '$conteudo[$i]', '$novo_nome[$i]', '$posicao[$i]', '$id[$i]')";

			mysqli_query($connection,$result);
				
	//	}
	}

?>