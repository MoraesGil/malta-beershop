<?php
if(isset($_POST['atualizar'])){
	$db->conecta();
	$Advogado->Atualizar();
	$db->fechaConexao();

}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT a.id, a.nome, a.cargo, a.descricao, a.img, a.facebook, a.twitter, a.linkedin, a.usuario_id, u.nome as usuario FROM advogados a
INNER JOIN usuarios u ON
a.usuario_id = u.id
WHERE a.id='$id' LIMIT 1;")->fetchAll();
if ( $db->rows >= 1 )
{ // linhas
	foreach ( $db->data as $Loop )
	{// loop conteudo
		$ln = ( object ) $Loop;
		?>

		<p>Você está em -> <a href="Home">Home </a>-><a href="AdvogadosCadastrados">Advogados Cadastrados </a>-> Atualizar Advogado</p>
		<p align="right">Última atualização por: <?php echo $ln->usuario; ?>

			<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
				<h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>

				<img style="width:150px;" class="img-responsive" src="images/Advogados/<?php  echo $ln->img; ?>" />

				Nome:<input type="text" class="form-control" required autofocus name="nome" value="<?php  echo $ln->nome; ?>">
				Cargo:<input type="text" class="form-control" required autofocus name="cargo" value='<?php  echo $ln->cargo; ?>'>
				Descrição:
				<textarea class="form-control" name="descricao" rows="8" required autofocus name="descricao" value=>

				</textarea>


				Foto:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>

				<input type="file" class="form-control" name="adv_imagem" >

				<input type="hidden" name="usuarioId" value="<?php echo $usuario->getId(); ?>"><br />

				<input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">


				<input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
				<input type="hidden" name="id" value="<?php echo $ln->id; ?>"><br />
			</form>

			<?php
		} // fecha loop conteudo
	}// fecha linhas
	?>
	<?php
	$db->fechaConexao();
	?>
