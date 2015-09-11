<?php
if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

$db->conecta();
$db->query("SELECT * FROM `noticias` WHERE not_id ='".$id."' AND not_view = 'S';")->fetchAll();
   			 if ( $db->rows >= 1 )
				{ // linhas
   			  foreach ( $db->data as $conteudo )
       			{// loop conteudo
           		$cont = ( object ) $conteudo;
			?>
<div class="blog_classic sidebar-right">
	<section class="subpage-banner blog-classic-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-12">
					<h1>NOTÍCIAS</h1>
					<ol class="breadcrumb navegacao">
						<li>Você está em: </li>
						<li><a href="home">Home</a></li>
                        <li><a href="noticias">Notícias</a></li>
						<li class="active"><?php echo $cont->not_titulo ?></li>
					</ol>
				</div>

			</div>
		</div>
	</section>
	<div class="container blog_classic_posts">
		<div class="row">
			<div class="col-sm-8">
				<div class="row post_row">
					<div class="col-sm-12 blog-post-teaser">
               <div class="share-box">
				<h4>Compartilhe este Post!</h4>
				<ul class="social-networks social-networks-dark">


                    <li class="facebook">
						<a href="http://www.facebook.com/share.php?u='url'&title='titulo'" target="_blank">
							Facebook
						</a>
						<div class="popup" style="display: none;">
							<div class="holder">
								<p>Facebook</p>
							</div>
						</div>
					</li>



			</ul>
			</div>
						<img src="_/images/noticias/ref.jpg"  alt="Image Post" class="blog-post-teaser-image img-responsive">
						<h2 class="blog-post-title">
							<a href="#">Chopp Malta no evento da Revista Classe A em Oswaldo Cruz</a>
						</h2>
						<p class="blog-post-teaser-text">
							Em parceria com a distribuidora de chopp de Oswaldo Cruz, Chopp Express, participamos do evento de lançamento da revista Classe A. Quase 300 pessoas passaram pelo local e puderam degustar um chopp gelado conosco. O evento foi um sucesso! Para os responsáveis pelo evento, o gerente comercial Isótico e o distribuidor e parceiro Leonardo fica o nosso agradecimento.
						</p>
                        <p class="blog-post-teaser-text">
							Em parceria com a distribuidora de chopp de Oswaldo Cruz, Chopp Express, participamos do evento de lançamento da revista Classe A. Quase 300 pessoas passaram pelo local e puderam degustar um chopp gelado conosco. O evento foi um sucesso! Para os responsáveis pelo evento, o gerente comercial Isótico e o distribuidor e parceiro Leonardo fica o nosso agradecimento.
						</p>
                        <p class="blog-post-teaser-text">
							Em parceria com a distribuidora de chopp de Oswaldo Cruz, Chopp Express, participamos do evento de lançamento da revista Classe A. Quase 300 pessoas passaram pelo local e puderam degustar um chopp gelado conosco. O evento foi um sucesso! Para os responsáveis pelo evento, o gerente comercial Isótico e o distribuidor e parceiro Leonardo fica o nosso agradecimento.
						</p>
                        <p class="blog-post-teaser-text">
							Em parceria com a distribuidora de chopp de Oswaldo Cruz, Chopp Express, participamos do evento de lançamento da revista Classe A. Quase 300 pessoas passaram pelo local e puderam degustar um chopp gelado conosco. O evento foi um sucesso! Para os responsáveis pelo evento, o gerente comercial Isótico e o distribuidor e parceiro Leonardo fica o nosso agradecimento.
						</p>
                        <p class="blog-post-teaser-text">
							Em parceria com a distribuidora de chopp de Oswaldo Cruz, Chopp Express, participamos do evento de lançamento da revista Classe A. Quase 300 pessoas passaram pelo local e puderam degustar um chopp gelado conosco. O evento foi um sucesso! Para os responsáveis pelo evento, o gerente comercial Isótico e o distribuidor e parceiro Leonardo fica o nosso agradecimento.
						</p>
					</div>
				</div>

<link href="_/js/ImgResize/imgLiquid.js.css" type="text/css" rel="stylesheet" />
<script src="_/js/vendor/jquery-1.11.1.min.js"></script>
<script src="_/js/vendor/jquery-migrate-1.2.1.min.js"></script>
<script src ="_/js/ImgResize/imgLiquid-min.js" type="text/javascript"></script>
                <script type="text/javascript">
                            $(document).ready(function () {
                                $(".imgLiquidFill").imgLiquid({fill:true});
                                $(".imgLiquidNoFill").imgLiquid({fill:false});
                            });
                        </script>
<link rel="stylesheet" href="_/js/venobox/venobox.css" type="text/css" media="screen" />
<script type="text/javascript" src="_/js/venobox/venobox.js"></script>
<script type="text/javascript" src="_/js/venobox/venobox.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.venobox').venobox({
		numeratio: true,
		/*infinigall: true,*/
		border: '5px'
	});
	$('.venoboxvid').venobox({
		bgcolor: '#000'
	});
	$('.venoboxframe').venobox({
		border: '6px'
	});
	$('.venoboxinline').venobox({
		framewidth: '300px',
		frameheight: '250px',
		border: '6px',
		bgcolor: '#f46f00'
	});
	$('.venoboxajax').venobox({
		border: '30px;',
		frameheight: '220px'
	});
	})
