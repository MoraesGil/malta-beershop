<?php

/*require_once '../database/mysql.php';
require_once '../class/Session.class.php';
$db = new Mysql;
$sid = new Session;
$sid->start();
if ( !$sid->check() )
{
    @header( 'Location: login.php' );
}*/
?>

<!DOCTYPE html>
<html>
    <head>  
        <title>Galeria - Painel Administrativo</title>  
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link href="tpl/css/all.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/960_12.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/simple-lists.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/reset.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/common.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/standard.css" rel="stylesheet" type="text/css">
        <link href="tpl/css/form.css" rel="stylesheet" type="text/css" />
        <link href="tpl/css/simple-lists.css" rel="stylesheet" type="text/css" />
        <link href="tpl/css/block-lists.css" rel="stylesheet" type="text/css" />
        <link href="tpl/css/table.css" rel="stylesheet" type="text/css" />
        <!-- Generic libs -->
        <script type="text/javascript" src="tpl/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="tpl/js/html5.js"></script>
        <script type="text/javascript" src="tpl/js/old-browsers.js"></script>
        <!-- Template core functions -->
        <script type="text/javascript" src="tpl/js/common.js"></script>
        <script type="text/javascript" src="tpl/js/jquery.tip.js"></script>
        <script type="text/javascript" src="tpl/js/standard.js"></script>
        <!--[if lte IE 8]><script type="text/javascript" src="tpl/js/standard.ie.js"></script><![endif]-->

    </head>
    <body>	
       <!-- <div id="status-bar">
            <div class="container_12">
                <ul id="status-infos">
                    <li class="spaced">Dream Gallery :: <strong> Rafael Clares</strong></li>
                </ul>                          
            </div>        
        </div> -->

        <div id="wrap" class="container_12">
            <div class="grid_12">
                <p>&nbsp;</p>
                <div class="block-border">
                    <div class="block-content">
                        <h1>Área Restrita - Home</h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                                <li class="current"><a href="javascript:void(0)" title="Home">
                                        <img src="tpl/images/icons/home.png" width="24" height="24"></a>
                                </li>

                                <li><a href="album.php" title="Álbuns">
                                        <img src="tpl/images/icons/gallery.png" width="24" height="24"></a>
                                </li>

                                <li><a href="usuario.php" title="Usuários">
                                        <img src="tpl/images/icons/users.png" width="24" height="24"></a>
                                </li>
                                <li><a href="login.php?logout=true" title="Logout">
                                        <img src="tpl/images/icons/logout-gray.png" width="24" height="24"></a>
                                </li>					
                            </ul>
                        </div>
                        <div id="home" style="min-height: 500px;">
                            <p>&nbsp;</p>
                            <h5>Hey Dude!</h5>
                        </div>
                        <p>&nbsp;</p>
                    </div>
                    <p>&nbsp;</p>

                </div>
            </div>
        </div>

    </body>
</html>