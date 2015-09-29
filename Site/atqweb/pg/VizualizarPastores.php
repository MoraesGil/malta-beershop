<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$pastores->visualizarPastores($id);	
					$db->fechaConexao();
?>
