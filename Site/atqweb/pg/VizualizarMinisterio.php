<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$ministerio->visualizarMinisterio($id);	
					$db->fechaConexao();
?>
