<style media="all">
.container{
	padding-right: 0;
	padding-left: 0;
}


.bg{
	background-repeat: no-repeat;
	/*background-size: cover;*/
	width: 100%;
	padding-top: 10px
	margin-left: 10px;
	background-image: url(_/images/marcas-detalhado/cristalina/bg.jpg);
	height: 500px;
}

.row{
	margin-left: 0px;
	margin-right: 0px;
}

#info{
  font-size: 20px;
  font-family: "Helvetica";
  color: rgb(255, 255, 255);
  font-weight: bold;
  line-height: 1.226;
  text-align: left;
  margin-top: 20px;
  text-shadow: 2px 2px 3px #000000;
}

#info em{
  font-weight: 200;
}
.refri{
	max-height: 500px;
}
</style>

<?php
$beers = array(
	1=>array("MALTA PILSEN","pilsen","#932017"),
	2=>array("MALTA PILSEN SEM ÁLCOOL","pilsen-sem-alcool","#1e76a0"),
	3=>array("MALTA MALZBIER","malzbier","#088a36"),
	4=>array("MALTA MALZBIER SEM ÁLCOOL","malzbier-sem-alcool","#00a02b"),
	5=>array("GOLDEN BEER","golden-beer","#fbc300")
);

foreach ($beers as $key => $value) {
	?>
	<div class="row bg">
		<div class=" text-center col-xs-12 col-sm-4 col-sm-offset-1 col-sm-push-5
		col-md-3 col-md-push-5
		col-lg-3 col-lg-push-5
		">
		<div class="row">
				<img class="img-responsive" src="_/images/marcas-detalhado/cristalina/vb.png" alt="" />
		</div>
		<div class="row">
			<div id="info">
				<p>
					Informação Nutricional: <br>
					<em>Definição/Tipo: Cerveja Tipo Malzbier <br>
						Graduação Alcoólica: 3,5 %</em>

					</p>
					<p>
						Ingredientes: <br>
						<em>Água, Malte, Carboidratos, Cereais não malteados e Lúpulo</em>
					</p>
					<p>
						Embalagens: <br>
						<em>
							Garrafa retornável 600 ml <br>
							Lata 473 ml <br>
							Lata 350 ml
						</em>
					</p>
				</div>
		</div>

		<br>
		<br>
	</div>

	<div class="
	col-xs-12
	col-sm-4 col-sm-offset-3 col-sm-pull-6
	col-md-3 col-md-offset-3 col-md-pull-4
	col-lg-3 col-lg-offset-3 col-lg-pull-4">
	<img class="img-responsive refri" src="_/images/marcas-detalhado/cristalina/<?php echo $key;?>.png" alt="" />
</div>

</div>

<?php }?>
