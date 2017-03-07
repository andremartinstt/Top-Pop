<?php 
	require_once("config/connection.php");

	$id_noticia = (int)$_GET["id_noticia"];

	$sql = "SELECT * FROM noticias WHERE id_noticia=$id_noticia";

	$result = mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<?php
	if ($row = mysqli_fetch_array($result)) {
		
?>
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
		include "includes/header.php";
	?>

	<div class="container box-contato">
		<div class="row">
			<section class="col-md-6">
					<form action="posteditado.php" method="POST">
						<input type="hidden" name="id_noticia" value="<?php echo (int)$_GET["id_noticia"]; ?>">
						<div class="form-group">
							<input type="text" class="form-control" name="titulo-post" value="<?php echo $row['titulo_noticia']; ?>" required="required">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" name="conteudo-post" required="required"><?php echo $row["conteudo_noticia"]; ?></textarea>
						</div>				
	
						<button class="btn btn-primary" type="submit">
							Editar
						</button>
					</form>
			</section>
		</div>
	</div>		

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php } ?>
</body>
</html>
<body>