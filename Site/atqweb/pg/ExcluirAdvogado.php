<?php
					@$adv_id = $_REQUEST['id'];
					$db->conecta();
					$Advogado->ExcluirById($adv_id);
					$db->fechaConexao();
?>
