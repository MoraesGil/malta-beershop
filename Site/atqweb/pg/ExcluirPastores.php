<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$pastores->ExcluirPastores($id);	
					$db->fechaConexao();
?>
