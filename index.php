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
					include "includes/pagination-config.php"; 
				?>

				<h1 class="section-title">Posts Recentes</h1>

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
					<p><span><?php echo $row["data_noticia"]; ?></span> por <span><a href="#"><?php echo $row["usuario"]; ?></a></span></p>
					<p class="text-justify">
						<?php echo $row["conteudo_noticia"]; ?>
					</p>
					<div class="conteudo-botoes">
						<a href="top.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-primary">Comentários <span class="badge">26</span></a>
						<?php 
							if (isset($_SESSION['usuario'])) {
						?>
						<a href="delete-post.php?id_noticia=<?php echo $row['id_noticia']; ?>" class="btn btn-danger">Apagar</a>
						<?php } ?>
					</div>
				</article>

				<?php } ?>

				<?php include "includes/pagination.php"; ?>
				
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