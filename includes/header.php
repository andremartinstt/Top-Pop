<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Top Pop</a>
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Início</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Categorias <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="topmovie.php">Cinema e TV</a></li>
								<li class="divider"></li>
								<li><a href="topmusic.php">Música</a></li>
								<li><a href="topgames.php">Games</a></li>
								<li><a href="topanime.php">Animes</a></li>
							</ul>
						</li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>

					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-danger">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>			

		</nav>
	</header>