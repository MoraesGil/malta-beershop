<?php
require_once '../database/mysql.php';
require_once '../class/Session.class.php';


if ( isset( $_GET['logout'] ) && !empty( $_GET['logout'] ) )
{
    $sid = new Session;
    $sid->start();
    $sid->destroy();
}

if ( isset( $_POST['user_login'] ) && isset( $_POST['user_password'] ) && !empty( $_POST['user_login'] ) && !empty( $_POST['user_password'] ) )
{
    $user_login = $_POST['user_login'];
    $user_password = md5( $_POST['user_password'] );
    $db = new Mysql;
    $db->query( "select * from users where user_login = '$user_login' and user_password = '$user_password'" )->fetchAll();
    if ( $db->rows >= 1 )
    {
        $sid = new Session;
        $sid->start();
        $sid->init( 36000 );
        $sid->addNode( 'start', date( 'd/m/Y - h:i' ) );
        $sid->addNode( 'user_id', $db->data[0]['user_id'] );
        $sid->addNode( 'user_login', $db->data[0]['user_login'] );
        @header( 'Location: index.php' );
    }
    else
    {
        ?>

        <script> 
            window.onload = function()
            {
                notify('<h1>Login/Senha incorretos!</h1>');
            }
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
    <head>  
        <title>Dream Gallery - Admin</title>  
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
        <div id="status-bar">
            <div class="container_12">
                <ul id="status-infos">
                    <li class="spaced">Dream Gallery :: <strong> Rafael Clares</strong></li>
                </ul>                          
            </div>        
        </div>         
        <div id="wrap" class="container_12">
            <div class="grid_12">
                <p>&nbsp;</p>
                <div class="block-border">
                    <div class="block-content">
                        <h1>Área Restrita - Login</h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                            </ul>
                        </div>
                        <div id="home" style="min-height: 500px;">
                            <p>&nbsp;</p>
                            <div class="grid_4">
                                <p class="message warning">Login e Password requeridos!</p>
                                <form method="post" class="form" action="login.php">
                                    <p class="one-line-input grey-bg with-padding">
                                        <label for="user_login" class="required">Login</label>
                                        <input type="text" name="user_login" id="user_login">
                                    </p>
                                    <p class="one-line-input grey-bg with-padding">
                                        <label for="user_password" class="required">Password</label>
                                        <input type="password" name="user_password" id="user_password">
                                    </p>
                                    <p>
                                        <button>Login</button>
                                    </p>
                                </form>	
                            </div>
                            <p>&nbsp;</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>