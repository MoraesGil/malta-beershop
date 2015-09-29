<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$ministerio->excluirMinisterio($id);	
					$db->fechaConexao();
?>
