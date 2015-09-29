<?php
					@$id = $_REQUEST['id'];
					$db->conecta();
					$Noticia->visualizarNoticias($id);	
					$db->fechaConexao();
?>
