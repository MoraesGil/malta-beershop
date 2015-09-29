<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$igreja->cadastrarConteudoIgreja();
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Contéudo Igreja</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
        
		Título Topo:
        <input type="text" class="form-control" required autofocus name="not_titulo_topo" >
        BG Título
        <input type="file" class="form-control" required name="not_bg_titulo" />
        Título:
        <input type="text" class="form-control" required  name="not_titulo" >
         URL:
        <input type="text" class="form-control" required  name="not_url" >
        <input type="hidden" name="not_tipo" value="I">
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
