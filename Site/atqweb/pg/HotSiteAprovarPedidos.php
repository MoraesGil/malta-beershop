<?php 
					@$id = $_REQUEST['id'];	
					@$idusuario = $_REQUEST['idusuario'];
					$db->conecta();			
					$hotsitepedidos->aprovar($id, $idusuario);	
					$db->fechaConexao();
?>
