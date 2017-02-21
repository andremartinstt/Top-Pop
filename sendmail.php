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

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$msg = $_POST['msg'];

		$to = "teste@hotmail.com";
		$subject = "$assunto";
		$message = "<strong>Nome: </strong>$nome<br/><br/><strong>E-mail: </strong>$email<br/><br/><strong>Assunto: </strong>$assunto<br/><br/><strong>Mensagem: </strong>$msg";
		$header = "MINE-Version: 1.0\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\n";
		$header .= "From: $email\n";
		@mail($to, $subject, $message, $header);
	?>

	<div class="container box-contato">
		<div class="row">
			<section class="col-md-6">

			<?php echo "<br/><br/><h2>Mensagem enviada com sucesso!</h2>"; ?>

			</section>
		</div>
	</div>	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>