<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$mensagem->AtualizarMensagemPastor();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM mensagem m
INNER JOIN usuarios u ON
m.usuario_id = u.id
INNER JOIN noticias n ON
m.not_id = n.not_id
WHERE mensagem_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Mensagem Pastor</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="mensagem_titulo" value="<?php echo $ln->mensagem_titulo; ?>">
         Pastor:
        <select name="not_id" class="form-control">
        <option value="">Selecione o pastor</option>
               <?php
        @$id = $_REQUEST['id'];
		
		$db->query("SELECT * FROM noticias WHERE not_tipo = 'P';")->fetchAll();
   			if ( $db->rows >= 1 ) 
		{ // linhas
     		foreach ( $db->data as $pastor )
       		{// loop conteudo
            $p = ( object ) $pastor;
?>
		
		<option value="<?php echo $p->not_id; ?>"  <?php if ($p->not_id == $ln->not_id) { echo ' selected="selected"'; } ?>><?php echo $p->not_titulo; ?></option>
		<?php }} ?> 
</select>
     
        URL:
        <input type="text" class="form-control"  autofocus name="mensagem_url" value="<?php echo $ln->mensagem_url; ?>">
        
        Data:
        <input type="date" class="form-control" required name="mensagem_dataoriginal" value="<?php echo $ln->mensagem_dataoriginal; ?>">
        
      	Imagem:
        <?php echo '<img src="mensagem/'.$ln->mensagem_imagem.'" class="img-responsive" style="width:80px;" border="0" />'; ?>
        <input type="file" class="form-control"  autofocus name="mensagem_imagem" >
        
      	 Visualizar:
       	 <select id="mensagem_view" name="mensagem_view" class="form-control" required>
        	
          <option value="s" <?php if ($ln->mensagem_view == "s") { echo 'selected="selected"'; }  ?>>Sim</option>
         <option value="n" <?php if ($ln->mensagem_view == "n") { echo 'selected="selected"'; }  ?>>Não</option>
            
            
        </select>
       
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="mensagem_id" value="<?php echo $ln->mensagem_id; ?>"><br />
          <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
      
      
<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
