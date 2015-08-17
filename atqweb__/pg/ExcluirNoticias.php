<?php 
					@$id = $_REQUEST['id'];						
					$db->conecta();			
					$noticias->excluirNoticias($id);	
					$db->fechaConexao();
?>
