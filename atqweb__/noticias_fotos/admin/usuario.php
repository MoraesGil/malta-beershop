<?php
require_once '../database/mysql.php';
require_once '../class/Session.class.php';
$db = new Mysql;
$sid = new Session;
$sid->start();
if ( !$sid->check() )
{
    @header( 'Location: login.php' );
}
if ( isset( $_GET['action'] ) && $_GET['action'] == 'incluir' )
{
    if ( isset( $_POST['user_login'] ) && !empty( $_POST['user_login'] ) && isset( $_POST['user_password'] ) && !empty( $_POST['user_password'] ) )
    {
        $user_password = md5( trim( $_POST['user_password'] ) );
        $user_login = trim( $_POST['user_login'] );
        $user_email = trim( $_POST['user_email'] );
        $db->query( "insert into users (user_login,user_password,user_email) values ('$user_login','$user_password','$user_email');" );
        @header( 'Location: usuario.php?success' );
    }
    else
    {
        @header( 'Location: usuario.php?error&action=novo' );
    }
}

if ( isset( $_GET['action'] ) && $_GET['action'] == 'atualiza' )
{
    if ( isset( $_POST['user_login'] ) && !empty( $_POST['user_login'] ) )
    {
        $user_id = $_GET['id'];
        $user_login = trim( $_POST['user_login'] );
        $user_email = trim( $_POST['user_email'] );

        $cond = " set user_login = '$user_login', user_email = '$user_email' ";
        if ( isset( $_POST['user_password'] ) && $_POST['user_password'] != "" )
        {
            $user_password = md5( trim( $_POST['user_password'] ) );
            $cond .= ", user_password = '$user_password' ";
        }
        $db->query( "update users  $cond where user_id = $user_id" );
        @header( 'Location: usuario.php?success' );
    }
}

if ( isset( $_GET['action'] ) && $_GET['action'] == 'remove' )
{
    if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) )
    {
        $user_id = $_GET['id'];
        $db->query( "delete from users where user_id = $user_id" );
        @header( 'Location: usuario.php?success' );
    }
}

