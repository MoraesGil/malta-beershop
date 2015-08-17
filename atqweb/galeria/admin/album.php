<?php
@header( 'Content-Type: text/html; charset=utf-8' );
require_once '../database/mysql.php';
$db = new Mysql;
/*require_once '../class/Session.class.php';

$sid = new Session;
$sid->start();
if ( !$sid->check() )
{
    @header( 'Location: login.php' );
}*/

if ( isset( $_GET['create'] ) && !empty( $_POST['new'] ) )
{
    $album_name = trim( preg_replace( '/\s+/', ' ', $_POST['new'] ) ) ;
    if ( $album_name != "" )
    {
        $db->query( "insert into albuns (album_name, album_user) values ('$album_name', '1');" );
        $album_id = mysql_insert_id();
        @header( "Location: album.php?edit=$album_id" );
    }
}

if ( isset( $_GET['delete'] ) && !empty( $_GET['delete'] ) )
{
    $album_id = $_GET['delete'];
    $db->query( "select * from fotos where foto_album = $album_id;" )->fetchAll();
    if ( $db->rows >= 1 )
    {
        foreach ( $db->data as $foto )
        {
            $f = ( object ) $foto;
            $file = "../fotos/$f->foto_url";
            if ( file_exists( $file ) )
            {
                @unlink( $file );
            }
        }
    }
    $db->query( "delete from albuns where album_id = $album_id" );
    @header( "Location: album.php" );
}
?>
<!DOCTYPE html>
<html>
    <head>  
        <title>Album</title>  
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
        <link href="../css/admin.css" rel="stylesheet" type="text/css" />
        <!-- Generic libs -->
        <script type="text/javascript" src="tpl/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="tpl/js/html5.js"></script>
        <script type="text/javascript" src="tpl/js/old-browsers.js"></script>
        <!-- Template core functions -->
        <script type="text/javascript" src="tpl/js/common.js"></script>
        <script type="text/javascript" src="tpl/js/jquery.tip.js"></script>
        <script type="text/javascript" src="tpl/js/standard.js"></script>
        <!--[if lte IE 8]><script type="text/javascript" src="tpl/js/standard.ie.js"></script><![endif]-->

        <script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link href="uploadfy/css/uploadify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="uploadfy/js/swfobject.js"></script>
        <script type="text/javascript" src="uploadfy/js/jquery.uploadify.v2.1.4.min.js"></script>
        <script src="js/jquery.scrollto.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/album.js"></script>
    </head>
    <body>	
