<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$aniversariantes->cadastrarAniversariantes();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Aniversariantes</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Nome:
        <input type="text" class="form-control" required autofocus name="ani_nome" >
        Data de Nascimento:
        <select class="form-control" name="ani_dia">
        <option value="">DIA</option>
        <?php for($i=01;$i<=31;$i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
        <select class="form-control" name="ani_mes">
        <option value="">MÊS</option>
        <?php for($i=01;$i<=12;$i++) { ?>
        <?php 
		$mes = $i;
		switch($mes)
{
case ($mes == 1): $mes = "Janeiro"; break;
case ($mes == 2): $mes = "Fevereiro"; break;
case ($mes == 3): $mes = "Março"; break;
case ($mes == 4): $mes = "Abril"; break;
case ($mes == 5): $mes = "Maio"; break;
case ($mes == 6): $mes = "Junho"; break;
case ($mes == 7): $mes = "Julho"; break;
case ($mes == 8): $mes = "Agosto"; break;
case ($mes == 9): $mes = "Setembro"; break;
case ($mes == 10): $mes = "Outubro"; break;
case ($mes == 11): $mes = "Novembro"; break;
case ($mes == 12): $mes = "Dezembro"; break; 

}
		?>
        <option value="<?php echo $i; ?>"><?php echo $mes; ?></option>
        <?php } ?>
        </select>
         <select class="form-control" name="ani_ano">
        <option value="">ANO</option>
        <?php for($i=1980;$i<=date("Y");$i++) { ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
      
        Imagem:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control" required name="ani_imagem" >
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
