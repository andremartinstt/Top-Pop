<?php
		arsort($qnt_coments);

		$sql_ranking = "SELECT id_noticia, titulo_noticia, conteudo_noticia FROM noticias";
		$result_ranking = mysqli_query($connection, $sql_ranking);

		$id_raking = array();

		for($i=0; $i<3; $i++){
			$id_raking[$i] = key($qnt_coments);
			next($qnt_coments);
		}

		while ($row_ranking = mysqli_fetch_array($result_ranking)){
			if($row_ranking["id_noticia"] == $id_raking[0]){
				$id_first = $row_ranking["id_noticia"];
				$titulo_first = $row_ranking["titulo_noticia"];
				$conteudo_first = $row_ranking["conteudo_noticia"];
			}
			if($row_ranking["id_noticia"] == $id_raking[1]){
				$id_second = $row_ranking["id_noticia"];
				$titulo_second = $row_ranking["titulo_noticia"];
				$conteudo_second = $row_ranking["conteudo_noticia"];
			}
			if($row_ranking["id_noticia"] == $id_raking[2]){				
				$id_third = $row_ranking["id_noticia"];
				$titulo_third = $row_ranking["titulo_noticia"];
				$conteudo_third = $row_ranking["conteudo_noticia"];
			}
		}

?>