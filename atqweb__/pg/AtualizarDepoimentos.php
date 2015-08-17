<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$depoimentos->atualizarDepoimentos();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM depoimentos d
INNER JOIN usuarios u ON
d.usuario_id = u.id
WHERE dep_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Depoimentos</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="dep_titulo" value="<?php echo $ln->dep_titulo; ?>">
        Detalhes:
        <input type="text" class="form-control"  autofocus name="dep_detalhes" value="<?php echo $ln->dep_detalhes; ?>">
        
      
       
        Conteúdo:
        <textarea class="form-control" name="dep_conteudo" style="height:250px; width:100%;">
        <?php echo $ln->dep_conteudo; ?>
        </textarea>
      
       Imagem:
         <img style="width:150px;" class="img-responsive" src="images/depoimentos/<?php  echo $ln->dep_imagem; ?>" border=""/>
        <br />
        <br />


         Atualizar Imagem:<strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control"  name="dep_imagem" >
      
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="dep_id" value="<?php echo $ln->dep_id; ?>"><br />
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
