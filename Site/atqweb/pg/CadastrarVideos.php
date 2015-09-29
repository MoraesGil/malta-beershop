<?php 
	if(isset($_POST['cadastrarVideos'])){
					
					$db->conecta();			
					$videos->cadastrar();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Vídeos</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
     Título:
        <input type="text" class="form-control" required autofocus name="vid_titulo" >
        Descrição:
        <input type="text" class="form-control" required autofocus name="vid_descricao" >
        
        ID do Video: <span style="font-size:12px; color:red;"> http://www.youtube.com/watch?v=R1v0uFms68U :: O ID É: <strong>R1v0uFms68U</strong></span>
        <input type="text" class="form-control" required  name="vid_url" placeholder="Ex: R1v0uFms68U" >
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        <input class="" id="cadastrarVideos" name="cadastrarVideos" value="Cadastrar" type="submit">
      </form>
      
      	<br>
