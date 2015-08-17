<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$vitrine->excluir($id);	
					$db->fechaConexao();
?>
