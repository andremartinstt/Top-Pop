<?php
	require_once("config/connection.php");
	session_start();
?>

<?php 
	
	$sql = "SELECT id_noticia FROM noticias";
	$result = mysqli_query($connection, $sql);

	while ($row = mysqli_fetch_array($result)) {
		if($row["id_noticia"] + 1 > $row["id_noticia"]){
			$id = $row["id_noticia"];
		}
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Gerenciador de Conteúdo</title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
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
				<form action="topconfig.php" method="POST" enctype="multipart/form-data">

				<?php for ($i=0; $i <= 9; $i++) { 
	
				?>
					<div class="post-ranking">
						<h3>Posição#<?php echo $i + 1; ?></h3>
						<input type="hidden" name="posicao-top[]" value="<?php echo $i; ?>">
						<input type="hidden" name="id-top[]" value="<?php echo $id; ?>">
						<div class="form-group">
							<input type="text" class="form-control form-top" name="titulo-top[]" placeholder="Título do Filme" required="required">
						</div>
						<div class="form-group">
							<textarea class="form-control form-top" rows="3" name="conteudo-top[]" placeholder="Conteúdo do Filme" required="required"></textarea>
						</div>					
						<div class="form-group">
						    <input type="file" name="imagem-top[]" id="inputFile">
						    <p class="help-block">Imagem do Filme</p>
						</div>
					</div>

				<?php } ?>
					<button class="btn btn-primary" type="submit">
						Enviar
					</button>
				</form>
			</section>

			<aside class="col-md-3 col-md-offset-3">
			
			</aside>
		</div>
	</div>

	<?php
		include "includes/footer.php"
	?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<body>