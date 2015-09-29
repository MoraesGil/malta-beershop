<?php
if(isset($_POST['atualizar'])){
	$db->conecta();
	$Escritorio->AtualizarSobre();
	$db->fechaConexao();

}
@$id = 1;
$db->conecta();
$db->query("SELECT s.id, s.sobre, s.usuario_id, u.nome as usuario FROM sobre s
	INNER JOIN usuarios u ON
	s.usuario_id = u.id
	WHERE s.id='$id' LIMIT 1;")->fetchAll();
	if ( $db->rows >= 1 )
	{ // linhas
		foreach ( $db->data as $Loop )
		{// loop conteudo
			$ln = ( object ) $Loop;
			?>

			<p>Você está em -> <a href="Home">Home </a>-> Sobre Escritório </p>
			<p align="right">Última atualização por: <?php echo $ln->usuario; ?>

				<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
					<h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>

					Descrição Sobre o Escritório:
					<br/>
					<textarea class="form-control" rows="8" required autofocus name="sobre">
						<?php  echo $ln->sobre; ?>
					</textarea>

					<input type="hidden" name="usuarioId" value="<?php echo $usuario->getId(); ?>"><br />
					<input  id="atualizar" name="atualizar" value="Atualizar" type="submit">

				</form>

				<?php
			} // fecha loop conteudo
		}// fecha linhas
		?>
		<?php
		$db->fechaConexao();
		?>
