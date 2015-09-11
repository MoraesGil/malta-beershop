
<section class="subpage-banner blog-classic-banner">
	<section class="subpage-banner blog-classic-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1>Marcas</h1>
					<p>MALTA CERVEJARIA</p>
				</div>
				<div class="col-xs-4 hidden-xs">
					<ol class="breadcrumb navegacao">
						<li>Você está em: </li>
						<li><a href="home">Home</a></li>
						<li class="active">Marcas</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

<style media="screen">
.see-more {
	/* color: #000000; */
	text-transform: uppercase;
	font-weight: 300;
	padding: 15px 30px;
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

h2{
	box-sizing: border-box;
	color: white;
	font-family: helvetica;
	font-size: 2em;
	margin-bottom: 40px;
	margin-top: 40px;
	text-align: left;
	text-transform: uppercase;
	border-bottom:1px solid white;
}

.marca{
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	width: 100%;
	display: block;
	padding-top: 20px;
	height: auto;
}

.mesa{
	height:40px;
	background-repeat: repeat-x;
}

.beer{
	width: auto;
	height: 500px;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

</style>

<?php
$beers = array(
"MALTA PILSEN",
"MALTA PILSEN SEM ÁLCOOL",
"MALTA MALZBIER",
"MALTA MALZBIER SEM ÁLCOOL",
"GOLDEN BEER",
"MALTA CHOPP",
"CRISTALINA",
"TRIPICOLA",
"CLUB SODA",
"NATPOWER ENERGY DRINK"
);

$link= array(
	"pilsen",
	"pilsen-sem-alcool",
	"malzibier",
	"malzibier-sem-alcool",
	"golden-beer",
	"malta-chopp",
	"cristalina",
	"tripicola",
	"club-soda",
	"natpower"
);


for ($i=1; $i <= 10; $i++) {

?>
<div class="marca " style="background-image: url(_/images/marcas/<?php echo $i ?>/background.jpg">
	<div class="row">
		<div class="
		col-xs-12
		col-sm-4 col-sm-offset-3
		col-md-3 col-md-offset-3
		col-lg-3 col-lg-offset-3">
		<img class="beer" src="_/images/marcas/<?php echo $i ?>/beer.png" alt="" />
	</div>
	<!-- Coluna Dados -->
	<div class="
	col-xs-6 col-xs-offset-3
	col-sm-4 col-sm-offset-1
	col-md-3
	col-xs-12
	">
	<h2><?php echo $beers[$i-1] ?></h2>
	<a href="/<?php echo $link[$i-1]?>" class="see-more">Veja Mais</a>
</p>
</div>
</div>
<div class="mesa" style="background-image: url(_/images/marcas/<?php echo $i ?>/mesa.jpg)"></div>
</div>
<?php }?>
