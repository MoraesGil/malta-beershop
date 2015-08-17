<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$vitrine->atualizar();	
					$db->fechaConexao();
					
}
@$vit_id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM vitrine v
INNER JOIN usuarios u ON
v.usuario_id = u.id
 WHERE vit_id='$vit_id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $loop )
       		{// loop conteudo
            $ln = ( object ) $loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Vitrine</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?></p>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
	
      	Título:
        <input type="text" class="form-control" required autofocus name="vit_titulo" value="<?php echo $ln->vit_titulo; ?>">
        Descrição:
        <input type="text" class="form-control"  required  name="vit_descricao"  value="<?php echo $ln->vit_descricao; ?>">
        Preço:
        <input type="text" class="form-control" placeholder="Exemplo: 50,00"  autofocus name="vit_preco" value="<?php echo $ln->vit_preco; ?>" >
        Tipo:
        <select name="vit_tipo" class="form-control" required>
        <option value="">Selecione o Campo</option>
        <option value="coleiras" <?php if ($ln->vit_tipo == "coleiras") { echo 'selected="selected"'; } ?>>Coleiras</option>
        <option value="guias" <?php if ($ln->vit_tipo == "guias") { echo 'selected="selected"'; } ?>>Guias</option>
        <option value="keyskulls" <?php if ($ln->vit_tipo == "keyskulls") { echo 'selected="selected"'; } ?>>Keyskulls</option>
        <option value="peitorais" <?php if ($ln->vit_tipo == "peitorais") { echo 'selected="selected"'; } ?>>Peitorais</option>
        <option value="tijela-de-racao" <?php if ($ln->vit_tipo == "tijela-de-racao") { echo 'selected="selected"'; } ?>>Tijela de Ração</option>
        <option value="outros" <?php if ($ln->vit_tipo == "outros") { echo 'selected="selected"'; } ?>>Outros</option>
        </select><br>
    	Imagem:
         <img  src="images/vitrine/<?php  echo $ln->vit_imagem; ?>" class="img-responsive" style="width:150px;" border=""/>
        <br />
        <br />
        Atualizar  Imagem:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control"  name="vit_imagem" >
        
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="vit_id" value="<?php echo $ln->vit_id; ?>"><br />
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
