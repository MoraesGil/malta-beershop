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

<style media="all">
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

.col-desc{
	margin-bottom: 40px;
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
	/*height: 400px;*/
}

.mesa{
	height:40px;
	background-repeat: repeat-x;
}

.beer{
	width: auto;
	/*height: 500px;*/
	display: block;
	margin-left: auto;
	margin-right: auto;
}

</style>

<?php
$beers = array(
	1=>array("MALTA PILSEN","pilsen","#932017"),
	2=>array("MALTA PILSEN SEM ÁLCOOL","pilsen-sem-alcool","#1e76a0"),
	3=>array("MALTA MALZBIER","malzibier","#088a36"),
	4=>array("MALTA MALZBIER SEM ÁLCOOL","malzibier-sem-alcool","#00a02b"),
	5=>array("GOLDEN BEER","golden-beer","#fbc300"),
	6=>array("MALTA CHOPP","malta-chopp","#372d22"),
	7=>array("CRISTALINA","cristalina","#0d465b"),
	8=>array("TRIPICOLA","tripicola","#790d1e"),
	9=>array("CLUB SODA","club-soda","#3a656b"),
	10=>array("NATPOWER ENERGY DRINK","natpower","#160100")
);

foreach ($beers as $key => $value) {
	?>
	<div class="marca " style="background-image: url(_/images/marcas/<?php echo $key; ?>/background.jpg">
		<div class="row">
			<div class="col-desc
			col-xs-9 col-xs-offset-3
			col-sm-4 col-sm-offset-1 col-sm-push-5
			col-md-3 col-md-push-5
			">
			<h2><?php echo $beers[$key][0]; ?></h2>
			<a href="/<?php echo $beers[$key][1];?>" class="see-more" style="color: <?php echo $beers[$key][2]; ?>">Veja Mais</a>
		</div>

			<div class="
			col-xs-12
			col-sm-4 col-sm-offset-3 col-sm-pull-6
			col-md-3 col-md-offset-3 col-md-pull-4">
			<img class="beer img-responsive" src="_/images/marcas/<?php echo $key;?>/beer.png" alt="" />
		</div>


</div>
<div class="mesa row" style="background-image: url(_/images/marcas/<?php echo $key; ?>/mesa.jpg)">
</div>
</div>
<?php }?>
