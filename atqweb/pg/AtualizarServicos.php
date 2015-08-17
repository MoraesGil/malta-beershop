<?php 
	if(isset($_POST['atualizar'])){
	

					$db->conecta();	
					$servicos->atualizarServicos();	
					$db->fechaConexao();
					
}

@$id = $_REQUEST['id'];
//@$url = $_REQUEST['url'];
$db->conecta();
$db->query("	SELECT * FROM servicos s
	INNER JOIN usuarios u ON
	s.usuario_id = u.id	
	WHERE serv_id='".$id."';")->fetchAll();

	 foreach ( $db->data as $Loop )
       		{// loop conteudo pesquisa
            $ln = ( object ) $Loop;
?>

        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Serviços</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar o contéudo de empresa.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="serv_titulo" value="<?php echo  $ln->serv_titulo; ?>">
       	Chamada:
        <input type="text" class="form-control"  autofocus name="serv_chamada" value="<?php echo  $ln->serv_chamada; ?>">
        Imagem
        <input type="file" class="form-control"  autofocus name="serv_imagem" />
        <p><img class="img-responsive" style="max-width:150px;"  src="images/servicos/<?php echo  $ln->serv_imagem; ?>" /></p>
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>">
		<input type="hidden" name="serv_id" value="<?php echo $ln->serv_id;; ?>">
        <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
       <?php 
	   $db->fechaConexao();
	   } ?>
      
      	<br>
