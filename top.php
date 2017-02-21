<?php
	require_once("config/connection.php");
	session_start();
?>

<?php
	$sql = "SELECT * FROM noticias WHERE id_noticia =".$_GET["id_noticia"];
	$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<?php
	if ($row = mysqli_fetch_array($result)) {
		
?>
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

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<h1 class="section-title"><?php echo $row["titulo_noticia"]; ?></h1>

				<?php 
					$sql_top = "SELECT * FROM item_noticia WHERE id_noticia =".$_GET["id_noticia"]." order by posicao_item desc";
					$result_top = mysqli_query($connection, $sql_top);

					while ($row_top = mysqli_fetch_array($result_top)) {	
				?>

				<article class="post-top clearfix">
					<h2 class="post-title">
						<a class="title-top" href="#">Posição#<?php echo $row_top["posicao_item"]; ?></a>
					</h2>
					<a href="#" class="thumb-max pull-left">
						<img class="img-thumbnail top-thumbnail" src="img/top/<?php echo $row_top['img_item']; ?>">
					</a>
					<h2 class="post-title">
						<?php echo $row_top["titulo_item"]; ?>
					</h2>
					<p class="text-justify">
						<?php echo $row_top["conteudo_item"]; ?>
					</p>
				</article>

				<?php } ?>

				<!--<article class="post-top clearfix">
					<h2 class="post-title">
						<a class="title-top" href="#">Top#10</a>
					</h2>
					<a href="#" class="thumb-max pull-left">
						<img class="img-thumbnail top-thumbnail" src="img/img.jpg">
					</a>
					<h2 class="post-title">
						Inicia projetos HTML5 mais rápido com Initializr
					</h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>

				<article class="post-top clearfix">
					<h2 class="post-title">
						<a class="title-top" href="#">Top#10</a>
					</h2>
					<a href="#" class="thumb-max pull-left">
						<img class="img-thumbnail top-thumbnail" src="img/img.jpg">
					</a>
					<h2 class="post-title">
						Inicia projetos HTML5 mais rápido com Initializr
					</h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>-->

				<h1 class="section-title">Comentários</h1>
				
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

	<?php } ?>
</body>
</html>