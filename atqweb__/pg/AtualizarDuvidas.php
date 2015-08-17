<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$duvidas->atualizarDuvidas();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM duvidas d
INNER JOIN usuarios u ON
d.usuario_id = u.id
WHERE duv_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Dúvidas</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="duv_titulo" value="<?php echo $ln->duv_titulo; ?>">
        
      
       
        Conteúdo:
        <textarea class="form-control" name="duv_conteudo" style="height:250px; width:100%;">
        <?php echo $ln->duv_conteudo; ?>
        </textarea>
      
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="duv_id" value="<?php echo $ln->duv_id; ?>"><br />
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
