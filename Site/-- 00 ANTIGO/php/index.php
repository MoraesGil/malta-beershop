<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INOVA - Comunicação Visual</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/js-flickr-gallery/css/js-flickr-gallery.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!--Construction Styles-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- LOADER - PAG
    <div id="pageloader" class="row m0">
        <div class="loader-item"><img src="images/loader.gif" alt="loading"></div>
    </div> 
    -->
    <section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel:+55183217-1609"><i class="fa fa-phone"></i> (18) 3217-1609</a></li>
                    <li><a href="mailto:contato@inovadesign.com.br"><i class="fa fa-envelope-o"></i> contato@inovacvisual.com.br</a></li>
                </ul>
            </div>
        </div>
    </section> <!--Top Strip-->
    
    <header class="row">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-6">
                    <div class="row">
                        <a href="home"><img src="images/logo.png" alt="Inova Comunicação Visual"></a>
                    </div>
                </div>
                <div class="social_nav col-sm-6">
                    <div class="row">
                        <ul class="list-inline fright">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> <!--Header-->
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Menu</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li  <?php if (isset($_GET['pg'])){ $pagina = $_GET['pg']; if($pagina == "home") { echo 'class="active"';}} ?>><a href="home">Home</a></li>
                        <li <?php if (isset($_GET['pg'])){ $pagina = $_GET['pg']; if($pagina == "inova") { echo 'class="active"';} }?>>
                            <a href="inova"  role="button" >INOVA</a>
                            <!-- DROPDOWN
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Home</a></li>
                            </ul>
                            -->
                        </li>
                        <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SERVIÇOS</a>
                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="#">Impressão Digital</a></li>
                                <li><a href="#">Banners</a></li>
                                <li><a href="#">Fachadas</a></li>
                                <li><a href="#">Letra Caixa Painéis</a></li>
                                <li><a href="#">Totem</a></li>
                                <li><a href="#">Toldos</a></li>
                                <li><a href="#">Adesivos</a></li>
                                <li><a href="#">Revestimento em ACM</a></li>
                                
                                
                                
                            </ul>
                        </li>
                        <li class=" dropdown"><a href="#"  role="button" aria-expanded="false">PORTFÓLIO</a></li>
                        <li class=" dropdown"><a href="#"  role="button" aria-expanded="false">CONTATO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!--Main Nav-->

<?php 
if (isset($_GET['pg'])){
		$pagina = $_GET['pg'];
		if(file_exists("pg/$pagina.php")) {
			include_once("pg/$pagina.php");
		}
		else{
			include_once("pg/404.php");
		}	
}else {
			include_once("pg/home.php");
		}
?>
        	
    <br><br>
    <footer id="nr_footer" class="row">
        <div class="container">
            <div class="row goTop">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
            
            <div class="footerWidget row">
                <div class="col-sm-6 widget">
                    <div class="getInTouch_widget row">
                        <div class="widgetHeader row m0"><img src="images/whiteSquare.png" alt="">Contato</div>        
                        <div class="row getInTouch_tab m0">
                            <ul class="nav nav-tabs nav-justified" role="tablist" id="getInTouch_tab">
                              <li role="presentation" class="active"><a href="#contactPhone" aria-controls="contactPhone" role="tab" data-toggle="tab"><i class="fa fa-phone"></i></a></li>
                              <li role="presentation"><a href="#contactEmail" aria-controls="contactEmail" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i></a></li>
                              <li role="presentation"><a href="#contactHome" aria-controls="contactHome" role="tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                            </ul>

                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="contactPhone"><i class="fa fa-phone"></i> (18) 3217-1606 / 3907-6738</div>
                              <div role="tabpanel" class="tab-pane" id="contactEmail"><i class="fa fa-envelope"></i>contato@inovacvisual.com.br</div>
                              <div role="tabpanel" class="tab-pane" id="contactHome"><i class="fa fa-home"></i>Av. Ana Jacinta, 2544 - Jd Vale Verde - Presidente Prudente/SP</div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-sm-6 widget">
                    <div class="row flickrSlider">
                        <div class="widgetHeader row m0"><img src="images/whiteSquare.png" alt="">Inova Comunicação Visual</div>        
                         <p style="color:#FFF; font-size:16px; text-align:justify; ">Proporcionar a criação de serviços de comunicação visual 
com perfeição, atendendo pessoas inteligentes, que valorizam 
a sua imagem comercial ou residencial e buscam soluções 
criativas que expressem esse valor, contribuindo 
para seu sucesso e crescimento.</p>
                                       
                    </div>    
                </div>
            </div>
            <div class="row copyrightRow">
                &copy; <?php echo date("Y"); ?> <a href="http://www.inovacvisual.com.br">Inova Comunicação Visual</a>, All Rights Reserved
            </div>
        </div>
    </footer>

    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    <!--Isotope-->
    <script src="vendors/isotope/isotope-custom.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>
</html>