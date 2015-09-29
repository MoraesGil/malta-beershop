<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();		
					$hotsitedicas->cadastrar();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> <a href="CadastrarDicas">HOT SITE - Cadastrar Dicas</a></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		
		 Dia:
       	 <select id="hotsite_dicasdia" name="hotsite_dicasdia" class="form-control" required="required">
            <option value="" >Selecione o dia</option>
            <?php for ($i = 1; $i <= 9; $i++) {?>
            <option value="0<?php echo $i;?>" >0<?php echo $i;?></option> 
            <?php } ?>  
            <?php for ($i = 10; $i <= 31; $i++) {?>
            <option value="<?php echo $i;?>" ><?php echo $i;?></option> 
            <?php } ?>       
        </select>
         Mês:
       	 <select id="hotsite_dicasmes" name="hotsite_dicasmes" class="form-control" required="required">
            <option value="" >Selecione o Mês</option>
            <?php for ($i=1;$i<=9; $i++) {?>
            <option value="0<?php echo $i;?>">0<?php echo $i;?></option> 
            <?php } ?>
            <?php for ($i=10;$i<=12; $i++) {?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option> 
            <?php } ?>         
        </select>
        Ano:
       	 <select id="hotsite_dicasano" name="hotsite_dicasano" class="form-control" required="required">
            <option value="" >Selecione o Ano</option>
            <?php for ($i=2015;$i<=2020; $i++) {?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option> 
            <?php } ?>        
        </select>
        Titulo:
        <input type="text" class="form-control"  name="hotsite_dicastitulo" required="required" >
        Descrição: 
        <textarea required class="form-control" name="hotsite_dicasdescricao" style="height:600px; width:100%;">
        </textarea>  

       	Imagem Banner:
        <input type="file" class="form-control" required="required"  name="hotsite_dicasimg1" >
        Imagem Alvo de Oração:
        <input type="file" class="form-control" required="required"  name="hotsite_dicasimg2" >
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar" >
        
      </form>
      
  