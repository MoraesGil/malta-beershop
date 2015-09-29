<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();		
					$hotsitetestemunho->cadastrar();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> <a href="CadastrarTestemunho">HOT SITE - Cadastrar Testemunho</a></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Nome:
        <input type="text" class="form-control"  name="hotsite_pednome" required="required" >
        Sobrenome:
        <input type="text" class="form-control"  name="hotsite_pedsobrenome" required="required" >
        E-mail:
        <input type="text" class="form-control"  name="hotsite_pedemail" required="required" >
        Membro:
       	 <select id="hotsite_dicasano" name="hotsite_pedmembro" class="form-control" required="required">
            <option value="" >Selecione a opção</option>
            <option value="S">Sim</option>   
            <option value="N">Não</option>    
        </select>
        Foto:
        <input type="file" class="form-control"   name="hotsite_pedimg" >
		 Testemunho: 
        <textarea required class="form-control" name="hotsite_pedoracao" style="height:300px; width:100%;">
        </textarea> 
     
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar" >
        
      </form>
      
  