<?php

//regras paginacao
@$pag = $_REQUEST["pag"];//paginacao
@$m = $_REQUEST["mes"];//filtra mes
@$n = $_REQUEST["n"];//filtra noticia

isset($n) ? $n = $n : $n = 0;
isset($m) ? $m = $m : $m = 0;
isset($pag) ? $pag = $pag : $pag = 1;

$qnt_listar = 5;//Listar 15 registros por pagina
$inicio = ($pag*$qnt_listar) - $qnt_listar;

// LOAD DATA
$db->conecta();

//inicio da query GM
$query = "SELECT n.not_id, n.not_date, n.not_titulo, n.not_dia, n.not_mes, n.not_ano, n.not_descricao,
nf.nfto_url, nf.nfto_caption, nf.nfto_info, nf.nfto_pos
from noticias n
left join noticias_fotos nf on n.not_id = nf.not_id
where n.not_view='s' ";

if($m>0){
	$query .= "and n.not_mes = ".$m;
}

$query .= " and nf.nfto_pos='0' Or nf.nfto_pos is null ORDER BY n.not_date DESC LIMIT ".$inicio.",".$qnt_listar.";";

$db->query($query)->fetchAll();//consulta

if ( $db->rows > 0 )
{
	$qtd_reg = $db->rows;
	$conteudo = "";//Limpa Erros para iniciar conteúdo
	
}
else{ $conteudo = "<p class='moderar' align='center'>Não há registros cadastrados</p>";}

$db->fechaConexao();

?>


<style media="screen">
.see-more {
	/* color: #000000; */
	text-transform: uppercase;
	font-weight: 300;
	padding: 5px 30px;
	-webkit-box-shadow: 0 4px 0 #bdc3c7;
	box-shadow: 0 4px 0 #bdc3c7;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	background-clip: padding-box;
	background-color: #e3e9eb;
	position: relative;
	top: 0;
}
.see-more:hover{
	background-color: #ffd32c;
	text-decoration: none;
	color: #ffffff;
	-webkit-box-shadow: 0 4px 0 #e2bf3a;
	box-shadow: 0 4px 0 #e2bf3a;
}

</style>

<div class="blog_classic sidebar-right">
	<section class="subpage-banner blog-classic-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1>NOTÍCIAS</h1>
					<p>MALTA CERVEJARIA</p>
				</div>
				<div class="col-xs-4 hidden-xs">
					<ol class="breadcrumb navegacao">
						<li>Você está em: </li>
						<li><a href="home">Home</a></li>
						<li class="active">Notícias</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container blog_classic_posts">
		<div class="row">
			<div class="col-sm-8">
				<?php
				echo $conteudo;
				if($conteudo=="" )//tem registros entao..
				{
					// linhas pesquisa
					foreach ( $db->data as $lista )
					{// loop conteudo pesquisa

						$obj = ( object ) $lista;//converte o loop pra object e joga na ln
						?>
						<div class="row post_row">
							<div class="col-sm-12 blog-post-teaser">
								<img src="atqweb/noticias_fotos/fotos/<?php echo $obj->nfto_url !="" ? $obj->nfto_url	: "default.jpg"; ?>"  alt="" class="blog-post-teaser-image img-responsive">
								<h2 class="blog-post-title">
									<a href="noticias&n=<?php echo $obj->not_id;  ?>"><?php echo $obj->not_titulo;  ?></a>
								</h2>
								<p class="blog-post-teaser-text">
									<?php echo $obj->not_descricao;  ?> <a class="see-more  "href="noticias&n=<?php echo $obj->not_id;  ?>" title="">Veja Mais</a>
								</p>
							</div>
						</div>
						<!-- ESPAÇO ENTRE NOTICIAS -->

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
								$pags = ceil($qtd_reg/$qnt_listar)//total de paginas arrendodando
								// if($pags>1){
									?>
									<!-- PAGINACAO -->
									<nav>
										<ul class="pagination">
											<li>
												<a href="noticias&pag=1" aria-label="Primeira" title="Primeira">
													<span aria-hidden="true">&laquo;</span>
												</a>
											</li>
											<?php

											//3 links
											for ($i = $pag-2; $i <= $pag+2; $i++){
												if($i>0 && $i<=$pags)
												{
													echo '<li '.($i==$pag  && $pags>1? ' class="active"':'').'><a href="noticias&pag='.$i.'" target="_self" >'.$i.'</a></li>';
												}
											}
											?>
											<li>
												<a href="noticias&pag=<?php echo $pags; ?>" aria-label="Última" title="Última">
													<span aria-hidden="true">&raquo;</span>
												</a>
											</li>
										</ul>
									</nav>
									<?php
								// }
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
						<?php
						for ($i=1; $i <= 12; $i++) {

							?>
							<li class="category-list"><a href="noticias&<?php echo "mes=".$i ?>"><?php echo $funcoes->MesPorNumero($i); ?></a></li>
							<?php }?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>	<!-- Bottom Section -->
