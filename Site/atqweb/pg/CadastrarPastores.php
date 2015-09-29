<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$pastores->cadastrarPastores();
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Pastores</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
        
		
        Nome:
        <input type="text" class="form-control" required  name="not_titulo" >
        Nome para exibir nas mensagens:
        <input type="text" class="form-control" required  name="not_titulo_mensagem" >
        Imagem: 
        <input type="file" class="form-control" required name="not_bg_titulo" />
         URL:
        <input type="text" class="form-control" required  name="not_url" placeholder="Ex: joao-medeiros">
        <input type="hidden" name="not_tipo" value="P">
        Visualizar:
        <select name="not_view" class="form-control" >
        <option value="s">Sim</option>
         <option value="n">Não</option>
        </select>
        Conteúdo:
        <textarea required class="form-control" name="not_conteudo" style="height:600px; width:100%;">
        </textarea>                
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
