<?php 
	require_once("config/connection.php");

	$id_item = (int)$_GET["id_item"];

	$sql = "SELECT * FROM item_noticia WHERE id_item=$id_item";

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
	<title>Editar Post</title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
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
					<form action="topeditado.php" method="POST">
						<input type="hidden" name="id_noticia" value="<?php echo $row['id_noticia'] ?>">
						<input type="hidden" name="id_item" value="<?php echo (int)$_GET["id_item"]; ?>">
						<div class="form-group">
							<input type="text" class="form-control form-top" name="titulo-item" value="<?php echo $row['titulo_item']; ?>" required="required">
						</div>
						<div class="form-group">
							<!-- 75 por linha (aproximadamente faltando 180) -->
							<textarea class="form-control form-top" rows="3" name="conteudo-item" required="required"  contenteditable=""><?php echo $row["conteudo_item"]; ?></textarea>
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