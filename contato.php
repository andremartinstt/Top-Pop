<?php 
	require_once("config/connection.php");
	session_start();
?>
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
			<section class="col-md-6">
				<form>
					<div class="form-group">
						<label for="nomecontato">Nome Completo</label>
						<input type="text" class="form-control" placeholder="Nome Completo" required="required">
					</div>
					<div class="form-group">
						<label for="emailcontato">E-mail</label>
						<input type="email" class="form-control" placeholder="E-mail" required="required">
					</div>
					<div class="form-group">
						<label for="msgcontato">Mensagem</label>
						<textarea class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</section>

			<aside class="col-md-3 col-md-offset-3">

				<?php
					if (isset($_SESSION['usuario'])) {
						
				?>
					<?php echo "Bem Vindo " ?><a href="newsmanager.php"><?php echo $_SESSION['nome']; ?></a><?php echo "!"; ?>
					<a href="logout.php">Sair</a>
				<?php } else{ ?>
			
				<button data-toggle="modal" data-target="#myModal" role="button" type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-user"></span>
				</button>
				
				
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					  <div class="modal-dialog modal-sm" role="document">
					  	<form action="userauth.php" method="POST">
					  		<div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title">Login</h4>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
									<input type="text" class="form-control" name="user" placeholder="Usuário" required="required">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Senha" required="required">
								</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						        <button type="submit" class="btn btn-primary">Entrar</button>
						        <div>
						        	<p class="text-center text-danger">
							        	<?php
							        		if(isset($_SESSION['loginErro'])){
							        			echo $_SESSION['loginErro'];
							        			unset($_SESSION['loginErro']);
							        		}						        		
							        	?>
							        </p>
						        </div>
						      </div>
						    </div>
					  	</form>
					    
					  </div>
					</div>

					<?php } ?>					

			</aside>


		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<body>