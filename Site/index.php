<?php
require_once 'atqweb/Classes/Mysql.php';
require_once 'atqweb/Classes/Funcoes.php';
$db = new Mysql();
$funcoes = new Funcoes();
$baseUrl = "";
// $baseUrl = "http://ataquepropaganda.com.br/malta/_"
?>
<!DOCTYPE html>
<html>
<head>
  <title>MALTA Cervejaria -  Site Oficial</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="_/images/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="_/css/fontello.css" rel="stylesheet" media="screen">
  <link href="_/css/mystyle.css" rel="stylesheet" media="screen">
  <link href="_/css/shop_slider.css" rel="stylesheet" media="screen">
  <link href="_/css/slider.css" rel="stylesheet" media="screen">
  <link href="_/css/slider_2.css" rel="stylesheet" media="screen">
  <link href="_/css/sub_slider.css" rel="stylesheet" media="screen">
  <link href="_/css/twitter_slider.css" rel="stylesheet" media="screen">
  <link href="_/css/slide_background.css" rel="stylesheet" media="screen">
  <link href="_/css/shop_slider_background.css" rel="stylesheet" media="screen">
  <link href="_/css/subpage_banners.css" rel="stylesheet" media="screen">
  <link href="_/css/jrating.jquery.css" rel="stylesheet" media="screen">
  <link href="_/css/flexisel-carrosel.css" rel="stylesheet" type="text/css" />
  <link href="_/css/animations.min.css" rel="stylesheet" media="screen">

  <!--[if IE 9]><link rel="stylesheet" type="text/css" href="_/css/ie9.css"><![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="_/js/modernizr.js"></script>
  <script type="text/javascript" src="_/js/bootstrap.js"></script>
</head>

<body
<?php
if (isset($_GET['pg']))
{
  $pagina = $_GET['pg'];

  $paginas = array("home","marcas", "noticias", "empresa", "equipe","distribuicao","contato",
  "club-soda-cristalina");

  if (in_array($pagina, $paginas)) {
    echo 'class="blog"';
  }
  else {
    echo 'class="page-404"';
  }
}else {
  echo 'class="blog"';
}
?>
>

<div style="	min-height:100%;
position:relative;">


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col col-sm-12">
        <div class="navbar-header">
          <!--div class="visible-xs panel-mobile"><a href="shop_view_cart.html">Cart</a><span>|</span><a href="#" class="md-trigger" data-modal="login-modal" onClick="return false;">Login</a></div-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bars"></span>
            <span class="icon-bars"></span>
            <span class="icon-bars"></span>
          </button>
          <a class="navbar-brand" href="home"><img src="_/images/logos_marcas/logo-malta.png" class="img-responsive" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
          <div class="left-cell">
            <ul class="nav navbar-nav"  >
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "home") { echo 'class="active"'; } } ?>>
                <a href="home">Home</a>
              </li>
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "empresa") { echo 'class="active"'; } } ?>>
                <a href="empresa">EMPRESA</a>
              </li>
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "marcas") { echo 'class="active"'; } } ?>>
                <a href="marcas">MARCAS</a>
              </li>
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "noticias") { echo 'class="active"'; } } ?>>
                <a href="noticias">NOTÍCIAS</a>
              </li>
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "fale") { echo 'class="active"'; } } ?>>
                <a href="https://seguro.catho.com.br/inclusao//curriculo.php?e=malta" target="_blank">TRABALHE CONOSCO</a>
              </li>
              <li <?php if (isset($_GET['pg'])) { $pagina = $_GET['pg']; if($pagina == "contato") { echo 'class="active"'; } } ?>>
                <a href="contato">FALE CONOSCO</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</nav><!-- Main Navigation -->

<!-- INTERNAS -->
<div id="content">
  <?php
  if (isset($_GET['pg']))
  {
    $pagina = $_GET['pg'];
    if(file_exists("pg/$pagina.php")) {
      include_once("pg/$pagina.php");
    }
    else{
      include_once("pg/404.php");
    }
  }
  else {
    include_once("pg/home.php");
  }
  ?>
</div>
<!-- /INTERNAS -->


<footer   >
  <div class="container" style="padding-top: 14px;">
    <span style="pull-left">© <?php echo date("Y"); ?> Cervejaria Malta • Todos os direitos reservados
    </span>
    <a class="pull-right" href="http://www.ataquepropaganda.com.br/" title="Ataque Propaganda - &quot;Somos a agência de comunicação que mudará o seu conceito sobre propaganda, marketing, planejamento e RESULTADOS&quot;." target="_blank" >
      <img src="_/images/logo-atq.png" alt="image"></a>
    </div>
  </footer>
</div>

<div class="jquery-media-detect"></div>	<script type="text/javascript" src="_/js/jrating.jquery.js"></script>
<script type="text/javascript">

$(window).load(function() {
  $("#flexiselDemo3").flexisel({
    visibleItems: 5,
    animationSpeed: 1000,
    autoPlay: true,
    autoPlaySpeed: 3000,
    pauseOnHover: true,
    enableResponsiveBreakpoints: true,
    responsiveBreakpoints: {
      portrait: {
        changePoint:480,
        visibleItems: 1
      },
      landscape: {
        changePoint:640,
        visibleItems: 2
      },
      tablet: {
        changePoint:768,
        visibleItems: 3
      }
    }
  });
});
</script>
<script type="text/javascript" src="_/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="_/js/myscript.js"></script>
<script type="text/javascript" src="_/js/modal_effects.js"></script>
<script type="text/javascript" src="_/js/appear.min.js"></script>
<script type="text/javascript" src="_/js/animations.min.js"></script>


</body>
</html>
