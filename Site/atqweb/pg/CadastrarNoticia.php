<?php
if(isset($_POST['cadastrar'])){

	$db->conecta();
	$Noticia->cadastrarNoticias();
	$db->fechaConexao();

}
?>
<p>Você está em -> <a href="Home">Home </a>-> Cadastrar Notícias</p>

<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
	<h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>

	Título:
	<input type="text" class="form-control" required autofocus name="not_titulo" >
	Descrição:
	<textarea required class="form-control" name="not_descricao" placeholder="Texto resumo a ser exibido." style="height:300px; width:100%;">
	</textarea>

	Data de Postagem:
	<input type="date" class="form-control" name="not_date" aria-required="true" id="subject" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
	Visualizar:
	<select name="not_view" class="form-control" >
		<option value="s">Sim</option>
		<option value="n">Não</option>
	</select>
	Conteúdo:
	<textarea required class="form-control" name="not_conteudo" style="height:600px; width:100%;">
	</textarea>
	<input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />



	<input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
</form>

<br>
