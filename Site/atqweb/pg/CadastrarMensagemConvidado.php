<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$mensagem->CadastrarMensagemConvidado();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Mensagem Pastor</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="mensagem_titulo" >
        Convidado:
        <input type="text" class="form-control" required autofocus name="mensagem_convidado" >   
        URL:
        <input type="text" class="form-control" required autofocus name="mensagem_url" >
        Data:
        <input type="date" class="form-control" required name="mensagem_dataoriginal" >
        
      	Imagem:
        
        <input type="file" class="form-control" required autofocus name="mensagem_imagem" >
       
        
         Visualizar:
       	 <select id="mensagem_view" name="mensagem_view" class="form-control" required>
        	
            <option value="s" >Sim</option>
            <option value="n" >Não</option>
            
            
        </select>
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
