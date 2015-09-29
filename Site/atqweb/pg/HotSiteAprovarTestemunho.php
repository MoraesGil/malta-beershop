<?php 
					@$id = $_REQUEST['id'];	
					@$idusuario = $_REQUEST['idusuario'];
					$db->conecta();			
					$hotsitetestemunho->aprovar($id, $idusuario);	
					$db->fechaConexao();
?>
