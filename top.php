<?php
	require_once("config/connection.php");
	session_start();
?>

<?php
	$sql = "SELECT * FROM noticias WHERE id_noticia =".$_GET["id_noticia"];
	$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<?php
	if ($row = mysqli_fetch_array($result)) {
		
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title><?php echo $row["titulo_noticia"]; ?></title>
	<link rel="shortcut icon" href="img\icons\shortcut.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
		include "includes/header.php"
	?>

	<section class="container">
		<div class="row">
			<section class="col-md-9">

				<h1 class="section-title"><?php echo $row["titulo_noticia"]; ?></h1>

				<?php 
					$sql_top = "SELECT * FROM item_noticia WHERE id_noticia =".$_GET["id_noticia"]." order by posicao_item desc";
					$result_top = mysqli_query($connection, $sql_top);

					while ($row_top = mysqli_fetch_array($result_top)) {	
				?>

				<article class="post-top clearfix">
					<h2 class="post-title">
						<a class="title-top" href="#">Posição#</script><?php echo $row_top["posicao_item"]; ?></a>
						<?php 
							if($row_top["posicao_item"] == 1){				
						?>
						<img src="img/icons/medal-gold.png">
						<?php } ?>
						<?php 
							if($row_top["posicao_item"] == 2){				
						?>
						<img src="img/icons/medal-silver.png">
						<?php } ?>
						<?php 
							if($row_top["posicao_item"] == 3){				
						?>
						<img src="img/icons/medal-bronze.png">
						<?php } ?>
					</h2>
					<a href="#" class="thumb-max pull-left">
						<img class="img-thumbnail top-thumbnail" src="img/top/<?php echo $row_top['img_item']; ?>">
					</a>
					<h2 class="post-title">
						<?php echo $row_top["titulo_item"]; ?>
					</h2>
					<p class="post-conteudo text-justify">
						<?php echo nl2br($row_top["conteudo_item"]); ?>
					</p>
				</article>

				<?php } ?>
				
			</section>

			<aside class="col-md-3">
				<?php
					if (isset($_SESSION['usuario'])) {
						
				?>
					<?php echo "Bem Vindo " ?><a href="newsmanager.php"><?php echo $_SESSION['nome']; ?></a><?php echo "!"; ?>
					<a href="logout.php">Sair</a>
				<?php } ?>
			</aside>

		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="form-area area-bottom" id="coment">
					<form action="coments.php" method="POST" role="form">
						<br style="clear:both">
						<h3 style="margin-bottom: 25px;">Escreva um comentário</h3>
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="nome" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="TxtCaracter" type="textarea" name="message" id="message" placeholder="Mensagem" rows="7" maxlength="700"></textarea>
							<h5><span class="caracteres">700</span> Restantes</h5>
						</div>
						<input type="hidden" name="id_noticia" value="<?php echo $_GET['id_noticia']; ?>">
						<button type="submit" id="submit" name="submit" class="btn btn-primay">Comentar</button>
					</form>
				</div>
			</div>
		</div>
		<?php 
			$sql_coment = "SELECT * FROM comentarios WHERE id_noticia=".$_GET["id_noticia"]." ORDER BY id_comentario DESC";
			$result_coment = mysqli_query($connection, $sql_coment);
		?>
		<div class="row">
			<div class="form-area area-bottom">
				<div class="col-md-8">
					<h3>Comentários:</h3>
					<?php
						while($row_coment = mysqli_fetch_array($result_coment)){
					?>
					
						<hr>
						<p><strong><?php echo $row_coment["nome_usuario"]; ?>:</strong></p>
						<p>
							<?php echo nl2br($row_coment["conteudo_comentario"]); ?>
						</p>
						<?php 
							if (isset($_SESSION['usuario'])) {
						?>
							<a onclick="ConfirmaExclusao('<?php echo $row_coment["id_comentario"]; ?>')" class="btn btn-danger">Apagar</a>
						<?php } ?>
				
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
	<?php
		include "includes/footer.php"
	?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		// Script para contar caracteres
		$(document).on("input", "#TxtCaracter", function () {
		    var limite = 700;
		    var caracteresDigitados = $(this).val().length;
		    var caracteresRestantes = limite - caracteresDigitados;

		    $(".caracteres").text(caracteresRestantes);
		});

		// Script para exclusão de comentários
		function ConfirmaExclusao(id) {
			if( confirm( 'Confirma Exclusão?' ) ) {
			  	location.href = "delete-coment.php?id_comentario=" + id;
			}
		}
	</script>

	<?php } ?>
</body>
</html>