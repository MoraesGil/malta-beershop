<?php 
require_once 'atqweb/Classes/Mysql.php';
$db = new Mysql();
?>
<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="utf-8">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <!-- Can be uncommented for better IE compability. Throws validation error -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kero Mais Sorvetes</title>
    <meta name="description" content="">

    

    

   <link rel="shortcut icon" href="img/favicon.ico" />  

    <link rel="stylesheet" href="css/idangerous.swiper.css">

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

      <!--     <link rel="stylesheet" href="http://basehold.it/20/128/128/128"> -->

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

      <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

      <![endif]-->

    </head>

    <body class="home">





      

  

      <header id="home">

      

        <div class="swiper-container">
        
         

          <div class="swiper-wrapper">
<div class="swiper-slide"  style="background-image:url('img/bg-bnnovo.jpg')">

     		   <div style="margin-top:-180px;">

                <img src="img/itemnovo2.png" class="img-responsive" alt="Kero Mais" >

              </div>

              

            </div> 

            <div class="swiper-slide" style="background-image:url(img/slider/bg1.jpg)">

            <div>

                <img src="img/slider/item1.png" class="img-responsive" alt="Kero Mais" >

              </div>

    
            </div>



         <div class="swiper-slide"  style="background-image:url('img/slider/bg2.jpg')">

     		   <div style="margin-top:-150px;">

                <img src="img/slider/item2.png" class="img-responsive" alt="Kero Mais" >

              </div>

              

            </div> 


            <!-- 



            <div class="swiper-slide"  style="background-image:url('img/slider/04.jpg')">

              <h1 style="font-weight: 600; font-size:80px;">We are one</h1>

              <button class="btn">View our work</button>

              <button class="btn alternate">Learn more</button>

            </div>-->

          </div>

        </div>

        <div class="swiper-controls">

          <div class="arrow left">

            <div class="prev_thumbnail"></div>

            <i class="fa fa-angle-left"></i>

          </div>

          <div class="arrow right">

            <div class="next_thumbnail"></div>

            <i class="fa fa-angle-right"></i>

          </div>

        </div>

        <div class="swiper-indicators">

          

        </div>

        

        <div class="top-menu">

          <div class="container">

            <div class="row">

              <div class="col-md-9 col-md-push-3 navContainer">

                

                <nav id="menu">
                  <ul>
                    <li class="show-menu-li">
                      <img  style="width:100px;" src="img/logo.png" alt="Kero Mais" >
                      <a href="#menu" class="show-menu" >
                        <i class="fa fa-bars"></i>
                      </a>
                    </li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#empresa">Empresa</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <!-- <li><a href="#features">Why The One?</a></li> -->
                    <li><a href="#novidades">Novidades</a></li>
                    <li><a href="#promocao">Promoção</a></li>
                 <!--   <li><a href="#team">Our Team</a></li>-->
                    <li><a href="#contact">Contato</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-md-2 col-md-pull-9 logo-container">
                <a href="#home"><img style="width:150px;" src="img/logo.png" alt="Kero Mais" class="logo"></a>
              </div>
              <div class="col-md-1 col-md-pull-9 info">
              </div>
            </div>
          </div>
        </div>    

      </header>
<span style="padding-top:120px;"> 
 <section>
 <div class="row">
 </div>
 </section>
</span>
      <section class="services container" id="empresa">

        <div class="row">

          <div class="col-lg-12 headline">

            <h1>Empresa</h1>

            <hr />

          </div>

        </div>

        <div class="row">

          

          <div id="carousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->

            

            

            <!-- Wrapper for slides -->

            <div class="carousel-inner">

            <div class="item active">

              <div class="col-lg-4 col-lg-push-7 col-lg-offset-1 title">

                

                <div class="stroke"></div>

                <div class="icon">

                  <i class="fa fa-briefcase"></i>

                </div>

              </div>
			<?php 
