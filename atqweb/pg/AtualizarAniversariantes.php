<?php 
	if(isset($_POST['atualizar'])){
					$db->conecta();
					$aniversariantes->atualizarAniversariantes();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM aniversariantes a
INNER JOIN usuarios u ON
a.usuario_id = u.id
WHERE ani_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Aniversariantes</p>
        <p align="right">Última atualização por: <?php echo $ln->nome; ?>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
		Nome:
        <input type="text" class="form-control"  autofocus name="ani_nome" value="<?php echo $ln->ani_nome; ?>">
       
                Data de Nascimento:
        <select class="form-control" name="ani_dia">
        <option value="">DIA</option>
        <?php for($i=01;$i<=31;$i++) { ?>
        <option value="<?php echo $i; ?>" <?php if ($i == $ln->ani_dia) { echo 'selected="selected"';} ?>><?php echo $i; ?></option>
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
        <option value="<?php echo $i; ?>" <?php if ($i == $ln->ani_mes) { echo 'selected="selected"';} ?>><?php echo $mes; ?></option>
        <?php } ?>
        </select>
         <select class="form-control" name="ani_ano">
        <option value="">ANO</option>
        <?php for($i=1980;$i<=date("Y");$i++) { ?>
        <option value="<?php echo $i; ?>" <?php if ($i == $ln->ani_ano) { echo 'selected="selected"';} ?>><?php echo $i; ?></option>
        <?php } ?>
        </select>

       Imagem:
         <img style="width:150px;" class="img-responsive" src="images/aniversariantes/<?php  echo $ln->ani_imagem; ?>" border=""/>
        <br />
        <br />


         Atualizar Imagem:<strong>Tamanho Máx. Largura: 1024px X Altura 1024px</strong></span>
        <input type="file" class="form-control"  name="ani_imagem" >
      
        
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="ani_id" value="<?php echo $ln->ani_id; ?>"><br />
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
