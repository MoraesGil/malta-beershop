<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$aniversariantes->excluirAniversariantes($id);	
					$db->fechaConexao();
?>
