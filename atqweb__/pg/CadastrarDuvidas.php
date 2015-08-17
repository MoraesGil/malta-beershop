<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$duvidas->cadastrarDuvidas();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Dúvidas</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="duv_titulo" >
        
      
       
        Conteúdo:
        <textarea required class="form-control" name="duv_conteudo" style="height:250px; width:100%;">
        </textarea>
        
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
