<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$parceiros->atualizarParceiros();	
					$db->fechaConexao();
					
}
@$parc_id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM parceiros p
INNER JOIN usuarios u ON
p.usuario_id = u.id
 WHERE parc_id='$parc_id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $parceirosLoop )
       		{// loop conteudo
            $p = ( object ) $parceirosLoop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Parceiros</p>
        <p align="right">Última atualização por: <?php echo $p->nome ?></p>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Nome:
        <input type="text" class="form-control"  autofocus name="parc_titulo" value="<?php echo $p->parc_titulo; ?>">
        Link:
        <input type="text" class="form-control"  autofocus name="parc_link" value="<?php echo $p->parc_link; ?>">
      
       
        
       Imagem:
         <img  src="images/parceiros/<?php  echo $p->parc_imagem; ?>" class="img-responsive" style="width:150px; "border=""/>
        <br />
        <br />


         Atualizar Imagem:<strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control"  name="parc_imagem" >
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="parc_id" value="<?php echo $p->parc_id; ?>"><br />
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
