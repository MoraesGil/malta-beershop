<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$depoimentos->cadastrarDepoimentos();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Depoimentos</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="dep_titulo" >
        Detalhes:
        <input type="text" class="form-control" required autofocus name="dep_detalhes" >
        
      
       
        Conteúdo:
        <textarea required class="form-control" name="dep_conteudo" style="height:250px; width:100%;">
        </textarea>
         Imagem:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 1024px</strong></span>
        <input type="file" class="form-control" required name="dep_imagem" >
        
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
