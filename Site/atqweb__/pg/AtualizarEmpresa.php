<?php 
	if(isset($_POST['atualizar'])){
	

					$db->conecta();	
					$empresa->atualizarEmpresa();	
					$db->fechaConexao();
					
}


$db->conecta();
$db->query("	SELECT * FROM empresa e
	INNER JOIN usuarios u ON
	e.usuario_id = u.id	
	WHERE emp_id='1';")->fetchAll();

	 foreach ( $db->data as $empresaLoop )
       		{// loop conteudo pesquisa
            $emp = ( object ) $empresaLoop;
?>

        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Empresa</p>
        <p align="right">Última atualização por: <?php echo $emp->nome; ?></p>
        <p><img class="img-responsive" src="images/tutorial-empresa.jpg" /></p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para a atualizar o contéudo de empresa.</h3><br>
		Título menor:
        <input type="text" class="form-control"  autofocus name="emp_t1" value="<?php echo  $emp->emp_t1; ?>">
        Título maior:
        <input type="text" class="form-control"  autofocus name="emp_t2" value="<?php echo  $emp->emp_t2; ?>">
        Título Conteúdo Esquerda:
        <input type="text" class="form-control"  autofocus name="emp_t_esq" value="<?php echo  $emp->emp_t_esq; ?>">
       	 
        <textarea  class="form-control" name="emp_cont_esq" style="height:400px; width:100%;">
        <?php echo  $emp->emp_cont_esq; ?>
        </textarea>
        
         Título Conteúdo Direita:
        <input type="text" class="form-control"  autofocus name="emp_t_dir" value="<?php echo  $emp->emp_t_dir; ?>">
       	 
        <textarea  class="form-control" name="emp_cont_dir" style="height:400px; width:100%;">
        <?php echo  $emp->emp_cont_dir; ?>
        </textarea>
      
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
       <?php 
	   $db->fechaConexao();
	   } ?>
      
      	<br>
