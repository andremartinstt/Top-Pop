<?php
	require_once("config/connection.php");
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Cinema e TV</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<section class="jumbotron">
		<div class="container">
			<h1>Cinema e TV</h1>
			<p>Ranking dos Filmes e Seriados</p>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<?php

					$itens_pag = 10; // Itens por página

					$num_total = $connection->query("SELECT * FROM noticias WHERE categoria_noticia = 'cinema'")->num_rows; // Qtd de registros
					$num_paginas = ceil($num_total/$itens_pag);

					if(!isset($_GET['pagina'])){
						$pagina = 1;
					} else{
						$pagina = $_GET['pagina'];
					}

					$pagina_result = ($pagina-1)*$itens_pag; // A partir do registro 0, pega 10 registros, etc

					$sql = "SELECT * FROM noticias WHERE categoria_noticia = 'cinema' order by id_noticia desc LIMIT $pagina_result, $itens_pag";
					$result = $connection->query($sql) or die($connection->error);
				?>

				<h1 class="section-title">Posts Recentes</h1>

				<?php 

					$qnt_coments = array();

					while ($row = mysqli_fetch_array($result)) {		
					
				?>

				<article class="post clearfix">
					<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="thumb pull-left">
						<img class="img-thumbnail" src="img/<?php echo $row['img_noticia']; ?>">
					</a>
					<h2 class="post-title">
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>"><?php echo $row["titulo_noticia"]; ?></a>
					</h2>
					<p><span><?php echo date("d/m/Y", strtotime($row["data_noticia"])); ?></span> por <span><a href="#"><?php echo $row["usuario"]; ?></a></span></p>
					<p class="text-justify">
						<?php echo $row["conteudo_noticia"]; ?>
					</p>
					<div class="conteudo-botoes">

						<?php
							$sql_coments = "SELECT id_noticia FROM comentarios WHERE id_noticia=".$row["id_noticia"];
							$result_coments = mysqli_query($connection, $sql_coments);
							$row_cnt["id_noticia"] = $result_coments->num_rows;

							$qnt_coments[$row["id_noticia"]] = $row_cnt["id_noticia"];
						?>

						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-primary">Comentários <span class="badge"><?php echo $row_cnt["id_noticia"] ?></span></a>
					</div>
				</article>

				<?php } ?>				

				<nav class="nav-pagination">
					<div class="center-block">
						<ul class="pagination">
							<?php
								$dis_ini = "";
								if($pagina == 1){
									$dis_ini = "class=\"disabled\"";
								}

								$dis_ult = "";
								if($pagina == $num_paginas){ // Última página
									$dis_ult = "class=\"disabled\"";
								}
							?>
							<li <?php echo $dis_ini; ?> ><a href="topmovie.php?pagina=<?php echo $pagina-1 ?>">&laquo;<span class="sr-only">Anterior</span></a></li>
							<?php
								for ($i=1; $i <= $num_paginas ; $i++) { 
									$estilo = "";
									if($pagina == $i)
										$estilo = "class=\"active\"";
							?>
							<li <?php echo $estilo; ?> ><a href="topmovie.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php } ?>
							<li <?php echo $dis_ult; ?> ><a href="topmovie.php?pagina=<?php echo $pagina+1; ?>">&raquo;<span class="sr-only">Próximo</span></a></li>
						</ul>
					</div>
				</nav>
				
			</section>

			<aside class="col-md-3">
				<?php
					if (isset($_SESSION['usuario'])) {
						
				?>
					<?php echo "Bem Vindo " ?><a href="newsmanager.php"><?php echo $_SESSION['nome']; ?></a><?php echo "!"; ?>
					<a href="logout.php">Sair</a>
				<?php } ?>
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="index.php" class="list-group-item">Início</a>
					<a href="topmovie.php" class="list-group-item active">Cinema e TV</a>
					<a href="topmusic.php" class="list-group-item">Música</a>
					<a href="topgames.php" class="list-group-item">Games</a>
					<a href="topanime.php" class="list-group-item">Animes</a>
				</div>

				<h4>Os mais comentados</h4>
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
								$titulo_first = $row_ranking["titulo_noticia"];
								$conteudo_first = $row_ranking["conteudo_noticia"];
							}
							if($row_ranking["id_noticia"] == $id_raking[1]){
								$titulo_second = $row_ranking["titulo_noticia"];
								$conteudo_second = $row_ranking["conteudo_noticia"];
							}
							if($row_ranking["id_noticia"] == $id_raking[2]){
								$titulo_third = $row_ranking["titulo_noticia"];
								$conteudo_third = $row_ranking["conteudo_noticia"];
							}
						}


				?>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_first; ?></h4>
					<p class="list-group-item-text"><?php echo $conteudo_first; ?></p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_second; ?></h4>
					<p class="list-group-item-text"><?php echo $conteudo_second; ?></p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_third; ?></h4>
					<p class="list-group-item-text"><?php echo $conteudo_third; ?></p>
				</a>
			</aside>
		</div>
	</section>

	<?php
		include "includes/footer.php"
	?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>