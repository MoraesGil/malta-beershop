<?php
if(isset($_POST['cadastrar'])){

	$db->conecta();
	$Atuacao->Cadastrar();
	$db->fechaConexao();

}
?>
<p>Você está em -> <a href="Home">Home </a>-> Cadastrar Atuação</p>

<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
	<h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
	Título:<input type="text" class="form-control" required autofocus name="nome" >

	Descrição:
	<textarea class="form-control" name="descricao" rows="8" required autofocus name="descricao" value=>
		
	</textarea>

	<input type="hidden" name="usuarioId" value="<?php echo $usuario->getId(); ?>"><br />

	<input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
</form>

<br>
