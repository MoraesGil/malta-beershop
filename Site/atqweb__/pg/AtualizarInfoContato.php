<?php 
	if(isset($_POST['atualizarInfoContato'])){
	

					$db->conecta();	
					$info->atualizarInfoContato();	
					$db->fechaConexao();
					
}
@$info_id = $_REQUEST['info_id'];
$db->conecta();
$db->query("SELECT * FROM `info` INNER JOIN `usuarios` ON `info`.`info_id_usuario` = `usuarios`.`id` WHERE info_id ='2';")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $configuracao )
       		{// loop conteudo
            $config = ( object ) $configuracao;
?>

        <p>Você está em -> <a href="Home">Home </a>-> Alterar envio de e-mail de contato e reserva</p>
        <p align="right">Última atualização por: <?php  echo $config->nome; ?></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar as informações.</h3><br>

         E-mail 1:
        <input type="text" class="form-control"  autofocus name="info_email_contato1" value="<?php echo $config->info_email_contato1; ?>">
         E-mail 2:
        <input type="text" class="form-control"  autofocus name="info_email_contato2" value="<?php echo $config->info_email_contato2; ?>">
         E-mail 3:
        <input type="text" class="form-control"  autofocus name="info_email_contato3" value="<?php echo $config->info_email_contato3; ?>">
         E-mail 4:
        <input type="text" class="form-control"  autofocus name="info_email_contato4" value="<?php echo $config->info_email_contato4; ?>">
        
        
       
        <input type="hidden" name="info_id_usuario" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="info_id" value="<?php echo $config->info_id; ?>">
        

        
  
        <input class="" id="atualizarInfoContato" name="atualizarInfoContato" value="Atualizar" type="submit">
      </form>
<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
