<?php

//regras paginacao
@$pag = $_REQUEST["pag"];//paginacao
@$m = $_REQUEST["mes"];//filtra mes
@$n = $_REQUEST["n"];//filtra noticia

isset($n) ? $n = mysql_escape_string($n) : $n = 0;
isset($m) ? $m = mysql_escape_string($m) : $m = NULL;
isset($pag) ? $pag = mysql_escape_string($pag) : $pag = 1;

$qnt_listar = 3;//Listar 15 registros por pagina
$inicio = ($pag*$qnt_listar) - $qnt_listar;
$dados;
// LOAD DATA
$db->conecta();

//Carrega qtd de noticias por mes....
$qtd_mes = $db->query("select n.not_mes as mes,  (SELECT COUNT(not_mes)
FROM noticias where not_mes = n.not_mes and not_view='s') as qtd from noticias n where n.not_view='s'
group by n.not_mes;")->fetchAll();

if($n == 0) //se nao for exibir detalhes de uma noticia
{
	//carrega noticias no periodo informado
	if ($m == NULL) {
		// echo "<h1>aaaaaaaaaaaaa</h1>";
		$query= "select distinct COUNT(not_id) as qtd_reg from noticias" ;
		$temp =$db->query($query)->fetchAll();
		$qtd_reg = $temp[0]["qtd_reg"];

		$query = "SELECT n.not_id, n.not_date, n.not_titulo, n.not_dia, n.not_mes, n.not_ano, n.not_descricao,
		nf.nfto_url
		from noticias n
		left join noticias_fotos nf on n.not_id = nf.not_id
		where n.not_view='s'
		and  IFNULL(nf.nfto_pos,0)=0
		ORDER BY n.not_date DESC LIMIT ".$inicio.",".$qnt_listar.";";
		// echo $query;

		$db->query($query)->fetchAll();//Dados a serem exibidos
	}
	else {
		// echo "<h1>bbbbbbbbbbbbbb</h1>";
		$query= "select distinct COUNT(not_id) as qtd_reg from noticias where NOT_MES =".$m;
		$temp =$db->query($query)->fetchAll();
		$qtd_reg = $temp[0]["qtd_reg"];

		$query = "SELECT n.not_id, n.not_date, n.not_titulo, n.not_dia, n.not_mes, n.not_ano, n.not_descricao,
		nf.nfto_url
		from noticias n
		left join noticias_fotos nf on n.not_id = nf.not_id
		where n.not_view='s' and n.not_mes =".$m."
		and  IFNULL(nf.nfto_pos,0)=0
		ORDER BY n.not_date DESC LIMIT ".$inicio.",".$qnt_listar.";";
		// echo $query;
		$db->query($query)->fetchAll();//Dados a serem exibidos
	}
}
else
{
	//Carrega noticia detalhada
	$query= "select distinct COUNT(not_id) as qtd_reg from noticias where not_id =".$n;
	$temp =$db->query($query)->fetchAll();
	$qtd_reg = $temp[0]["qtd_reg"];

	$query = "SELECT n.not_id, n.not_date, n.not_titulo, n.not_dia, n.not_mes, n.not_ano, n.not_conteudo,
	nf.nfto_url
	from noticias n
	left join noticias_fotos nf on n.not_id = nf.not_id
	where n.not_view='s' and IFNULL(nf.nfto_pos,0)=0 and n.not_id = ".$n;

	$db->query($query)->fetchAll();//Dados a serem exibidos

}
$pags = $qtd_reg >0 ? ceil($qtd_reg/$qnt_listar) : 0;//total de paginas arrendodando

$conteudo = $qtd_reg  > 0 && $pags > 0 && $pag <=$pags?	"" :"<p class='moderar' align='center'>Não há noticias no periodo selecionado</p>";
$dados= $db->data;
$db->fechaConexao();

?>



<header class="text-center">
	<h1 >Noticias</h1>
	<p class="subtitle">malta cervejaria</p>
</header>

<style media="screen">
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
	background-color: #750E07;
	border-color: #750E07;
}
a:hover, a:focus {
    color: #750E07;
    text-decoration: underline;
}
.see-more:hover {
    background-color: #750E07;
    text-decoration: none;
    color: #ffffff;
    box-shadow: 0 4px 0 #E42517;
}
</style>


