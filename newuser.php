<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Gerenciador de Usuário</title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container box-contato">
		<div class="row">
			<section class="col-md-6">
				<form action="userconfig.php" method="POST">
					<div class="form-group">
						<label for="nomeusuario">Nome</label>
						<input type="text" class="form-control" placeholder="Nome" name="nome" required="required">
					</div>
					<div class="form-group">
						<label for="usuario">Usuário</label>
						<input type="text" class="form-control" placeholder="Usuário" name="usuario" required="required">
					</div>
					<div class="form-group">
						<label for="senhausuario">Senha</label>
						<input type="password" class="form-control" name="senha" required="required">
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</section>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>