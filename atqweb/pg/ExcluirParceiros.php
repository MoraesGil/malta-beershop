<?php 
					@$parc_id = $_REQUEST['id'];						
					$db->conecta();			
					$parceiros->excluirParceiros($parc_id, $usuario->getTipo());	
					$db->fechaConexao();
?>
