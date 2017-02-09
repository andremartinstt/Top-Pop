<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<div class="container box-contato">
		<div class="row">
			<div class="col-md-6">
				<form>
					<div class="form-group">
						<label for="nomecontato">Nome Completo</label>
						<input type="text" class="form-control" placeholder="Nome Completo">
					</div>
					<div class="form-group">
						<label for="emailcontato">E-mail</label>
						<input type="password" class="form-control" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="msgcontato">Mensagem</label>
						<textarea class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<body>