<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$igreja->visualizarConteudoIgreja($id);	
					$db->fechaConexao();
?>
