
   		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <!--  <link href="galeria/admin/tpl/css/all.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/960_12.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/simple-lists.css" rel="stylesheet" type="text/css">-->
        <link href="galeria/admin/tpl/css/reset.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/common.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/standard.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/form.css" rel="stylesheet" type="text/css" />
        <link href="galeria/admin/tpl/css/simple-lists.css" rel="stylesheet" type="text/css" />
        <link href="galeria/admin/tpl/css/block-lists.css" rel="stylesheet" type="text/css" />
        <link href="galeria/admin/tpl/css/table.css" rel="stylesheet" type="text/css" />
        <link href="galeria/css/admin.css" rel="stylesheet" type="text/css" />
        <!-- Generic libs -->
        
        <script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
        <script type="text/javascript" src="galeria/admin/tpl/js/html5.js"></script>
        <script type="text/javascript" src="galeria/admin/tpl/js/old-browsers.js"></script>
        <!-- Template core functions -->
        <script type="text/javascript" src="galeria/admin/tpl/js/common.js"></script>
        <script type="text/javascript" src="galeria/admin/tpl/js/jquery.tip.js"></script>
        <script type="text/javascript" src="galeria/admin/tpl/js/standard.js"></script>
        <!--[if lte IE 8]><script type="text/javascript" src="tpl/js/standard.ie.js"></script><![endif]-->


        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link href="galeria/admin/uploadfy/css/uploadify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="galeria/admin/uploadfy/js/swfobject.js"></script>
        <script type="text/javascript" src="galeria/admin/uploadfy/js/jquery.uploadify.v2.1.4.min.js"></script>
        <script src="galeria/admin/js/jquery.scrollto.js" type="text/javascript"></script>
        <script type="text/javascript" src="galeria/admin/js/album.js" charset="utf-8"></script>
        
        



 

<?php
@header( 'Content-Type: text/html; charset=UTF-8' );
require_once 'Classes/Mysql.php';
$db = new Mysql();

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
	$album_tipo = trim( preg_replace( '/\s+/', ' ', $_POST['album_tipo'] ) ) ;
    if ( $album_name != "" )
    {
		$db->conecta();	
        $db->query( "insert into albuns (album_name, album_user, album_tipo) values ('$album_name', '".$usuario->getId()."', '$album_tipo');" );
        $album_id = mysql_insert_id();
        @header( "Location: album&edit=$album_id" );
		echo "   <script> window.location = 'album&edit=$album_id'; </script>";
		$db->fechaConexao();
    }
}

