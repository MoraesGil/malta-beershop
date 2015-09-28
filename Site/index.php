<?php
require_once 'atqweb/Classes/Mysql.php';
$db = new Mysql();

$baseUrl = "";
// $baseUrl = "http://ataquepropaganda.com.br/malta"
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

  switch ($pagina) {
    case "ver-noticia":  echo 'class="portfolio-page"';
    break;
    case "home":  echo 'class="blog_classic"';
    break;
    case "marcas":  echo 'class="blog_classic"';
    break;
    case "empresa":  echo 'class="blog_classic"';
    break;
    case "equipe":  echo 'class="blog_classic"';
    break;
    case "distribuicao":  echo 'class="blog_classic"';
    break;
    case "contato": echo 'class="blog"';
    break;
    default: echo 'class="page-404"';
    break;
  }

  // if($pagina == "home") { echo 'class="blog_classic"'; }
  // else if ($pagina == "404") { echo 'class="page-404"'; }
  // else if ($pagina == "contato") { echo 'class="blog"'; }
  // else if ($pagina == "empresa") { echo 'class="blog_classic"'; }
  // else if ($pagina == "noticias") { echo 'class="blog_classic"'; }
  // else if ($pagina == "noticias-mes") { echo 'class="blog_classic"'; }
  // else if ($pagina == "ver-noticia") { echo 'class="portfolio-page"'; }
  // else if ($pagina == "golden-beer") { echo 'class="blog_classic"'; }
  // else if ($pagina == "tropicola") { echo 'class="blog_classic"'; }
  // else if ($pagina == "malta-chopp") { echo 'class="blog_classic"'; }
  // else if ($pagina == "natpower-energy-drink") { echo 'class="blog_classic"'; }
  // else if ($pagina == "malta-chopp") { echo 'class="blog_classic"'; }
  // else if ($pagina == "malta-pilsen-sem-alcool") { echo 'class="blog_classic"'; }
  // else if ($pagina == "club-soda-cristalina") { echo 'class="blog_classic"'; }
  // else if ($pagina == "marcas") { echo 'class="blog_classic"'; }
  // else { echo 'class="page-404"';}
}else {
  echo 'class="blog_classic"';
}



?>
>
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
            <ul class="nav navbar-nav" style="width: 800px !important;">
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
<!-- /INTERNAS -->

<footer style="background:#ffd32c">
  <div class="container">
    <span style="float:left;padding-left:10px;">© <?php echo date("Y"); ?> Cervejaria Malta • Todos os direitos reservados </span>
    <a href="http://www.ataquepropaganda.com.br/" title="Ataque Propaganda - &quot;Somos a agência de comunicação que mudará o seu conceito sobre propaganda, marketing, planejamento e RESULTADOS&quot;." target="_blank" style="float:right;padding-left:10px;"><img src="_/images/logo-atq.png" alt="image"></a>
  </div>
</footer>

<div class="md-overlay"></div>
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


</body>
</html>
