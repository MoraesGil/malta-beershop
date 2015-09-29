<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$videos->excluir($id);	
					$db->fechaConexao();
?>
