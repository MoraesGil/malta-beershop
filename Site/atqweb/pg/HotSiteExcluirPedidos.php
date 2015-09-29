<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$hotsitepedidos->excluir($id);	
					$db->fechaConexao();
?>