<div class="container ">
	<div class="row">
		<div class="col-sm-8">

			<?php
			if($n>0){
				echo '<h2 class="pull-left">'.$db->data[0]["not_titulo"].'</h2>';
			}
			else{
				if ($m==null) {
					echo '<h3 class="text-center">noticias</h3>';
				}
				else {
					echo '<h3 class="text-center">NOTICIAS DE '.$funcoes->MesPorNumero($m).'</h3>';
				}
			}

			echo $conteudo;
			if($conteudo=="" )//tem registros entao..
			{
				// linhas pesquisa
				foreach ( $dados as $lista )
				{// loop conteudo pesquisa

					$obj = ( object ) $lista;//converte o loop pra object e joga na ln
					?>
					<div class="row post_row">
						<div class="col-sm-12 blog-post-teaser">
							<div class="row">

								<div class="container">
									<img class="blog-post-teaser-image img-responsive center-block" src="atqweb/noticias_fotos/fotos/<?php echo $obj->nfto_url !="" ? $obj->nfto_url	: "default.jpg"; ?>"  alt="" class="blog-post-teaser-image img-responsive center-block">

									<?php
									if($n>0){
										echo '<p class="pull-right">'.$obj->not_dia."/".$funcoes->MesAbreviado($obj->not_mes)."/".$obj->not_ano.'</p>';
										echo '<p>'.$obj->not_conteudo.'</p>';

									}
									else {
										echo '<p class="pull-right">'.$obj->not_dia."/".$funcoes->MesAbreviado($obj->not_mes)."/".$obj->not_ano.'</p>';
										echo '<p><a href="noticias&n='.$obj->not_id.'"><h2>'.$obj->not_titulo.'</h2></a></p>';

										echo '<p>'.$obj->not_descricao.'</p>';
										echo '<p><a class="see-more pull-right" href="noticias&n='.$obj->not_id.'">Veja Mais</a></p>';
									}
									?>
								</div>
							</div>


						</div>
					</div>
					<hr>
					<?php
				}
			}
			?>
			<div class="row">
				<div class="paging-nav col-xs-12">
					<span class="float-left">

						<?php
						if($conteudo=="" && $n==0 )//tem registros entao..
						{
							?>
							<!-- PAGINACAO -->
							<nav>
								<ul class="pagination">
									<li>
										<a href="noticias&pag=1&mes=<?php echo $m?>" aria-label="Primeira" title="Primeira">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<?php
									//3 links
									for ($i = $pag-2; $i <= $pag+2; $i++){
										if($i>0 && $i<=$pags)
										{
											echo '<li '.($i==$pag ? ' class="active"':'').'><a href="noticias&pag='.$i.'&mes='.$m.'" target="_self" >'.$i.'</a></li>';
										}
									}
									?>
									<li>
										<a href="noticias&pag=<?php echo $pags; ?>&mes=<?php echo $m?>" aria-label="Última" title="Última">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
							<?php
						}
						?>
					</span>
				</div>
			</div>
		</div>

		<div class="col-sm-4 sidebar">
			<div class="widget">
				<h3>MALTA CERVEJARIA</h3>
				<p>Há 55 anos a Cervejaria Malta está no mercado para oferecer excelência na fabricação de bebidas, buscando sempre aperfeiçoar a qualidade de seus produtos para satisfazer seus consumidores.</p>
			</div>
			<div class="widget widget-category">
				<h3>Notícias</h3>
				<ul class="list-unstyled">
					<?php	for ($i=1; $i <= 12; $i++) {?>
						<li class="category-list">
							<a href="noticias&<?php echo "mes=".$i ?>">
								<?php
								$mes = 0;
								foreach ($qtd_mes as $key => $value) {
									if ($value["mes"] == $i) {
										$mes = $value["qtd"];
									}
								}
								echo $funcoes->MesPorNumero($i)."	(".$mes.")";
								?>
							</a>
						</li>

						<?php
					}?>
				</ul>
			</div>
		</div>

	</div>
</div>