if ( isset( $_GET['delete'] ) && !empty( $_GET['delete'] ) )
{	
	$db->conecta();	
    $album_id = $_GET['delete'];
    $db->query( "select * from fotos where foto_album = $album_id;" )->fetchAll();
    if ( $db->rows >= 1 )
    {
        foreach ( $db->data as $foto )
        {
            $f = ( object ) $foto;
            $file = "galeria/fotos/$f->foto_url";
            if ( file_exists( $file ) )
            {
                @unlink( $file );
            }
        }
    }
    $db->query( "delete from albuns where album_id = $album_id" );
    @header( "Location: album" );
	$db->fechaConexao();
}
?>
	
  <p>Você está em -> <a href="Home">Home </a>-> Fotos	</p>

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
                                <a href="album" class="with-tip"  title="Todos os Álbuns">
                                    <img src="galeria/admin/tpl/images/back_blue.png" width="16" height="16"> 
                                    Voltar
                                </a>                        
                            <?php } ?>
                        </h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                                <!--<li><a href="index.php" title="Home">
                                        <img src="tpl/images/icons/home.png" width="24" height="24"></a>
                                </li>-->

                                <li class="current"><a href="album" title="Álbuns">
                                        <img src="galeria/admin/tpl/images/icons/gallery.png" width="24" height="24"></a>
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
                                            'uploader'  : 'galeria/admin/uploadfy/js/uploadify.swf',
                                            'script'    : 'galeria/admin/upload.php?album_id=<?php echo $album_id; ?>',
                                            'cancelImg' : 'galeria/admin/uploadfy/js/cancel.png',
                                            'folder'    : 'galeria/fotos',
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
                                            'buttonImg'   : 'galeria/images/upload.png',
                                            'onAllComplete': function(event, queueID, fileObj,response){
                                                //'onComplete': function(event, queueID, fileObj,response){
                                                // var response = JSON.parse(response);
                                                //alert(response.url)
                                                //window.location = baseUri+'/admin/campanha/cliente/<!--{cliente_id}-->/#&tab-mini&'+response.time ;
                                                window.location = 'album&edit=<?php echo $album_id; ?>';
                                                //$('#banner_mini_img').html('<img src="<!--{baseUri}-->/application/banners/'+response.url+'" id="'+response.id+'" />');
                                                //$("#mini .info").show();
                                            }		    
                                        })
                                    })
                                </script>                            
                                <?php
								$db->conecta();	
                                $db->query( "select * from albuns  where album_id = $album_id" )->fetchAll();
                                if ( $db->rows >= 1 )
                                {
                                    $album_name = $db->data[0]['album_name'];
                                    $album_id = $db->data[0]['album_id'];
									$album_tipoSel = $db->data[0]['album_tipo'];
                                    ?>
                                             
                                    <div class="box-album">                                        
                                        <ul class="box-album-head">
											
                                          
                                                <span class="relative">
                                                    <label for="<?php $album_id ?>">Nome do &Aacute;lbum</label>
                                                    <input type="hidden" name="album_tipo" class="album_tipo with-tip" value="Fotos" />
                                                    <input type="text" name="album_name" id="<?php echo $album_id; ?>" class="album_name with-tip" title="Nome do Álbum" value="<?php echo $album_name; ?>" />                                                
                                                    <input type="hidden" name="album_user" id="album_user" class="album_user with-tip" value="<?php echo $usuario->getId(); ?>" />                                                   <button class="grey updateAlbumName">Atualizar</button>
                                                </span>					
                                            </p>

                                        </ul>
                                        <span class="align-right btn-upload">
                                            <input id="fupload" name="upload" type="file" class="hides" />
                                        </span>                                        
                                        <?php
										$db->conecta();	
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
                                                $f->foto_caption = $f->foto_caption ;
                                                echo '<ul class="box-foto-edit extended-list div_' . $f->foto_id . '">' . "\n";
                                                echo "<li class=\"div_$f->foto_id\">" . "\n";
                                                ?>
                                                <ul class="mini-menu with-children-tip">
                                                    <li><a href="javascript:void(0)" title="Atualizar" id="<?php echo $f->foto_id; ?>" album="<?php echo $album_id; ?>" class="refresh"><img src="galeria/admin/tpl/images/icons/refresh.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Definir Capa" id="<?php echo $f->foto_id; ?>" album="<?php echo $album_id ?>" class="cover"><img src="galeria/admin/tpl/images/icons/photo.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Remover" id="<?php echo $f->foto_id; ?>" class="delete"><img src="galeria/admin/tpl/images/cross-circle.png" width="16" height="16"></a></li>
                                                </ul>   
                                                <img class="pic with-tip tip-bottom" title="mover posição" src="galeria/thumb2.php?img=fotos/<?php echo $f->foto_url; ?>" width="174" height="136" />
                                                <input type="text" class="with-tip foto_caption" id="f_<?php echo $f->foto_id; ?>"  value="<?php echo $f->foto_caption; ?>" maxlength="74" title="Info 1" />
                                                <input type="text" class="with-tip tip-bottom foto_info" id="if_<?php echo $f->foto_id; ?>"  value="<?php echo $f->foto_info; ?>" maxlength="15" title="Info 2" />
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
                                        <form name="f" action="album&create=true" method="post">
                                        <input type="hidden" name="album_tipo" class="album_tipo with-tip" value="Fotos" />
                                            <ul class="box-album-head" style="width: 101%; margin:0; margin-bottom: 20px; padding: 0 !important">
                                                <p class="one-line-input grey-bg with-padding">
                                                    <span class="relative">
                                                    
                                                        <label for="new">Nome do &Aacute;lbum</label>
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
                                                <th width="60">Usuário</th>
                                                <th width="60">Tipo</th>
                                                <th width="60">Fotos</th>
                                                <th width="50">A&ccedil;&otilde;es</th>
                                            </tr>
                                        </thead>
                                        <tbody>                             
                                            <?php
											$db->conecta();	
                                            $db->query( "select * from albuns order by album_id desc" )->fetchAll();
                                            if ( $db->rows >= 1 )
                                            {
                                                $albuns = $db->data;
                                                foreach ( $albuns as $album )
                                                {
                                                    $alb = ( object ) $album;
                                                    $alb->album_name = $alb->album_name;
                                                    $db->query( "select * from fotos where foto_album = $alb->album_id" )->fetchAll();
                                                    echo "<tr>";
                                                    echo "<td>" .$alb->album_id." </td>";
                                                    echo "<td>" .$alb->album_name." </td>";
													?>
													<td>
                                                    <?php
													$sqlAutor = "SELECT * FROM usuarios WHERE id = '".$alb->album_user."'  LIMIT 1;";
												 	$resultAutor = mysql_query($sqlAutor);
												  	while ($linhaAutor = mysql_fetch_array($resultAutor)) {
				  									echo $linhaAutor['nome']; }
													 ?> 
                                                     </td>
													<?php
                                                    echo "<td>" .$alb->album_tipo." </td>";
                                                    echo "<td>" .$db->rows." </td>";
                                                    ?>
                                                <td> 
                                                <?php if ($usuario->getTipo() == "ADMIN") {  ?>
                                                    <a class="with-tip edit" title="editar álbum" href="album&edit=<?php echo $alb->album_id; ?>">
                                                        <img src="galeria/admin/tpl/images/pencil.png" width="16" height="16">
                                                    </a> 
                                                    &nbsp;
                                                    <a class="with-tip deleteAlbum" title="remover álbum"  id="<?php echo $alb->album_id; ?>" href="javascript:void(0)">
                                                        <img src="galeria/admin/tpl/images/cross-circle.png" width="16" height="16">
                                                    </a> 
                                                <?php } else if ( $usuario->getId() == $alb->album_user ) { ?>
                                                  <a class="with-tip edit" title="editar álbum" href="album&edit=<?php echo $alb->album_id; ?>">
                                                        <img src="galeria/admin/tpl/images/pencil.png" width="16" height="16">
                                                    </a> 
                                                    &nbsp;
                                                    <a class="with-tip deleteAlbum" title="remover álbum"  id="<?php echo $alb->album_id; ?>" href="javascript:void(0)">
                                                        <img src="galeria/admin/tpl/images/cross-circle.png" width="16" height="16">
                                                    </a> 
                                                <?php } else {} ?>
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
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </tfoot>                                        
                                    </table>
                                    <?php
									$db->fechaConexao();
                                }
								
                                ?>
                            </div>
                 
                        </div>
                  
                    </div>
                </div>
            