</script>
<?php
$db->conecta();
 $db->query( "select * from noticias where not_view = 's' and not_id = '".$id."';" )->fetchAll();
    if ( $db->rows >= 1 )
    {
        $nots = $db->data;
        foreach ( $nots as $Loop )
        {
            $ln = ( object ) $Loop;
            $db->query( "select * from noticias_fotos where not_id = '".$id."' order by nfto_pos asc" )->fetchAll();
            if ( $db->rows >= 1 )
			{
                 echo '<br><hr>';
                echo '<h2>Imagens</h2>';
                echo '<hr><br>';
            $fots = $db->data;
       		 foreach ( $fots as $fotos )
       		 {
           	 $f= ( object ) $fotos;


?>

                    <div class="col-md-3">
                        <div class="imgLiquidFill imgLiquid" style="width:160px; height:160px;">
    					<a  id="firstlink"  class="venobox vbox-item image featured "  title="<?php echo $f->nfto_caption; ?>" data-gall="gall<?php echo $ln->not_id; ?>" href="atqweb/noticias_fotos/fotos/<?php echo $f->nfto_url; ?>">
                    <img alt="" src="atqweb/noticias_fotos/fotos/<?php echo $f->nfto_url; ?>" style="width:100%;" class="">
                    </a>
                        </div>
                    </div>


                                <?php
		} // fecha loop conteudo
			} else { }
	}// fecha linhas
	}
	$db->fechaConexao();
?>


			</div>

			<div class="col-sm-4 sidebar">
				<div class="widget">
	<h3>MALTA CERVEJARIA</h3>
	<p>Há 55 anos a Cervejaria Malta está no mercado para oferecer excelência na fabricação de bebidas, buscando sempre aperfeiçoar a qualidade de seus produtos para satisfazer seus consumidores.</p>
</div>
<div class="widget widget-category">
	<h3>Notícias</h3>
	<ul class="list-unstyled">
		<li class="category-list"><a href="#">Janeiro (0)</a></li>
		<li class="category-list"><a href="#">Fevereiro (0)</a></li>
        <li class="category-list"><a href="#">Março (0)</a></li>
        <li class="category-list"><a href="#">Abril (0)</a></li>
        <li class="category-list"><a href="#">Maio (0)</a></li>
        <li class="category-list"><a href="#">Junho (0)</a></li>
        <li class="category-list"><a href="#">Julho (0)</a></li>
        <li class="category-list"><a href="#">Agosto (0)</a></li>
        <li class="category-list"><a href="#">Setembro (0)</a></li>
        <li class="category-list"><a href="#">Outubro (0)</a></li>
        <li class="category-list"><a href="#">Novembro (0)</a></li>
        <li class="category-list"><a href="#">Dezembro (0)</a></li>
        <li class="category-list"><a href="#">Todas (0)</a></li>
	</ul>
</div>			</div>

		</div>
	</div>
</div>	<!-- Bottom Section -->
<div class="md-overlay"></div>
<div class="jquery-media-detect"></div>	<script type="text/javascript" src="_/js/jrating.jquery.js"></script>
<script type="text/javascript" src="_/js/myscript.js"></script>
<script type="text/javascript" src="_/js/modal_effects.js"></script>