<!--        <div id="status-bar">
            <div class="container_12">
                <ul id="status-infos">
                    <li class="spaced">Dream Gallery :: <strong> Rafael Clares</strong></li>
                </ul>             
            </div>        
        </div> -->
       <!-- <div id="control-bar" class="grey-bg clearfix">
            <div class="container_12">
                <div class="float-right mar-r-15"> 
                    <button type="button" class="grey" id="toDown">Fim da Página</button> 
                    <button type="button" class="grey" id="toUp">Topo da Página</button> 
                </div>
            </div>
        </div> -->

        <div id="wrap" class="container_12">
            <div class="grid_12">
                <p>&nbsp;</p>

                <div class="block-border">
                    <div class="block-content">
                        <h1>Álbuns - Postar Fotos
                            <?php
                            if ( isset( $_GET ) && !empty( $_GET ) )
                            {
                                ?>
                                <a href="album.php" class="with-tip"  title="Todos os Álbuns">
                                    <img src="tpl/images/back_blue.png" width="16" height="16"> 
                                    Voltar
                                </a>                        
                            <?php } ?>
                        </h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                                <!--<li><a href="index.php" title="Home">
                                        <img src="tpl/images/icons/home.png" width="24" height="24"></a>
                                </li>-->

                                <li class="current"><a href="album.php" title="Álbuns">
                                        <img src="tpl/images/icons/gallery.png" width="24" height="24"></a>
                                </li>

                               <!-- <li><a href="usuario.php" title="Usuários">
                                        <img src="tpl/images/icons/users.png" width="24" height="24"></a>
                                </li>
                                <li><a href="login.php?logout=true" title="Logout">
                                        <img src="tpl/images/icons/logout-gray.png" width="24" height="24"></a>
                                </li>	-->				
                            </ul>
                        </div>
                        <div id="home" style="min-height: 600px; overflow-y:auto; ">
                            <p>&nbsp;</p>

                            <?php
                            if ( isset( $_GET['edit'] ) )
                            {
                                $album_id = $_GET['edit'];
                                ?>
                                <script type="text/javascript">
                                    $(document).ready(function() {                
                                        $('#fupload').uploadify({
                                            'uploader'  : 'uploadfy/js/uploadify.swf',
                                            'script'    : 'upload.php?album_id=<?= $album_id ?>',
                                            'cancelImg' : 'uploadfy/js/cancel.png',
                                            'folder'    : '../fotos',
                                            'auto'      : true,
                                            'multi'     : true,
                                            'buttonText'  : 'Upload',
                                            'sizeLimit'   : 1000002400,
                                            'width'       : 186,
                                            'height'       : 55,  
                                            //'queueSizeLimit' : 10,
                                            'uploadLimit' : 1,
                                            'fileExt'     : '*.jpg;*.gif;*.png;*.bmp;*.jpeg',
                                            'fileDesc'    : 'Imagens (JPG, GIF, PNG, BMP)',
                                            'buttonImg'   : '../images/upload.png',
                                            'onAllComplete': function(event, queueID, fileObj,response){
                                                //'onComplete': function(event, queueID, fileObj,response){
                                                // var response = JSON.parse(response);
                                                //alert(response.url)
                                                //window.location = baseUri+'/admin/campanha/cliente/<!--{cliente_id}-->/#&tab-mini&'+response.time ;
                                                window.location = 'album.php?edit=<?= $album_id ?>';
                                                //$('#banner_mini_img').html('<img src="<!--{baseUri}-->/application/banners/'+response.url+'" id="'+response.id+'" />');
                                                //$("#mini .info").show();
                                            }		    
                                        })
                                    })
                                </script>                            
                                <?php
                                $db->query( "select * from albuns  where album_id = $album_id" )->fetchAll();
                                if ( $db->rows >= 1 )
                                {
                                    $album_name = $db->data[0]['album_name'];
                                    $album_id = $db->data[0]['album_id'];
                                    ?>
                                    <div class="box-album">                                        
                                        <ul class="box-album-head">

                                            <p class="one-line-input grey-bg with-padding">
                                                <span class="relative">
                                                    <label for="<?= $album_id ?>">Nome do Álbum</label>
                                                    <input type="text" name="album_name" id="<?= $album_id ?>" class="album_name with-tip" title="Nome do Álbum" value="<?= $album_name ?>" />
                                                    <input type="hidden" name="album_user" id="album_user" value="4" />                                                   <button class="grey updateAlbumName">Atualizar</button>
                                                </span>					
                                            </p>

                                        </ul>
                                        <span class="align-right btn-upload">
                                            <input id="fupload" name="upload" type="file" class="hides" />
                                        </span>                                        
                                        <?php
                                        $db->query( "select * from fotos join albuns on (album_id = foto_album) where foto_album = $album_id order by foto_pos asc" )->fetchAll();
                                        if ( $db->rows >= 1 )
                                        {
                                            $fotos = $db->data;
                                            echo "<ul class=\"sortable\" style=\"list-style-type: none; margin: 0; padding: 0;\">";
                                            foreach ( $fotos as $foto )
                                            {
                                                $f = ( object ) $foto;
                                                echo "<li class=\"lisort\" id=\"item_$f->foto_id\" class=\"div_$f->foto_id\">";
                                                if ( $f->foto_caption == "" )
                                                {
                                                    $f->foto_caption = "";
                                                }
                                                $f->foto_caption = utf8_decode( $f->foto_caption );
                                                echo '<ul class="box-foto-edit extended-list div_' . $f->foto_id . '">' . "\n";
                                                echo "<li class=\"div_$f->foto_id\">" . "\n";
                                                ?>
                                                <ul class="mini-menu with-children-tip">
                                                    <li><a href="javascript:void(0)" title="Atualizar" id="<?= $f->foto_id ?>" album="<?= $album_id ?>" class="refresh"><img src="tpl/images/icons/refresh.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Definir Capa" id="<?= $f->foto_id ?>" album="<?= $album_id ?>" class="cover"><img src="tpl/images/icons/photo.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Remover" id="<?= $f->foto_id ?>" class="delete"><img src="tpl/images/cross-circle.png" width="16" height="16"></a></li>
                                                </ul>   
                                                <img class="pic with-tip tip-bottom" title="mover posição" src="../thumb.php?img=fotos/<?= $f->foto_url ?>" width="174" height="136" />
                                                <input type="text" class="with-tip foto_caption" id="f_<?= $f->foto_id ?>"  value="<?= $f->foto_caption ?>" maxlength="74" title="Info 1" />
                                                <input type="text" class="with-tip tip-bottom foto_info" id="if_<?= $f->foto_id ?>"  value="<?= $f->foto_info ?>" maxlength="15" title="Info 2" />
                                                <?php
                                                echo "</li>\n";
                                                echo "</ul>\n";
                                                echo '</li>' . "\n";
                                            }
                                            echo '</ul>';
                                        }
                                    }
                                }
                                else
                                {
                                    ?>

                                    <div class="box-album"> 
                                        <form name="f" action="album.php?create=true" method="post">
                                            <ul class="box-album-head" style="width: 101%; margin:0; margin-bottom: 20px; padding: 0 !important">
                                                <p class="one-line-input grey-bg with-padding">
                                                    <span class="relative">
                                                        <label for="new">Nome do Álbum</label>
                                                        <input type="text" name="new" id="new" class="album_name with-tip" title="Nome do Álbum" />
                                                        <button class="grey">Criar</button>
                                                    </span>					
                                                </p>
                                            </ul>
                                        </form>
                                    </div>

                                    <table class="table w-all" id="tbl_list_serv" style="width: 100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="10">ID</th>
                                                <th>Álbum</th>
                                                <th width="60">Fotos</th>
                                                <th width="50">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>                             
                                            <?php
                                            $db->query( "select * from albuns order by album_name asc" )->fetchAll();
                                            if ( $db->rows >= 1 )
                                            {
                                                $albuns = $db->data;
                                                foreach ( $albuns as $album )
                                                {
                                                    $alb = ( object ) $album;
                                                    $alb->album_name = $alb->album_name;
                                                    $db->query( "select * from fotos where foto_album = $alb->album_id" )->fetchAll();
                                                    echo "<tr>";
                                                    echo "<td> $alb->album_id </td>";
                                                    echo "<td> $alb->album_name </td>";
                                                    echo "<td> $db->rows </td>";
                                                    ?>
                                                <td> 
                                                    <a class="with-tip edit" title="editar álbum" href="album.php?edit=<?= $alb->album_id ?>">
                                                        <img src="tpl/images/pencil.png" width="16" height="16">
                                                    </a> 
                                                    &nbsp;
                                                    <a class="with-tip deleteAlbum" title="remover álbum"  id="<?= $alb->album_id ?>" href="javascript:void(0)">
                                                        <img src="tpl/images/cross-circle.png" width="16" height="16">
                                                    </a> 
                                                </td>

                                                <?php
                                                echo "</tr>";
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
                                    <?php
                                }
                                ?>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <p>&nbsp;</p>

                    </div>
                </div>
            </div>
            <div id="footer"></div>
    </body>
</html>