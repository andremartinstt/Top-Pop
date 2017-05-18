<?php
	if ($id_raking[0] != null) {
		
?>
<a href="#" class="list-group-item">
	<h4 class="list-group-item-heading"><?php echo $titulo_first; ?></h4>
	<p class="list-group-item-text"><?php echo $rest = resume ( $conteudo_first , 30 ); ?></p>
</a>
<?php } ?>
<?php
	if ($id_raking[1] != null) {
		
?>
<a href="#" class="list-group-item">
	<h4 class="list-group-item-heading"><?php echo $titulo_second; ?></h4>
	<p class="list-group-item-text"><?php echo $rest = resume ( $conteudo_second , 30 ); ?></p>
</a>
<?php } ?>
<?php
	if ($id_raking[2] != null) {
		
?>
<a href="#" class="list-group-item">
	<h4 class="list-group-item-heading"><?php echo $titulo_third; ?></h4>
	<p class="list-group-item-text"><?php echo $rest = resume ( $conteudo_third , 30 ); ?></p>
</a>
<?php } ?>