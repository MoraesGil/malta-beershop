<?php
					@$id = $_REQUEST['id'];
					$db->conecta();
					$Atuacao->ExcluirById($id);
					$db->fechaConexao();
?>
