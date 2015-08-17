<?php 
session_start();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ATQWEB - Sistemas WEB">
    <meta name="author" content="Rafael Franco | Ataque Propaganda">
    <link rel="shortcut icon" href="images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <title>ATQWEB - Sistemas WEB</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

     <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="margin-top:-45px;">
      <div class="container">      
      		<div class="row">
        <div class="col-md-4">
         <p><img src="images/logo.png" border="0" /></p>
         
        </div>
        <div class="col-md-8">
          <h2 style="font-size:52px; font-weight:bold; color:#FFF;">Faça seu login</h2>
          <p style="font-size:20px;  color:#FFF;">Este é o software de gerenciamento on-line da Ataque Propaganda. Através dele você pode gerenciar sua página e otimizar os seus serviços. Seja bem vindo! </p>
       </div>
       
        </div>
      
      
      </div>
    </div>
    
    <div class="container">
      <form class="form-signin" role="form" action="Classes/Controle.php" method="post">
        <h3 class="form-signin-heading">Preencha os dados para efetuar o login.</h3><br>

        <input type="email" class="form-control" placeholder="Email address" required autofocus name="email">
        <input type="password" class="form-control" placeholder="Password" required name="senha">
   
        <button class="btn btn-lg btn-primary btn-block" id="acao" name="acao" value="logar" type="submit">Login</button>
      </form>
      
      	<br>
	<br>
	<br>
    </div> <!-- /container -->

    </div> <!-- /container -->
    
    <footer>
     <div class="container">
     	<!--<p align="center" style="margin-top:35px;"><img src="images/redes-socias.jpg" usemap="#Map" border="0" />
          <map name="Map">
            <area shape="rect" coords="17,4,74,73" href="http://twitter.com/ataqueprop" target="_blank">
            <area shape="rect" coords="178,3,240,75" href="http://www.youtube.com/ataqueprop" target="_blank">
<area shape="rect" coords="96,3,164,75" href="https://www.facebook.com/ataquepropaganda/" target="_blank">
          </map>
        </p>-->
        <p> <br>
</p>
        <p align="center" style="font-size:16px;  color:#FFF; margin-top:-10px;">© Ataque Propaganda. All rights reserved.</p>
       </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
