<?php
@$id = $_REQUEST['id'];
$db->conecta();
$Noticia->excluirNoticias($id);
$db->fechaConexao();
?>
