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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<!--<section class="jumbotron">
		<div class="container">
			<h1>Top Pop</h1>
			<p>Ranking dos assuntos da cultura pop</p>
		</div>
	</section>-->

	<section class="container">
		<div class="col-md-12">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<!-- indicadores -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>
				</ol>

				<!-- Contem os Slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://lorempixel.com/1200/400/city/3" class="img-responsive">
						<div class="carousel-caption hidden-xs hidden-sm">
							<h3>Este é o slide #1</h3>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>

					<div class="item">
						<img src="http://lorempixel.com/1200/400/city/1" class="img-responsive">
						<div class="carousel-caption hidden-xs hidden-sm">
							<h3>Este é o slide #2</h3>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>

					<div class="item">
						<img src="http://lorempixel.com/1200/400/city/2" class="img-responsive">
						<div class="carousel-caption hidden-xs hidden-sm">
							<h3>Este é o slide #3</h3>
							<p>Lorem ipsum dolor sit amet</p>
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
	</section>

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<?php
					include "includes/pagination-config.php"; 
				?>

				<h1 class="section-title">Posts Recentes</h1>

				<?php

					$first_comented = 1;
					$second_comented = 0;
					$third_comented = 0;

					$first_id = 0;
					$second_id = 0;
					$third_id = 0;
					
					while ($row = mysqli_fetch_array($result)) {
					
				?>

				<article class="post clearfix">
					<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="thumb pull-left">
						<img class="img-thumbnail" src="img/<?php echo $row['img_noticia']; ?>">
					</a>
					<h2 class="post-title">
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>"><?php echo $row["titulo_noticia"].$row["id_noticia"]; ?></a>
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
						?>

						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-primary">Comentários <span class="badge"><?php echo $row_cnt["id_noticia"] ?></span></a>
						<?php 
							if (isset($_SESSION['usuario'])) {
						?>
						<a onclick="ConfirmaExclusao('<?php echo $row['id_noticia']; ?>')" class="btn btn-danger">Apagar</a>
						<a href="editpost.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-warning">Editar</a>
						<?php } ?>
					</div>
				</article>

				<?php
							//$first_comented = 0;
							//$second_comented = 0;
							//$third_comented = 0;

							$num_total_reg = $connection->query("SELECT id_comentario FROM comentarios")->num_rows;

							//for ($f=0; $f < $num_total_reg ; $f++) { 
								if($row_cnt["id_noticia"] >= $first_comented){
									$first_comented = $row_cnt["id_noticia"];
									$first_id = $row["id_noticia"];
								}
							//}
							//for ($s=0; $s < $num_total_reg ; $s++) { 
								if($row_cnt["id_noticia"] >= $second_comented && $row_cnt["id_noticia"] < $first_comented){
									$second_comented = $row_cnt["id_noticia"];
									$second_id = $row["id_noticia"];
								}
							//}
							//for ($t=0; $t < $num_total_reg ; $t++) { 
								if($row_cnt["id_noticia"] >= $third_comented && $row_cnt["id_noticia"] < $second_comented){
									$third_comented = $row_cnt["id_noticia"];
									$third_id = $row["id_noticia"];
								}
							//}

							//$first_id = 36;

							//$titulo_first = "Sem título";

							//for ($fr=0; $fr < $num_total_reg; $fr++) { 
							if($row["id_noticia"] == $first_id){
								$titulo_first = $row["titulo_noticia"];
								$id_f = $row["id_noticia"];
							}
							if($row["id_noticia"] == $second_id){
								$titulo_second = $row["titulo_noticia"];
								$id_s = $row["id_noticia"];
							}
							if($row["id_noticia"] == $third_id){
								$titulo_third = $row["titulo_noticia"];
								$id_t = $row["id_noticia"];
							}
				?>

				<?php } ?>
				
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
					<a href="#" class="list-group-item active">Início</a>
					<a href="#" class="list-group-item">Cinema e TV</a>
					<a href="#" class="list-group-item">Música</a>
					<a href="#" class="list-group-item">Games</a>
					<a href="#" class="list-group-item">Animes</a>
				</div>

				<h4>Os mais comentados</h4>
				<!--<?php

					$sql_rank_cmt = "SELECT * FROM noticias";
					$result_rank_cmt = mysqli_query($connection, $sql_rank_cmt);

					//$count = 0;

					while ($row_rank = mysqli_fetch_array($result_rank_cmt)){

						//$titulo_first = "Sem título";

						//for ($fr=0; $fr < $num_total_reg; $fr++) { 
							if($row_rank["id_noticia"] == $first_id){
								$titulo_first = $row_rank["titulo_noticia"];
							}
							//$count++;
						//}
					}

				?>-->
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_first." ".$id_f; ?></h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_second." ".$id_s;; ?></h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $titulo_third." ".$id_t;; ?></h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				</a>
				<!--<?php  ?>-->
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