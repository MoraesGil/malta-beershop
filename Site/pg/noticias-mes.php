<?php 
$mesNoticia = $_REQUEST['mes'];
$mesTitle = $_REQUEST['mes'];
 switch($mesTitle)
                           {
                           case ($mesTitle == 1): $mesTitle = "Janeiro"; break;
                           case ($mesTitle == 2): $mesTitle = "Fevereiro"; break;
                           case ($mesTitle == 3): $mesTitle = "Março"; break;
                           case ($mesTitle == 4): $mesTitle = "Abril"; break;
                           case ($mesTitle == 5): $mesTitle = "Maio"; break;
                           case ($mesTitle == 6): $mesTitle = "Junho"; break;
                           case ($mesTitle == 7): $mesTitle = "Julho"; break;
                           case ($mesTitle == 8): $mesTitle = "Agosto"; break;
                           case ($mesTitle == 9): $mesTitle = "Setembro"; break;
                           case ($mesTitle == 10): $mesTitle = "Outubro"; break;
                           case ($mesTitle == 11): $mesTitle = "Novembro"; break;
                           case ($mesTitle == 12): $mesTitle = "Dezembro"; break; 
                           }
?>
<div class="blog_classic sidebar-right">
	<section class="subpage-banner blog-classic-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-7 col-sm-12">
					<h1>NOTÍCIAS</h1>
					<p>MALTA CERVEJARIA</p>
				</div>
				<div class="col-xs-5 hidden-xs">
					<ol class="breadcrumb navegacao">
                    	<li>Você está em: </li>
						<li><a href="home">Home</a></li>
						<li><a href="noticias">Notícias</a></li>
                        <li class="active"><?php echo $mesTitle; ?></li>
					</ol>			
				</div>		
			</div>
		</div>	
	</section>	
	<div class="container blog_classic_posts">
		<div class="row">
			<div class="col-sm-8">
            
            
<?php
@$pag = $_REQUEST["pag"];
if(isset($pag)) { $pag = $pag; } else { $pag = 1; } 
$qnt = 10; 
$inicio = ($pag*$qnt) - $qnt;
$db->conecta();	
$db->query( "select * from noticias WHERE not_mes = '$mesNoticia' AND not_view = 's' order by not_date desc, not_time desc LIMIT ".$inicio.",".$qnt." ;" )->fetchAll();
    if ( $db->rows <= 0 ) {
		echo '<h3>Não há notícias nesse mês!</h3>';
	}else
    {
        $nots = $db->data;
        foreach ( $nots as $Loop )
        {
            $ln = ( object ) $Loop;
            $db->query( "select * from noticias_fotos where not_id = $ln->not_id order by nfto_pos asc limit 0,1" )->fetchAll();
            if ( $db->rows >= 1 )
            {
                $f = ( object ) $db->data[0];
               
    					$mesNot = $ln->not_mes;
                           switch($mesNot)
                           {
                           case ($mesNot == 1): $mesNot = "JANEIRO"; break;
                           case ($mesNot == 2): $mesNot = "FEVEREIRO"; break;
                           case ($mesNot == 3): $mesNot = "MARÇO"; break;
                           case ($mesNot == 4): $mesNot = "ABRIL"; break;
                           case ($mesNot == 5): $mesNot = "MAIO"; break;
                           case ($mesNot == 6): $mesNot = "JUNHO"; break;
                           case ($mesNot == 7): $mesNot = "JULHO"; break;
                           case ($mesNot == 8): $mesNot = "AGOSTO"; break;
                           case ($mesNot == 9): $mesNot = "SETEMBRO"; break;
                           case ($mesNot == 10): $mesNot = "OUTUBRO"; break;
                           case ($mesNot == 11): $mesNot = "NOVEMBRO"; break;
                           case ($mesNot == 12): $mesNot = "DEZEMBRO"; break;
                           
                           } 
						   ?>                
            
            
				<div class="row post_row">
					<div class="col-sm-12 blog-post-teaser">											
						<img src="atqweb/noticias_fotos/fotos/<?php echo $f->nfto_url; ?>"  alt="" class="blog-post-teaser-image img-responsive">
						<h2 class="blog-post-title">
							<a href="ver-noticia&id=<?php echo $ln->not_id;  ?>"><?php echo $ln->not_titulo;  ?></a>
						</h2>
						<p class="blog-post-teaser-text">
							<?php echo $ln->not_descricao;  ?> <a class="arrow-more"href="ver-noticia&id=<?php echo $ln->not_id;  ?>" title=""><i class="icon-right-4"></i></a>
						</p>
					</div>
				</div>
<?php
		} // fecha loop conteudo
	}// fecha linhas
	}
	$db->fechaConexao();
?>     
				<div class="row">
					<div class="paging-nav col-xs-12">
						<span class="float-left">    
                      	<?php
							$db->conecta();	
			
							$sql_all = "select * from noticias WHERE not_mes = '$mesNoticia' AND not_view = 's' order by not_date desc, not_time desc";
				   
							$res_all = mysql_query($sql_all);
							$total_registros = mysql_num_rows($res_all);
							$pags = ceil($total_registros/$qnt);
							$max_links = 3;
							echo '	 <span class="paging-inline"><a href="noticias&pag=1" target="_self" title="Primeira" class="btn-arrow"><i class="icon-left-open-big"></i></a></span> ';
							for($i = $pag-$max_links; $i <= $pag-1; $i++) {
							 if($i <=0) { 
							} else {
							echo '<span class="paging-inline"><a href="noticias&pag='.$i.'" target="_self"class="btn-arrow">'.$i.'</a></span> '; 
							} } 
							 echo '<span class="paging-inline"><a href="noticias&pag='.$i.'" target="_self"class="btn-arrow">'.$pag.'</a></span> '; 
							 for($i = $pag+1; $i <= $pag+$max_links; $i++) { 
							 if($i > $pags) { 
							 } 
							 else { echo '<span class="paging-inline"><a href="noticias&pag='.$i.'" target="_self"class="btn-arrow">'.$i.'</a></span> ';  } }
							echo '<span class="paging-inline"><a href="noticias&pag='.$pags.'" target="_self" title="Primeira" class="btn-arrow"><i class="icon-right-open-big"></i></a></span> ';
				
							$db->fechaConexao();
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
						$db->conecta();

						   for ($i=1;$i<=12;$i++) {
                           $mes = $i;
                           switch($mes)
                           {
                           case ($mes == 1): $mes = "Janeiro"; break;
                           case ($mes == 2): $mes = "Fevereiro"; break;
                           case ($mes == 3): $mes = "Março"; break;
                           case ($mes == 4): $mes = "Abril"; break;
                           case ($mes == 5): $mes = "Maio"; break;
                           case ($mes == 6): $mes = "Junho"; break;
                           case ($mes == 7): $mes = "Julho"; break;
                           case ($mes == 8): $mes = "Agosto"; break;
                           case ($mes == 9): $mes = "Setembro"; break;
                           case ($mes == 10): $mes = "Outubro"; break;
                           case ($mes == 11): $mes = "Novembro"; break;
                           case ($mes == 12): $mes = "Dezembro"; break; 
                           }
						   echo '<li class="category-list"><a href="noticias-mes&mes='.$i.'">'.$mes.' ('.$db->query("SELECT * FROM `noticias` WHERE not_mes = '$i' AND not_view = 's'")->rowCount().') </a></li>';
						   }
					$db->fechaConexao();
					
					?>
	</ul>
</div>			</div>
		
		</div>			
	</div>
</div>	<!-- Bottom Section -->