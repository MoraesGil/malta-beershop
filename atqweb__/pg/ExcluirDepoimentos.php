<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$depoimentos->excluirDepoimentos($id);	
					$db->fechaConexao();
?>
