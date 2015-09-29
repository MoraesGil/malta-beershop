<p>Você está em -> <a href="Home">Home </a>-> <a href="AdvogadosCadastrados">Advogados Cadastrados</a></p>
<form style="float:right;" action="" method="post"><input type="text" name="pesquisar" placeholder="Pesquisar"><input type="submit" name="enviar" value="Buscar" /></form>

<?php
if (isset($_POST['enviar']))
{
	$pesquisar = $_POST['pesquisar'];
	$header = "Advogados Encontrados";//Header do Site
	$conteudo = "<p class='moderar' align='center'>Não há nenhum registro com <strong>".$pesquisar."</strong></p>";
}
else{
	$pesquisar ="";
	$header = "Advogados Cadastrados";//Header do Site
}
?>
<?php
//regras paginacao
@$pag = $_REQUEST["pag"];
isset($pag) ? $pag = $pag : $pag = 1;
$qnt_listar =15;//Listar 15 registros por pagina
$inicio = ($pag*$qnt_listar) - $qnt_listar;


// LOAD DATA
$db->conecta();
//inicio da query
$query = "SELECT a.id, a.nome, a.cargo, u.nome as usuario  FROM advogados a
INNER JOIN usuarios u ON
a.usuario_id = u.id";

if ($usuario->getTipo() == "ADMIN") {
	$query.=" WHERE a.nome LIKE '%".$pesquisar."%' ORDER BY a.nome ASC LIMIT ".$inicio.",".$qnt_listar.";";
} else {
	$query.= " WHERE usuario_id = '".$usuario->getId()." AND ' a.nome LIKE '%".$pesquisar."%'  ORDER BY a.nome ASC LIMIT ".$inicio.",".$qnt_listar.";";//where p usuarios comuns
}

$db->query($query)->fetchAll();//consulta

if ( $db->rows > 0 )
{
	$qtd_reg = $db->rows;
	$conteudo = "";//Limpa Erros para iniciar conteúdo
}
else{ $conteudo = "<p class='moderar' align='center'>Não há registros cadastrados</p>";}
$db->fechaConexao();
?>

<h2 class="sub-header"><?php echo $header?></h2>
<!-- INICIO DA TABLE -->
<?php echo $conteudo!="" ? $conteudo : "" ?>
<div class="table-responsive <?php echo $conteudo=="" ? $conteudo : "hidden" ?>" >
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Cod.</th>
				<th>Nome</th>
				<th>Cargo</th>
				<th>Usuário</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if($conteudo=="")//tem registros entao..
			{ 	// linhas pesquisa
				foreach ( $db->data as $lista )
				{// loop conteudo pesquisa
					$obj = ( object ) $lista;//converte o loop pra object e joga na ln
					?>
					<tr>
						<td><?php echo $obj->id; ?>	</td>
						<td><?php echo $obj->nome; ?>	</td>
						<td><?php echo $obj->cargo; ?></td>
						<td><?php echo $obj->usuario; ?></td>
						<td>
							<a href="AtualizarAdvogado&id=<?php echo $obj->id; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
						</td>
						<td>
							<a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='ExcluirAdvogado&id=<?php echo $obj->id; ?>'" title="Excluir">
								<button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>
							</td>
						</tr>
						<?php
					}
				}
				?>
			</tbody>
		</table>
	</div>
	<?php
	if($conteudo=="")//tem registros entao..
	{
		$pags = ceil($qtd_reg/$qnt_listar)//total de paginas arrendodando
		?>
		<!-- PAGINACAO -->
		<nav>
			<ul class="pagination">
				<li>
					<a href="AdvogadosCadastrados&p=1" aria-label="Primeira" title="Primeira">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<?php
				//3 links
				for ($i = $pag-2; $i <= $pag+2; $i++){
					if($i>0 && $i<=$pags)
					{	echo '<li '.($i==$pag ? ' class="active"':'').'><a href="AdvogadosCadastrados&pag='.$i.'" target="_self" >'.$i.'</a></li>';}
				}
				?>
				<li>
					<a href="AdvogadosCadastrados&pag=<?php echo $pags?>" aria-label="Última" title="Última">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
		<?php
	}
	?>
