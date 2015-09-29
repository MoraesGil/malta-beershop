<?php
if(isset($_POST['cadastrar'])){

	$db->conecta();
	$Advogado->Cadastrar();
	$db->fechaConexao();

}
?>
<p>Você está em -> <a href="Home">Home </a>-> Cadastrar Advogado</p>

<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
	<h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
	Nome:<input type="text" class="form-control" required autofocus name="nome" >
	Cargo:<input type="text" class="form-control" required autofocus name="cargo" >
	Descrição:
	<textarea class="form-control" name="descricao" rows="8" required autofocus name="descricao" value=>

	</textarea>

	Foto:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
	<input type="file" class="form-control" name="adv_imagem" >

	<input type="hidden" name="usuarioId" value="<?php echo $usuario->getId(); ?>"><br />

	<input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
</form>

<br>
