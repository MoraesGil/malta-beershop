<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$duvidas->excluirDuvidas($id);	
					$db->fechaConexao();
?>
