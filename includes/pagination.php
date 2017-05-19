<?php
	require_once("config/connection.php");
	include "includes/pagination-config.php";
?>

				<nav class="nav-pagination">
					<div class="center-block">
						<ul class="pagination">
							<?php 
								if($num_paginas > 1 && $pagina <= $num_paginas){
									//for($j = $inicio; $j <= $fim; $j++){
							?>
							<?php
								$dis_ini = "";
								if($pagina == 1){
									$dis_ini = "class=\"disabled\"";
								}

								$dis_ult = "";
								if($pagina == $num_paginas){ // Última página
									$dis_ult = "class=\"disabled\"";
								}
							?>
							<li <?php echo $dis_ini; ?> ><a href="index.php?pagina=<?php echo $pagina-1 ?>">&laquo;<span class="sr-only">Anterior</span></a></li>
							<?php
								for($i = $inicio; $i <= $fim; $i++){ 
									$estilo = "";
									if($pagina == $i)
										$estilo = "class=\"active\"";
							?>
							<li <?php echo $estilo; ?> ><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php } ?>
							<li <?php echo $dis_ult; ?> ><a href="index.php?pagina=<?php echo $pagina+1; ?>">&raquo;<span class="sr-only">Próximo</span></a></li>
							<?php
								}
							?>
						</ul>
					</div>
				</nav>