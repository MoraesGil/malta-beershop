<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$visao->AtualizarVisao();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM visao v
INNER JOIN usuarios u ON
v.usuario_id = u.id
WHERE v.visao='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
         <p>Você está em -> <a href="Home">Home </a>-> Atualizar Versiculo</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?></p>
        

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar o contéudo de empresa.</h3><br>
		Titulo:
        <input type="text" class="form-control"  autofocus name="versiculo_titulo" value="<?php echo  $ln->versiculo_titulo; ?>">
        
       	 Conteudo:
        <textarea  class="form-control" name="versiculo_conteudo" style="height:400px; width:100%;">
        <?php echo  $ln->versiculo_conteudo; ?>
        </textarea>
      
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

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

