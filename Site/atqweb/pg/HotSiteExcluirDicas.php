<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$hotsitedicas->excluir($id);	
					$db->fechaConexao();
?>
