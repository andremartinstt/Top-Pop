<?php
	require_once("config/connection.php");
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
				<h1 class="section-title">Posts Recentes</h1>
				<article class="post clearfix">
					<a href="top.php" class="thumb pull-left">
						<img class="img-thumbnail" src="img/img.jpg">
					</a>
					<h2 class="post-title">
						<a href="top.php">Inicia projetos HTML5 mais rápido com Initializr</a>
					</h2>
					<p><span>26 de Janeiro de 2015</span> por <span><a href="#">Autor Desconhecido</a></span></p>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div class="conteudo-botoes">
						<a href="top.php" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-danger">Comentários <span class="badge">26</span></a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="top.html" class="thumb pull-left">
						<img class="img-thumbnail" src="img/img.jpg">
					</a>
					<h2 class="post-title">
						<a href="top.php">Inicia projetos HTML5 mais rápido com Initializr</a>
					</h2>
					<p><span>26 de Janeiro de 2015</span> por <span><a href="#">Autor Desconhecido</a></span></p>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div class="conteudo-botoes">
						<a href="top.php" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-danger">Comentários <span class="badge">26</span></a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="top.php" class="thumb pull-left">
						<img class="img-thumbnail" src="img/img.jpg">
					</a>
					<h2 class="post-title">
						<a href="top.php">Inicia projetos HTML5 mais rápido com Initializr</a>
					</h2>
					<p><span>26 de Janeiro de 2015</span> por <span><a href="#">Autor Desconhecido</a></span></p>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div class="conteudo-botoes">
						<a href="top.php" class="btn btn-default">Ler Mais</a>
						<a href="#" class="btn btn-danger">Comentários <span class="badge">26</span></a>
					</div>
				</article>

				<nav class="nav-pagination">
					<div class="center-block">
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">&raquo;<span class="sr-only">Próximo</span></a></li>
						</ul>
					</div>
				</nav>
				
			</section>

			<aside class="col-md-3 hidden-xs hidden-sm">
				
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