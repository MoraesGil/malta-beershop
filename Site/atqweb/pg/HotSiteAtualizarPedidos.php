<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$hotsitepedidos->atualizar();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM hotsite_pedidos WHERE hotsite_pedid='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $linhas )
       		{// loop conteudo
            $ln = ( object ) $linhas;
?>
     
     
      <p>Você está em -> <a href="Home">Home </a>-> <a href="HotSitePedidosCadastrados">HOT SITE - Pedidos Cadastrados </a>-> <a href="HotSiteAtualizarPedidos&id=<?php echo $ln->hotsite_pedid; ?>">Atualizar Dicas</a></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		
		
		Nome:
        <input type="text" class="form-control"  name="hotsite_pednome" required="required" value="<?php echo $ln->hotsite_pednome; ?>">
        Sobrenome:
        <input type="text" class="form-control"  name="hotsite_pedsobrenome" required="required" value="<?php echo $ln->hotsite_pedsobrenome; ?>" >
        E-mail:
        <input type="text" class="form-control"  name="hotsite_pedemail" required="required" value="<?php echo $ln->hotsite_pedemail; ?>">
        Membro:
       	 <select id="hotsite_dicasano" name="hotsite_pedmembro" class="form-control" required="required">
            <option value="" >Selecione a opção</option>
            <option value="S" <?php echo ($ln->hotsite_pedmembro == 'S')?'selected="selected"':null; ?>>Sim</option>   
            <option value="N" <?php echo ($ln->hotsite_pedmembro == 'N')?'selected="selected"':null; ?>>Não</option>    
        </select>
        Foto:
        
       	<?php 
       	if ($ln->hotsite_pedimg == ""){
       		echo '<img src="images/hotsite/pedidos/avatar.png" class="img-responsive" style="width:220px;" border="0" />';
       	} else {
       	echo '<img src="images/hotsite/pedidos/'.$ln->hotsite_pedimg.'" class="img-responsive" style="width:220px;" border="0" />'; 
       		}
       		?>
        <input type="file" class="form-control"  name="hotsite_pedimg" >
        <input type="hidden" class="form-control"  autofocus name="auxhotsite_pedimg" value="<?php echo $ln->hotsite_pedimg; ?>">
        
		 Pedido de Oração: 
        <textarea required class="form-control" name="hotsite_pedoracao" style="height:300px; width:100%;"><?php echo $ln->hotsite_pedoracao; ?>
        </textarea> 
     
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
		
         <input type="hidden" class="form-control" required autofocus name="hotsite_pedid" value="<?php echo $ln->hotsite_pedid; ?>">
          <input type="hidden" class="form-control" required autofocus name="hotsite_pedstatus" value="<?php echo $ln->hotsite_pedstatus; ?>">

        
  
        <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
      
      	<br>
    
      
<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
