<?php
if(isset($_POST['atualizar'])){
	$db->conecta();
	$Atuacao->Atualizar();
	$db->fechaConexao();

}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT a.id, a.nome, a.descricao, a.usuario_id, u.nome as usuario FROM atuacoes a
INNER JOIN usuarios u ON
a.usuario_id = u.id
WHERE a.id='$id' LIMIT 1;")->fetchAll();
if ( $db->rows >= 1 )
{ // linhas
	foreach ( $db->data as $Loop )
	{// loop conteudo
		$ln = ( object ) $Loop;
		?>

		<p>Você está em -> <a href="Home">Home </a>-><a href="AtuacoesCadastradas">Atuações Cadastradas </a>-> Atualizar Atuação</p>
		<p align="right">Última atualização por: <?php echo $ln->usuario; ?>

			<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
				<h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>

				Nome:<input type="text" class="form-control" required autofocus name="nome" value="<?php  echo $ln->nome; ?>">
				Descrição:
				<textarea class="form-control" name="descricao" rows="8" required autofocus name="descricao" value=>
					<?php  echo $ln->descricao; ?>
				</textarea>


				<input type="hidden" name="usuarioId" value="<?php echo $usuario->getId(); ?>"><br />

				<input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">

				<input type="hidden" name="id" value="<?php echo $ln->id; ?>"><br />
			</form>

			<?php
		} // fecha loop conteudo
	}// fecha linhas
	?>
	<?php
	$db->fechaConexao();
	?>
