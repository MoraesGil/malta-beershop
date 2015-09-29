<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$eventos->atualizarEventos();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM eventos e
INNER JOIN usuarios u ON
e.usuario_id = u.id
WHERE eventos_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Eventos</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Título:
        <input type="text" class="form-control"  autofocus name="eventos_titulo" value="<?php echo $ln->eventos_titulo; ?>">
        
      	Imagem:
        <?php echo '<img src="eventos/'.$ln->eventos_imagem.'" class="img-responsive" style="width:80px;" border="0" />'; ?>
        <input type="file" class="form-control"  autofocus name="eventos_imagem" >
       
        Conteúdo:
        <textarea class="form-control" name="eventos_conteudo" style="height:250px; width:100%;">
        <?php echo $ln->eventos_conteudo; ?>
        </textarea>
        Data de Evento:
        <input type="date" class="form-control" name="eventos_date" aria-required="true" id="subject" class="form-control" value="<?php echo $ln->eventos_date; ?>" />
         Hora:
        <select name="eventos_hora" class="form-control">
        <?php for ($i=0;$i<=23;$i++) { ?>
        <option value="<?php echo $i; ?>"<?php if ($ln->eventos_hora == $i) { echo 'selected="selected"'; }  ?>><?php echo $i; ?></option>
        <?php } ?> 
        </select>
         Minutos:
        <select name="eventos_minuto" class="form-control">
        <option value="00" <?php if ($ln->eventos_minuto == 0) { echo 'selected="selected"'; } ?>> 00</option>
        <option value="15" <?php if ($ln->eventos_minuto == 15) { echo 'selected="selected"'; } ?>>15</option>
        <option value="30" <?php if ($ln->eventos_minuto == 30) { echo 'selected="selected"'; } ?>>30</option>
        <option value="45" <?php if ($ln->eventos_minuto == 34) { echo 'selected="selected"'; } ?>>45</option>
        <option value="59" <?php if ($ln->eventos_minuto == 59) { echo 'selected="selected"'; } ?>>59</option>
        </select>
      	 Visualizar:
       	 <select id="eventos_view" name="eventos_view" class="form-control" required>
        	
          <option value="s" <?php if ($ln->eventos_view == "s") { echo 'selected="selected"'; }  ?>>Sim</option>
         <option value="n" <?php if ($ln->eventos_view == "n") { echo 'selected="selected"'; }  ?>>Não</option>
            
            
        </select>
       
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="eventos_id" value="<?php echo $ln->eventos_id; ?>"><br />
          <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
      
      
<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
