<?php
	require_once("config/connection.php");
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Resultados da Pesquisa</title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<section class="jumbotron">
		<div class="container">
			<h1>Top Pop</h1>
			<p>Ranking dos assuntos da cultura pop</p>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<?php
					$itens_pag = 10; // Itens por página

					if(!isset($_GET['search'])){
						header("Location: index.php");
					} else{
						$search_valor = $_GET['search'];
					}					

					$num_total = $connection->query("SELECT * FROM noticias WHERE titulo_noticia LIKE '%$search_valor%'")->num_rows; // Qtd de registros
					$num_paginas = ceil($num_total/$itens_pag);

					if(!isset($_GET['pagina'])){
						$pagina = 1;
					} else{
						$pagina = $_GET['pagina'];
					}

					$pagina_result = ($pagina-1)*$itens_pag; // A partir do registro 0, pega 10 registros, etc

					$sql = "SELECT * FROM noticias WHERE titulo_noticia LIKE '%$search_valor%' order by id_noticia desc LIMIT $pagina_result, $itens_pag";
					$result = $connection->query($sql) or die($connection->error); 
				?>

				<h1 class="section-title">Resultados da Pesquisa</h1>

				<?php 
					while ($row = mysqli_fetch_array($result)) {		
					
				?>

				<article class="post clearfix">
					<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="thumb pull-left">
						<img class="img-thumbnail" src="img/<?php echo $row['img_noticia']; ?>">
					</a>
					<h2 class="post-title">
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>"><?php echo $row["titulo_noticia"].$row["id_noticia"]; ?></a>
					</h2>
					<p><span><?php echo date("d/m/Y", strtotime($row["data_noticia"])); ?></span> por <span><?php echo $row["usuario"]; ?></span></p>
					<p class="post-conteudo text-justify">
						<?php echo nl2br($row["conteudo_noticia"]); ?>
					</p>
					<div class="conteudo-botoes pull-left">
						<?php
							$sql_coments = "SELECT id_noticia FROM comentarios WHERE id_noticia=".$row["id_noticia"];
							$result_coments = mysqli_query($connection, $sql_coments);
							$row_cnt["id_noticia"] = $result_coments->num_rows;

							$qnt_coments[$row["id_noticia"]] = $row_cnt["id_noticia"];
						?>
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-default">Ler Mais</a>
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>#coment" class="btn btn-default">Comentários <span class="badge"><?php echo $row_cnt["id_noticia"] ?></span></a>
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
							<li <?php echo $dis_ini; ?> ><a href="search.php?pagina=<?php echo $pagina-1 ?>&search=<?php echo $search_valor; ?>">&laquo;<span class="sr-only">Anterior</span></a></li>
							<?php
								for ($i=1; $i <= $num_paginas ; $i++) { 
									$estilo = "";
									if($pagina == $i)
										$estilo = "class=\"active\"";
							?>
							<li <?php echo $estilo; ?> ><a href="search.php?pagina=<?php echo $i; ?>&search=<?php echo $search_valor; ?>"><?php echo $i; ?></a></li>
							<?php } ?>
							<li <?php echo $dis_ult; ?> ><a href="search.php?pagina=<?php echo $pagina+1; ?>&search=<?php echo $search_valor; ?>">&raquo;<span class="sr-only">Próximo</span></a></li>
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