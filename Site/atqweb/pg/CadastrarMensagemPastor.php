<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$mensagem->CadastrarMensagemPastor();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Mensagem Pastor</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="mensagem_titulo" >
        Pastor:
        <select name="not_id" class="form-control">
        <option value="">Selecione o pastor</option>
        <?php
        @$id = $_REQUEST['id'];
		$db->conecta();
		$db->query("SELECT * FROM noticias WHERE not_tipo = 'P';")->fetchAll();
   			if ( $db->rows >= 1 ) 
		{ // linhas
     		foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
		?>
		
		<option value="<?php echo $ln->not_id; ?>"><?php echo $ln->not_titulo; ?></option>
		<?php }} $db->fechaConexao();?> 
		</select>
        
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
