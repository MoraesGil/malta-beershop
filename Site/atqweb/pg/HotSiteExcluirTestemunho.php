<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$hotsitetestemunho->excluir($id);	
					$db->fechaConexao();
?>
