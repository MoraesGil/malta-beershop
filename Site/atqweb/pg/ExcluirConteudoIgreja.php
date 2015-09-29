<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$igreja->excluirConteudoIgreja($id);	
					$db->fechaConexao();
?>
