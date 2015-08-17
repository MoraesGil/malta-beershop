<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$parceiros->cadastrarParceiros();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Parceiros</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="parc_titulo" >
        Link:
        <input type="text" class="form-control" placeholder="www.site.com.br" required autofocus name="parc_link" >
        
      
       
     
        
          Imagem:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control" required name="parc_imagem" >
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
