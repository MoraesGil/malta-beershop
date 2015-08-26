<?php 
	if(isset($_POST['atualizarInfoPagina'])){
	

					$db->conecta();	
					$info->atualizarInfoPagina();	
					$db->fechaConexao();
					
}
@$info_id = $_REQUEST['info_id'];
$db->conecta();
$db->query("SELECT * FROM `info` INNER JOIN `usuarios` ON `info`.`info_id_usuario` = `usuarios`.`id` WHERE info_id ='1';")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $configuracao )
       		{// loop conteudo
            $config = ( object ) $configuracao;
?>

        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Informações do Site</p>
        <p align="right">Última atualização por: <?php  echo $config->nome; ?></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar as Informações.</h3><br>
		Título da Página:
        <input type="text" class="form-control"  autofocus name="info_title" value="<?php echo $config->info_title; ?>">
       	 Descrição da Página:
        <textarea  class="form-control" name="info_desc" style="height:200px; width:100%;">
        <?php echo $config->info_desc; ?>
        </textarea>
        
         Palavras Chave:
        <textarea  class="form-control" name="info_key" style="height:200px; width:100%;">
        <?php echo $config->info_key; ?>
        </textarea>
            
        
       
        <input type="hidden" name="info_id_usuario" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="info_id" value="<?php echo $config->info_id; ?>">
        

        
  
        <input class="" id="atualizarInfoPagina" name="atualizarInfoPagina" value="Atualizar" type="submit">
      </form>
<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
