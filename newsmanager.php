<?php
	require_once("config/connection.php");
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Gerenciador de Notícias</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<div class="container box-contato">
		<div class="row">
			<section class="col-md-6">
				<form action="newsconfig.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="titulo-post" placeholder="Título do Post" required="required">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" name="conteudo-post" placeholder="Conteúdo do Post" required="required"></textarea>
					</div>
					<div class="form-group">
						<select class="form-control" name="categoria-post">
							<option value="cinema">Cinema e TV</option>
							<option value="musica">Música</option>
							<option value="games">Games</option>
							<option value="animes">Animes</option>
						</select>
					</div>					
					<div class="form-group">
					    <input type="file" name="imagem-post" id="inputFile">
					    <p class="help-block">Imagem do Post</p>
					</div>
					<button class="btn btn-primary" type="submit">
						Enviar
					</button>
				</form>
			</section>

			<aside class="col-md-3 col-md-offset-3">
			<?php echo "Bem Vindo ". $_SESSION['nome'] . "!"; ?>
			<a href="logout.php">Sair</a>
			</aside>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<body>