if ( isset( $_GET['success'] ) )
{
    echo "<script>window.onload = function(){notify('<h1>Dados Atualizados</h1>')}</script>";
}
if ( isset( $_GET['error'] ) )
{
    echo "<script>window.onload = function(){notify('<h1>Informe todos os dados!</h1>')}</script>";
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
                        <h1>Área Restrita - Usuários
                            <?php
                            if ( !isset( $_GET['action'] ) && !isset( $_GET['edit'] ) )
                            {
                                ?>
                                <a href="usuario.php?action=novo" class="with-tip"  title="Incluir Novo Usuário">
                                    <img src="tpl/images/plus-circle-blue.png" width="16" height="16"> 
                                    Incluir Usuário
                                </a>                        
                                <?php
                            }
                            else
                            {
                                ?>
                                <a href="usuario.php" class="with-tip"  title="Todos os Usuários">
                                    <img src="tpl/images/back_blue.png" width="16" height="16"> 
                                    Voltar
                                </a>                        
                                <?php
                            }
                            ?>
                        </h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                                <li><a href="index.php" title="Home">
                                        <img src="tpl/images/icons/home.png" width="24" height="24"></a>
                                </li>

                                <li><a href="album.php" title="Álbuns">
                                        <img src="tpl/images/icons/gallery.png" width="24" height="24"></a>
                                </li>

                                <li class="current"><a href="usuario.php" title="Usuários">
                                        <img src="tpl/images/icons/users.png" width="24" height="24"></a>
                                </li>
                                <li><a href="login.php?logout=true" title="Logout">
                                        <img src="tpl/images/icons/logout-gray.png" width="24" height="24"></a>
                                </li>					
                            </ul>
                        </div>
                        <div id="home" style="min-height: 500px;">
                            <p>&nbsp;</p>

                            <?php
                            if ( isset( $_GET['action'] ) && $_GET['action'] == 'novo' )
                            {
                                ?>
                                <div id="home" style="min-height: 550px;">
                                    <p>&nbsp;</p>
                                    <div class="grid_6">

                                        <p class="message warning">Os campos marcados com (*) são de preenchimento obrigatório!</p>

                                        <form method="post" class="form" onsubmit="return valida()"
                                              action="usuario.php?action=incluir">

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_login"  class="required">Login</label>
                                                    <input type="text" name="user_login" id="user_login" size="50" autocomplete="off">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>				    

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_password"  class="required">Senha</label>
                                                    <input type="password" name="user_password" id="user_password" size="50" placeholder="Alterar senha">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>  

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_email"  class="">E-mail</label>
                                                    <input type="text" name="user_email" id="user_email" size="50" autocomplete="off">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>

                                            <p>
                                                <button>Cadastrar Usuário</button>
                                            </p>

                                        </form>	
                                    </div>
                                    <p>&nbsp;</p>
                                </div>                            
                                <?
                            }
                            elseif ( isset( $_GET['edit'] ) && !empty( $_GET['edit'] ) )
                            {
                                $user_id = $_GET['edit'];
                                $db->query( "select * from users where user_id = $user_id" )->fetchAll();
                                $u = ( object ) $db->data[0];
                                ?>
                                <div id="home" style="min-height: 550px;">
                                    <p>&nbsp;</p>
                                    <div class="grid_6">

                                        <p class="message warning">Os campos marcados com (*) são de preenchimento obrigatório!</p>

                                        <form method="post" class="form" onsubmit="return valida()"
                                              action="usuario.php?action=atualiza&id=<?= $u->user_id ?>">

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_login"  class="required">Login</label>
                                                    <input type="text" name="user_login" id="user_login" size="50" value="<?= $u->user_login ?>">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>				    


                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_password"  class="">Senha</label>
                                                    <input type="password" name="user_password" id="user_password" size="50" autocomplete="off"
                                                           placeholder="Alterar senha">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>  

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="user_email"  class="">E-mail</label>
                                                    <input type="text" name="user_email" id="user_email" size="50" value="<?= $u->user_email ?>">
                                                    <span class="check-null"></span>
                                                </span>						
                                            </p>


                                            <p>
                                                <button>Cadastrar Usuário</button>
                                            </p>

                                        </form>	
                                    </div>
                                    <p>&nbsp;</p>
                                </div>                            
                                <?
                            }
                            else
                            {
                                $db->query( "select * from users order by user_login asc" )->fetchAll();
                                ?>
                                <table class="table w-all" id="tbl_list_serv" style="width: 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10">ID</th>
                                            <th>Login</th>
                                            <th>E-mail</th>
                                            <th width="50">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>                              
                                        <?php
                                        if ( $db->rows >= 1 )
                                        {
                                            foreach ( $db->data as $user )
                                            {
                                                $u = ( object ) $user;
                                                echo "<tr>";
                                                echo "<td>$u->user_id</td>";
                                                echo "<td>$u->user_login</td>";
                                                echo "<td>$u->user_email</td>";
                                                echo "  <td> ";
                                                echo "<a class=\"with-tip edit\" title=\"editar usuário\" id=\"$u->user_id\" href=\"usuario.php?edit=$u->user_id\">";
                                                echo "<img src=\"tpl/images/pencil.png\" width=\"16\" height=\"16\">";
                                                echo "</a> &nbsp;";
                                                echo "<a class=\"with-tip delete\" title=\"remover usuário\"  id=\"$u->user_id\" href=\"usuario.php?action=remove&id=$u->user_id\">";
                                                echo "<img src=\"tpl/images/cross-circle.png\" width=\"16\" height=\"16\">";
                                                echo "</a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    }
                                    ?>
                                <tfoot>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </tfoot>                                        
                            </table>                                        
                        </div>
                        <p>&nbsp;</p>
                    </div>
                    <p>&nbsp;</p>

                </div>
            </div>
        </div>

    </body>
</html>