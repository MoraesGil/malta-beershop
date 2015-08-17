<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$noticias->visualizarNoticias($id);	
					$db->fechaConexao();
?>
