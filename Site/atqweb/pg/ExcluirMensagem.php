<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$mensagem->ExcluirMensagem($id);	
					$db->fechaConexao();
?>