$db->conecta();
$db->query("SELECT * FROM `conteudo` WHERE cont_id ='1';")->fetchAll();
   			 if ( $db->rows >= 1 ) 
				{ // linhas
   			  foreach ( $db->data as $conteudo )
       			{// loop conteudo
           		$cont = ( object ) $conteudo;
			?>
              <div class="col-lg-7 col-lg-pull-5 description">

                <h4><?php echo $cont->cont_titulo; ?> </h4>

               		<?php echo $cont->cont_conteudo; ?>

              </div>

     
      <?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>	    
         

            </div>

            

            <div class="item">

              <div class="col-lg-4 col-lg-push-7 col-lg-offset-1 title">

                

                <div class="stroke"></div>

                <div class="icon">

                  <i class="fa fa-barcode" style="padding-left:35px;"></i>

                </div>

              </div>
<?php 
$db->conecta();
$db->query("SELECT * FROM `conteudo` WHERE cont_id ='2';")->fetchAll();
   			 if ( $db->rows >= 1 ) 
				{ // linhas
   			  foreach ( $db->data as $conteudo )
       			{// loop conteudo
           		$cont = ( object ) $conteudo;
			?>
              <div class="col-lg-7 col-lg-pull-5 description">

                <h4><?php echo $cont->cont_titulo; ?></h4>

                
					<?php echo $cont->cont_conteudo; ?>
              </div>

            </div>
 <?php
} // fecha loop conteudo
}// fecha linhas
?>
<?php
$db->fechaConexao();
?>	
            <div class="item">

              <div class="col-lg-4 col-lg-push-7 col-lg-offset-1 title">

                

                <div class="stroke"></div>

                <div class="icon">

                  <i class="fa fa-info"></i>

                </div>

              </div>
<?php 
$db->conecta();
$db->query("SELECT * FROM `conteudo` WHERE cont_id ='3';")->fetchAll();
   			 if ( $db->rows >= 1 ) 
				{ // linhas
   			  foreach ( $db->data as $conteudo )
       			{// loop conteudo
           		$cont = ( object ) $conteudo;
			?>
              <div class="col-lg-7 col-lg-pull-5 description">

                <h4><?php echo $cont->cont_titulo; ?></h4>
					
                    <?php echo $cont->cont_conteudo; ?>
                


              </div>

            </div>
            <?PHP
} // fecha loop conteudo
}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
            <div class="item">

              <div class="col-lg-4 col-lg-push-7 col-lg-offset-1 title">

                

                <div class="stroke"></div>

                <div class="icon">

                  <i class="fa fa-thumbs-o-up"></i>

                </div>

              </div>
<?php 
$db->conecta();
$db->query("SELECT * FROM `conteudo` WHERE cont_id ='4';")->fetchAll();
   			 if ( $db->rows >= 1 ) 
				{ // linhas
   			  foreach ( $db->data as $conteudo )
       			{// loop conteudo
           		$cont = ( object ) $conteudo;
			?>
              <div class="col-lg-7 col-lg-pull-5 description">

                <h4><?php echo $cont->cont_titulo; ?></h4>

                <?php echo $cont->cont_conteudo; ?>

              </div>

            </div>
            <?PHP
} // fecha loop conteudo
}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
          </div>

          

          <div class="row controller">

            <hr />

            <div class="col-lg-12 ">

              <ul class="carousel-indicators">

                <li data-target="#carousel" data-slide-to="0" class="active"><span class="number">1</span></li>

                <li data-target="#carousel" data-slide-to="1" class=""><span class="number">2</span></li>

                <li data-target="#carousel" data-slide-to="2"><span class="number">3</span></li>

                <li data-target="#carousel" data-slide-to="3"><span class="number">4</span></li>

              </ul>

            </div>

          </div>

        </div>

      </div>  

    </section>

    <section id="promocao" style="padding-top: 100px !important;">
<div class="row">
<h1>Promoção Palito Premiado Kero Mais</h1>
<div class="container">

<div class="col-md-6">

<h3><strong>Regulamento da Campanha </h3><br>
<p>Período: de 10 de novembro de 2014 até 28 de fevereiro de 2015</p><br>

Regulamento:<br>
Na compra de um picolé Kero Mais, você pode encontrar gravado no palito as seguintes frases:<br>
-	Vale 1 picolé de fruta<br>
-	Vale 1 frisbee<br>
-	Vale 1 squeeze<br>

<p>Encontrando algum desses palitos, você pode retirar o brinde no mesmo ponto de venda onde comprou o sorvete. Caso o brinde esteja em falta no ponto de venda, você pode retirá-lo na sede industrial dos sorvetes Kero Mais, rua Espírito Santo, 10, Vila Furquim, Presidente Prudente – SP.</p><br>

<p>Os palitos premiados estão espalhados em toda linha de picolés da Kero Mais, porém o prêmio, quando for um outro picolé, será um picolé de fruta.</p><br>

<p>Qualquer dúvida, entre em contato com a Kero Mais pelo telefone, 3221-2709.</p></strong><br>
</div>
<div class="col-md-6" style="padding-top:50px;"><img src="img/promocao.jpg" class="img-responsive" width="100%"> </div>
</div>
</div>

</section>
	<span id="novidades"> </span>
    <section class="video" id="">

      <div class="row headline">

        <div class="col-xs-12 col-md-8">

          <h1 style="color:#fff;">Eu kero mais e você?</h1>

          <p>Jingle Sorvetes Kero +</p>

        </div>

        <div class="col-xs-12 col-md-2" style="text-align:center;">

          <div class="icon playButton">

            <span class="fa fa-play"></span>

          </div>

        </div>

      </div>

      <video id="vid1">

        <source src="videos/keromais.mp4" type="video/mp4">

      </video>

    </section>

    

    <section class="callToAction noMargin">

      <div class="container">

        <div class="row">

          <div class="col-md-5">

            <h1>KERO + NA SUA FESTA</h1>

          </div>

          

          <div class="col-md-7 buttons">

           <a href="#contact" title="Formulário de Contato"> <button class="btn special">Contato</button></a>

<!--            <button class="btn">Know more</button>-->

          </div>

          

        </div>

      </div>

    </section>

    

    <section id="produtos">
   <div class="row"></div>
    </section>

    <section class="blog">

      <div class="container">

        <div class="row headline">

          <h1>PRODUTOS</h1>

          <hr />

        </div>

        <div class="row">

          <article class="col-md-4">

          <figure>

            <img src="img/BOTOES_PRODUTOS.png"  alt="img" />

            <div class="figurecaption">
<?php
$db->conecta();
$sqlI= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='1' order by prod_titulo asc LIMIT 1;");


?>
				<?php 
			$total_esq = mysql_num_rows($sqlI);
			$linhaI = mysql_fetch_array($sqlI);
			$codigoI = $linhaI['prod_id'];
			if ($total_esq == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Ituzinhos</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=1&id='.$codigoI.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=1&id='.$codigoI.'">Ituzinhos</a></h3>';
			}?>

          </article>


			<article class="col-md-4">

          <figure>

            <img src="img/BOTOES_PRODUTOS.jpg"  alt="img" />

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='2' order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq2 = mysql_num_rows($sqlN);
			$linhaN = mysql_fetch_array($sqlN);
			$codigoN = $linhaN['prod_id'];
			if ($total_esq2 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Naturais</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=2&id='.$codigoN.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=2&id='.$codigoN.'">Naturais</a></h3>';
			}?>


          </article>
            
            
          <article class="col-md-4">

          <figure>

            <img src="img/aoLeite.jpg"  alt="img">

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='3' order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq3 = mysql_num_rows($sqlN);
			$linhaL = mysql_fetch_array($sqlN);
			$codigoL = $linhaL['prod_id'];
			if ($total_esq3 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Ao Leite</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=3&id='.$codigoL.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=3&id='.$codigoL.'">Ao Leite</a></h3>';
			}?>
   

          </article>

          <article class="col-md-4">

          <figure>

            <img src="img/massa.jpg"  alt="img">

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='4' order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq4 = mysql_num_rows($sqlN);
			$linhaM = mysql_fetch_array($sqlN);
			$codigoM = $linhaM['prod_id'];
			if ($total_esq4 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Massas</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=4&id='.$codigoM.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=4&id='.$codigoM.'">Massas</a></h3>';
			}?>
  

          </article>

        </div>

      
<?php
$db->fechaConexao();
?>
    <div class="row">

          <article class="col-md-4">

          <figure>

            <img src="img/especiais.jpg"  alt="img" />

            <div class="figurecaption">
<?php
$db->conecta();
$sqlI= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='5' order by prod_titulo asc LIMIT 1;");


?>
				<?php 
			$total_esq = mysql_num_rows($sqlI);
			$linhaS = mysql_fetch_array($sqlI);
			$codigoS = $linhaS['prod_id'];
			if ($total_esq == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Especiais</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=5&id='.$codigoS.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=1&id='.$codigoS.'">Especiais</a></h3>';
			}?>  

          </article>


			<article class="col-md-4">

          <figure>

            <img src="img/kids.jpg"  alt="img" />

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='6' order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq2 = mysql_num_rows($sqlN);
			$linhaK = mysql_fetch_array($sqlN);
			$codigoK = $linhaK['prod_id'];
			if ($total_esq2 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Kids</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=6&id='.$codigoK.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=6&id='.$codigoK.'">Kids</a></h3>';
			}?>

          </article>
            
            
          <article class="col-md-4">

          <figure>

            <img src="img/massasemp.jpg"  alt="img">

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` WHERE prod_categoria ='7' order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq3 = mysql_num_rows($sqlN);
			$linhaG = mysql_fetch_array($sqlN);
			$codigoG = $linhaG['prod_id'];
			if ($total_esq3 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Massas a Granel</a></h3>';
			} else {
			echo '<a class="btn"  href="view.php?cat=7&id='.$codigoG.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="view.php?cat=7&id='.$codigoG.'">Massas a Granel</a></h3>';
			}?>

          </article>

          <article class="col-md-4">

          <figure>

            <img src="img/todos.jpg"  alt="img">

            <div class="figurecaption">
<?php
$sqlN= mysql_query("SELECT * FROM `produtos` order by prod_titulo asc LIMIT 1;");


?>
              	<?php 
			$total_esq4 = mysql_num_rows($sqlN);
			$linhaT = mysql_fetch_array($sqlN);
			$codigoT = $linhaT['prod_id'];
			if ($total_esq4 == 0) {
			echo ' <a class="btn"  href="#"><i class="fa fa-camera"></i>Veja Mais</a>';
				echo '        </div>

          </figure>

          <h3><a href="#">Todos</a></h3>';
			} else {
			echo '<a class="btn"  href="viewprodutos.php?id='.$codigoT.'"><i class="fa fa-camera"></i>Veja Mais</a>';
			
			echo '        </div>

          </figure>

          <h3><a href="viewprodutos.php?id='.$codigoT.'">Todos</a></h3>';
			}?>

          </article>

        </div>

      
<?php
$db->fechaConexao();
?>
    

      <div class="clearfix"></div>

      <div style="clear:both;"></div>

    </section>

    <div style="clear:both;"></div>


   

    

    <iframe style="width:100%; cursor:pointer;" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Esp%C3%ADrito+Santo,+10,+Vila+Furquim,+Presidente+Prudente+-+S%C3%A3o+Paulo&amp;aq=0&amp;oq=Espirito+Santo,+10+Presidente&amp;sll=-14.239424,-53.186502&amp;sspn=73.234618,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Esp%C3%ADrito+Santo,+10+-+Vila+Furquim,+S%C3%A3o+Paulo,+19030-390&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=-22.117982,-51.377532&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Esp%C3%ADrito+Santo,+10,+Vila+Furquim,+Presidente+Prudente+-+S%C3%A3o+Paulo&amp;aq=0&amp;oq=Espirito+Santo,+10+Presidente&amp;sll=-14.239424,-53.186502&amp;sspn=73.234618,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Esp%C3%ADrito+Santo,+10+-+Vila+Furquim,+S%C3%A3o+Paulo,+19030-390&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=-22.117982,-51.377532" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>

    <section class="contact" id="contact">

      <div class="container">

        <div class="row">

         <?php 

if(isset($_POST['enviar'])) {



	$nome = $_POST['nome'];

	$email = $_POST['email'];

	$fone = $_POST['telefone'];

	$assunto = $_POST['assunto'];

	$mensagem = $_POST['mensagem'];

	

	$email_remetente = "contato@keromais.net"; // =========================================

	$email_destinatario = "contato@keromais.net";

	$email_reply = "$email";

	$email_assunto = "CONTATO VIA SITE KERO MAIS I - ".$nome;

	



	$email_conteudo = '<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">

<body style="background:#e20d3f; font-family:"Lato", sans-serif;"><table align="center" width="600" border="0" style="padding:0;background:#FFF;font-family:"Lato", sans-serif; font-size:11px; color:#9e9e9e; border:solid 1px #603927"><tr><td><img src="http://www.keromais.net/email/topo.jpg" /></td></tr><tr><td><p><strong>Contato via site de: '.$nome.' </strong></p><p><strong>Nome: '.$nome.'<br />E-mail: '.$email.'<br />Telefone: '.$fone.'<br />Assunto: '.$assunto.'<br />Mensagem: '.$mensagem.'</strong><br /><br /></p></td></tr><tr><td><img src="http://www.keromais.net/email/rodape.jpg"  /></td></tr></table></body>';	 	



	

	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );	

	

 



 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){

	

	 echo "<script>alert('".$nome."! Sua mensagem foi enviada com sucesso!')</script>";

	 echo '<div class="alert alert-success" role="alert">

      <strong>'.$nome.'!</strong> Sua mensagem foi enviada com sucesso!

    </div>';

	} else {

		 echo "<script>alert('".$nome."! Erro ao enviar! Tente Novamente!')</script>";

		echo '<div class="alert alert-danger" role="alert">

      <strong>'.$nome.'!</strong> Erro ao enviar! Tente Novamente!

    </div>';

	}



}



?>

 <div class="container">

        <div class="row headline" style="padding-top: 60px;">

          <h1>CONTATO</h1>

          <hr />

        </div>
  </div>

          <div class="col-md-4">

            <h4>Kero Mais Sorvetes</h4>

            <p>

            R. Espírito Santo, 10 - Vila Furquim<br>

			Presidente Prudente - SP<br>

			19030-390 ‎

            </p>

            <p>

            (18) 3221-2709<br>

			contato@keromais.net

            </p>

          </div>

          <div class="col-md-8">

           

          

<script type="text/javascript">

/* Máscaras ER */

function mascara(o,f){

    v_obj=o

    v_fun=f

    setTimeout("execmascara()",1)

}

function execmascara(){

    v_obj.value=v_fun(v_obj.value)

}

function mtel(v){

    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito

    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos

    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos

    return v;

}

function id( el ){

	return document.getElementById( el );

}

window.onload = function(){

	

	id('telefone').onkeypress = function(){

		mascara( this, mtel );

		}

	

}

</script>



            <form method="post" action="">

            <div class="row">

              <div class="col-sm-6">

                <input type="text" class="form-control" required name="nome" placeholder="Nome">

              </div>

              <div class="col-sm-6">

                <input type="email" class="form-control" required name="email" placeholder="E-mail">

              </div>

            </div>

            <div class="row">

              <div class="col-sm-6">

                <input type="text" class="form-control" required id="telefone" name="telefone" placeholder="Telefone" maxlength="15">

              </div>

              <div class="col-sm-6">

                <input type="text" class="form-control" name="assunto" placeholder="Assunto">

              </div>

            </div>

            <div class="row">

              <div class="col-lg-12">

                <textarea class="form-control" name="mensagem" required placeholder="Mensagem"></textarea>

              </div>

            </div>

            <div class="row">

              <div class="col-lg-3 col-lg-offset-9">

                <button type="submit" name="enviar" class="form-control">Enviar</button>

              </div>

            </div>

          </div>

        </div>

      </div>

      </form>

    </section>

    

    <footer class="">

      <div class="container">

        <div class="goUp">

          <i class="fa fa-angle-up"></i>

        </div>

        

        <div class="logo">

          <img src="img/logo.png" alt="Kero Mais" />

        </div>

        

        <div class="social">

          <h3></h3>

          

          <div>

            <a href="https://www.facebook.com/keromaisoficial" target="_blank"><i class="fa fa-facebook"></i></a>

            <a href="#"><i class="fa fa-twitter"></i></a>

            <a href="#"><i class="fa fa-google-plus"></i></a>

          </div>

          

          <hr />

        </div>

        

        <div class="copyright">

          <p>© 2014 <strong>Kero Mais</strong>. All Rights Reserved.</p>

          <p><a href="http://www.ataquepropaganda.com.br/" title="Ataque Propaganda - &quot;Somos a agência de comunicação que mudará o seu conceito sobre propaganda, marketing, planejamento e RESULTADOS&quot;." target="_blank" >

					

				<img src="img/logo-atq.png" border="0" /></a></p>

        </div>

      </div>

    </footer>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>

    <script src="js/modernizr.custom.js"></script>

    <script src="js/jquery.nicescroll.min.js"></script>

    <script src="js/idangerous.swiper.min.js"></script>

    <script src="js/annyang.min.js"></script>

    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/1.1.0/annyang.min.js"></script>-->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwNw7naMEq6ZK-l4fMirYM8JglTVwCs6s&amp;sensor=true"></script>

    <script type="text/javascript" src="../../google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>

    <script src="js/snap.svg-min.js"></script>

    <script src="js/script.js"></script>

    

    

  </body>

</html>