<?php 
	if(isset($_POST['atualizarConteudo'])){
	

					$db->conecta();	
					$conteudo->atualizarConteudo();	
					$db->fechaConexao();
					
}


	$db->conecta();	
	@$cont_id = $_REQUEST['id'];
	$sql = mysql_query("SELECT * FROM conteudo WHERE cont_id='$cont_id'");
	while ($linha = mysql_fetch_array($sql)) {
	
	
	

		?>
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Conteúdo</p>
        <p align="right">Última atualização por: <?php $sqlAutor = "SELECT * FROM usuarios WHERE id = '".$linha['cont_id_usuario']."'  LIMIT 1;";
				  $resultAutor = mysql_query($sqlAutor);
				  while ($linhaAutor = mysql_fetch_array($resultAutor)) {
				   echo $linhaAutor['nome']; }?></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar o contéudo.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="cont_titulo" value="<?php echo $linha['cont_titulo']; ?>">
      
        Conteúdo:
        <textarea  class="form-control" name="cont_conteudo" style="height:400px; width:100%;">
        <?php echo $linha['cont_conteudo']; ?>
        </textarea>
        <input type="hidden" name="cont_id_usuario" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="cont_id" value="<?php echo $linha['cont_id']; ?>">
        <input type="hidden" name="cont_url" value="<?php echo $linha['cont_url']; ?>">

        
  
        <input class="" id="atualizarConteudo" name="atualizarConteudo" value="Atualizar" type="submit">
      </form>
       <?php 
	   $db->fechaConexao();
	   } ?>
      
      	<br>
