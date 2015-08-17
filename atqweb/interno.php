<?php 
require_once 'Classes/Usuario.php';
require_once 'Classes/Info.php';
require_once 'Classes/Conteudo.php';
require_once 'Classes/Usuarios.php';
require_once 'Classes/Sessao.php';
require_once 'Classes/Autenticador.php';
require_once 'Classes/Funcoes.php';
require_once 'Classes/Empresa.php';
require_once 'Classes/Mysql.php';
require_once 'Classes/Servicos.php';
require_once 'Classes/Duvidas.php';
require_once 'Classes/Depoimentos.php';
require_once 'Classes/Aniversariantes.php';
require_once 'Classes/Noticias.php';
require_once 'Classes/Vitrine.php';
$db = new Mysql();
$funcoes = new Funcoes();
$usuarios = new Usuarios();
$conteudo = new	Conteudo();
$info = new Info();
$empresa = new Empresa();
$servicos = new Servicos();
$duvidas = new Duvidas();
$depoimentos = new Depoimentos();
$aniversariantes = new Aniversariantes();
$noticias = new Noticias();
$vitrine = new Vitrine();



$aut = Autenticador::instanciar();

$usuario = null;
if ($aut->esta_logado()) {
    $usuario = $aut->pegar_usuario();
}
else {
    $aut->expulsar();
}
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

    <title>ATQWEB - Sistemas WEB</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Home">Home</a></li>
            
            <?php  if ($usuario->getTipo() == "ADMIN") { ?>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="CadastrarUsuarios">Cadastrar Usuários</a></li>
                <li><a href="UsuariosCadastrados">Usuários Cadastrados</a></li>
               <!-- <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul>
            </li>
            
             <?php  }else {
			?>	 
            <li><a href="AtualizarUsuarios&id=<?php echo $usuario->getId(); ?>">Atualizar Dados</a></li>
			<?php	 
			}?>

<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="album">Cadastrar Fotos</a></li>   
                <li><a href="album">Fotos Cadastradas</a></li>
              </ul>
            </li>-->
            
          
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notícias<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="CadastrarNoticias">Cadastrar Notícias</a></li>
                <li><a href="NoticiasCadastradas">Notícias Cadastradas</a></li>

              </ul>
            </li>       

           <?php  if ($usuario->getTipo() == "ADMIN") { ?>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuração <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="AtualizarInfoPagina">Informaçoes da Página</a></li>  
                <li><a href="AtualizarInfoContato">E-mail de Contato</a></li>
              </ul>
            </li>
            
            <?php }?> 
            
          </ul>
          <a class="navbar-brand" href="Classes/Controle.php?acao=sair" style="float:right;">logout</a>
        </div><!--/.nav-collapse -->
      </div>
       
    </div>
         
            
          
         
      

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="margin-top:0px;">
      <div class="container">      
      		<div class="row">
        <div class="col-md-4">
         <p><img src="images/logo.png" border="0" /></p>
         
        </div>
        <div class="col-md-8">
          <h2 style="font-size:52px; font-weight:bold; color:#FFF;">Olá! <?php  print utf8_encode($usuario->getNome()); ?></h2>
          <p style="font-size:20px;  color:#FFF;">Este é o software de gerenciamento on-line da Ataque Propaganda. Através dele você pode gerenciar sua página e otimizar os seus serviços. Seja bem vindo! </p>
       </div>
       
        </div>
      
      
      </div>
    </div>

    <div class="container">
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
			include_once("pg/Home.php");
		}
?>
 

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

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="editor/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="editor/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
	<script type="text/javascript">
				tinyMCE.init({
					// General options
					language : "pt",
					mode : "textareas",
					theme : "advanced",
					elements : "elm2",
					skin : "o2k7",
					plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

					
// Theme options
					theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_statusbar_location : "bottom",
					theme_advanced_resizing : true,
					theme_advanced_resizing_min_width : 500,
					

					// Example content CSS (should be your site CSS)
					//content_css : "../css/main.css",

					// Drop lists for link/image/media/template dialogs
					template_external_list_url : "lists/template_list.js",
					external_link_list_url : "lists/link_list.js",
					external_image_list_url : "lists/image_list.js",
					media_external_list_url : "lists/media_list.js",
					file_browser_callback : "tinyBrowser",
					extended_valid_elements : "iframe[src|width|height|name|align]",
					relative_urls : false,
					// Replace values for the template plugin
					template_replace_values : {
						username : "Some User",
						staffid : "991234"
					}
				});
		</script>
  </body>
</html>
