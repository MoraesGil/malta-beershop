<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$eventos->CadastrarEventos();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Eventos</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="eventos_titulo" >
        
      	Imagem:
        
        <input type="file" class="form-control" required autofocus name="eventos_imagem" >
       
        Conteúdo:
        <textarea required class="form-control" name="eventos_conteudo" style="height:250px; width:100%;">
        </textarea>
        Data de Evento:
        <input type="date" class="form-control" name="eventos_date" aria-required="true" id="subject" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
         Hora:
        <select name="eventos_hora" class="form-control">
        <?php for ($i=0;$i<=23;$i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
         Minutos:
        <select name="eventos_minuto" class="form-control">
        <option value="00">00</option>
        <option value="15">15</option>
        <option value="30">30</option>
        <option value="45">45</option>
        <option value="59">59</option>
        </select>
         Visualizar:
       	 <select id="eventos_view" name="eventos_view" class="form-control" required>
        	
            <option value="s" >Sim</option>
            <option value="n" >Não</option>
            
            
        </select>
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
