<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$videos->atualizar();	
					$db->fechaConexao();
					
}
@$vid_id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM videos v
INNER JOIN usuarios u ON
v.usuario_id = u.id
 WHERE vid_id='$vid_id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Vídeos</p>
        <p align="right">Última atualização por: <?php echo $ln->nome ?></p>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
         Título:
        <input type="text" class="form-control" required autofocus name="vid_titulo" value="<?php echo $ln->vid_titulo; ?>" >
        Descrição:
        <input type="text" class="form-control" required autofocus name="vid_descricao" value="<?php echo $ln->vid_descricao; ?>" >
        
        ID do Video: <span style="font-size:12px; color:red;"> http://www.youtube.com/watch?v=R1v0uFms68U :: O ID É: <strong>R1v0uFms68U</strong></span>
        <input type="text" class="form-control" required  name="vid_url" placeholder="Ex: R1v0uFms68U"  value="<?php echo $ln->vid_url; ?>" >
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        
		
        <input type="hidden" name="vid_id" value="<?php echo $ln->vid_id; ?>"><br />
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
