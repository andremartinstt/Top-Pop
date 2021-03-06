<?php
	require_once("config/connection.php");
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Top Pop</title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="carousel-1" class="carousel slide" data-ride="carousel">
					<!-- indicadores -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-1" data-slide-to="1"></li>
						<li data-target="#carousel-1" data-slide-to="2"></li>
					</ol>

					<!-- Contem os Slides -->
					<!-- 1200 x 400 -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/slide/slide5.jpg" class="img-responsive">
							<div class="carousel-caption hidden-xs hidden-sm">
								<!--<h3>Este é o slide #1</h3>
								<p>Lorem ipsum dolor sit amet</p>-->
							</div>
						</div>

						<div class="item">
							<img src="img/slide/slide7.jpg" class="img-responsive">
							<div class="carousel-caption hidden-xs hidden-sm">
							</div>
						</div>

						<div class="item">
							<img src="img/slide/slide8.jpg" class="img-responsive">
							<div class="carousel-caption hidden-xs hidden-sm">
							</div>
						</div>
					</div>

					<!-- Controles -->
					<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<?php
					include "includes/pagination-config.php"; 
				?>

				<h1 class="section-title">Posts Recentes</h1>

				<?php

					if($num_total == 0){
						echo "<br/><br/><h1 class='sem-noticia'>Infelizmente ainda não existem notícias nessa seção</h1>";
					}

					$qnt_coments = array();
					
					while ($row = mysqli_fetch_array($result)) {
					
				?>

				<article class="post clearfix">
					<div class="box">
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="thumb pull-left">
							<!-- 1600 x 1000 / 1300 x 800-->
							<img class="img-thumbnail" src="img/<?php echo $row['img_noticia']; ?>">
						</a>
						<h3 class="post-title">
							<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>"><?php echo $row["titulo_noticia"]; ?></a>
						</h3>
						<p><span><?php echo date("d/m/Y", strtotime($row["data_noticia"])); ?></span> por <span><?php echo $row["usuario"]; ?></span></p>
						<p class="post-conteudo">
							<!-- <?php echo $row["conteudo_noticia"]; ?> -->
							<?php echo nl2br($row["conteudo_noticia"]); ?>
						</p>
					</div>
					<div class="conteudo-botoes pull-left">

						<?php
							$sql_coments = "SELECT id_noticia FROM comentarios WHERE id_noticia=".$row["id_noticia"];
							$result_coments = mysqli_query($connection, $sql_coments);
							$row_cnt["id_noticia"] = $result_coments->num_rows;

							$qnt_coments[$row["id_noticia"]] = $row_cnt["id_noticia"];
						?>

						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-default">Ler Mais</a>
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>#coment" class="btn btn-default">Comentários <span class="badge"><?php echo $row_cnt["id_noticia"] ?></span></a>
						<?php 
							if (isset($_SESSION['usuario'])) {
						?>
						<a href="editpost.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-warning">Editar</a>
						<a onclick="ConfirmaExclusao('<?php echo $row['id_noticia']; ?>')" class="btn btn-danger">Apagar</a>
						<?php } ?>
					</div>
				</article>

				<?php } ?>
				
			</section>

			<aside class="col-md-3 hidden-xs hidden-sm">
				<?php
					if (isset($_SESSION['usuario'])) {
						
				?>
					<?php echo "Bem Vindo " ?><a href="newsmanager.php"><?php echo $_SESSION['nome']; ?></a><?php echo "!"; ?>
					<a href="logout.php">Sair</a>
				<?php } ?>
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="index.php" class="list-group-item item-act active">Início</a>
					<a href="topmovie.php" class="list-group-item">Cinema e TV</a>
					<a href="topmusic.php" class="list-group-item">Música</a>
					<a href="topgames.php" class="list-group-item">Games</a>
					<a href="topanime.php" class="list-group-item">Animes</a>
				</div>

				<h4>Mais Populares da Seção</h4>
				
				<?php
					include "includes/ranking-config.php";
				?>

				<?php 

					function resume( $var, $limite ){	
						if (strlen($var) > $limite)	{		
							$var = substr($var, 0, $limite);		
							$var = trim($var) . "...";	
						}
						return $var;
					}
				?>

				<?php
					include "includes/ranking.php";
				?>
				
			</aside>
		</div>
		<?php include "includes/pagination.php"; ?>
	</section>

	<?php
		include "includes/footer.php";
	?>

	<script language='JavaScript' type='text/javascript'>
		function ConfirmaExclusao(id) {
		  if( confirm( 'Confirma Exclusão?' ) ) {
		  		// location="delete-post.php?id_noticia=id";
		  		location.href = "delete-post.php?id_noticia=" + id;
		  }
		}
	</script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>