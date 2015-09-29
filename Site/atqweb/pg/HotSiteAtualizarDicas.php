<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$hotsitedicas->atualizar();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM hotsite_dicasjejum WHERE hotsite_dicasid='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $linhas )
       		{// loop conteudo
            $ln = ( object ) $linhas;
?>
     
     
      <p>Você está em -> <a href="Home">Home </a>-> <a href="HotSiteDicasCadastradas">HOT SITE - Dicas Cadastradas </a>-> <a href="HotSiteAtualizarDicas&id=<?php echo $ln->hotsite_dicasid; ?>">Atualizar Dicas</a></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		
		
		Dia:
       	 <select id="hotsite_dicasdia" name="hotsite_dicasdia" class="form-control" required="required">
            <option value="" >Selecione o dia</option>
            <?php for ($i=1;$i<=9; $i++) {?>
            <option value="0<?php echo $i;?>" <?php echo ($ln->hotsite_dicasdia==$i)?'selected="selected"':null; ?> >0<?php echo $i;?></option> 
            <?php } ?>     
            <?php for ($i=10;$i<=31; $i++) {?>
            <option value="<?php echo $i;?>" <?php echo ($ln->hotsite_dicasdia==$i)?'selected="selected"':null; ?> ><?php echo $i;?></option> 
            <?php } ?>       
        </select>
         Mês:
       	 <select id="hotsite_dicasmes" name="hotsite_dicasmes" class="form-control" required="required">
            <option value="" >Selecione o Mês</option>
            <?php for ($i=1;$i<=9; $i++) {?>
            <option value="0<?php echo $i;?>" <?php echo ($ln->hotsite_dicasmes==$i)?'selected="selected"':null; ?>>0<?php echo $i;?></option> 
            <?php } ?> 
            <?php for ($i=10;$i<=12; $i++) {?>
            <option value="<?php echo $i;?>" <?php echo ($ln->hotsite_dicasmes==$i)?'selected="selected"':null; ?>><?php echo $i;?></option> 
            <?php } ?>        
        </select>
        Ano:
       	 <select id="hotsite_dicasano" name="hotsite_dicasano" class="form-control" required="required">
            <option value="" >Selecione o Ano</option>
            <?php for ($i=2015;$i<=2020; $i++) {?>
            <option value="<?php echo $i;?>" <?php echo ($ln->hotsite_dicasano==$i)?'selected="selected"':null; ?> ><?php echo $i;?></option> 
            <?php } ?>        
        </select>
        Titulo:
        <input type="text" class="form-control"  name="hotsite_dicastitulo" required="required" value="<?php echo $ln->hotsite_dicastitulo; ?>">
        Descrição: 
        <textarea required class="form-control" name="hotsite_dicasdescricao" style="height:300px; width:100%;"><?php echo $ln->hotsite_dicasdescricao; ?>
        </textarea>  
        
     
       	Imagem Banner:
       	<?php echo '<img src="images/hotsite/'.$ln->hotsite_dicasimg1.'" class="img-responsive" style="width:220px;" border="0" />'; ?>
        <input type="file" class="form-control"  name="hotsite_dicasimg1" >
        <input type="hidden" class="form-control" required autofocus name="auxhotsite_dicasimg1" value="<?php echo $ln->hotsite_dicasimg1; ?>">
        Imagem Alvo de Oração:
        <?php echo '<img src="images/hotsite/'.$ln->hotsite_dicasimg2.'" class="img-responsive" style="width:220px;" border="0" />'; ?>
        <input type="file" class="form-control" name="hotsite_dicasimg2" >
        <input type="hidden" class="form-control" required autofocus name="auxhotsite_dicasimg2" value="<?php echo $ln->hotsite_dicasimg2; ?>">
		  
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
         <input type="hidden" class="form-control" required autofocus name="hotsite_dicasid" value="<?php echo $ln->hotsite_dicasid; ?>">

        
  
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
