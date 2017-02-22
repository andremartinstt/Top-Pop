<?php require_once("config/connection.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Envio de E-mail</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include "includes/header.php";

	$nome = $_POST["nome"];
	$user = $_POST["usuario"];
	$senha = $_POST["senha"];

	$result = "INSERT INTO adm (id, usuario, senha, nome) VALUES (null, '$user', '$senha', '$nome')";

	if(!mysqli_query($connection,$result)){
			echo "Falha no Cadastro!";
		}
		else{
?>
		<div class="container box-contato">
			<div class="row">
				<section class="col-md-6">
<?php
			    	echo "<br/><br/><h2>Usuário Criado com Sucesso!</h2>";
		}
?>
				</section>
			</div>
		</div>	

<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>