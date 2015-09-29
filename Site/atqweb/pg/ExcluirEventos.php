<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$eventos->ExcluirEventos($id);	
					$db->fechaConexao();
?>
