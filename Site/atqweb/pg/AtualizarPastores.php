
   		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <!--  <link href="galeria/admin/tpl/css/all.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/960_12.css" rel="stylesheet" type="text/css">
        <link href="galeria/admin/tpl/css/simple-lists.css" rel="stylesheet" type="text/css">-->
        <link href="noticias_fotos/admin/tpl/css/reset.css" rel="stylesheet" type="text/css">
        <link href="noticias_fotos/admin/tpl/css/common.css" rel="stylesheet" type="text/css">
        <link href="noticias_fotos/admin/tpl/css/standard.css" rel="stylesheet" type="text/css">
        <link href="noticias_fotos/admin/tpl/css/form.css" rel="stylesheet" type="text/css" />
        <link href="noticias_fotos/admin/tpl/css/simple-lists.css" rel="stylesheet" type="text/css" />
        <link href="noticias_fotos/admin/tpl/css/block-lists.css" rel="stylesheet" type="text/css" />
        <link href="noticias_fotos/admin/tpl/css/table.css" rel="stylesheet" type="text/css" />
        <link href="noticias_fotos/css/admin.css" rel="stylesheet" type="text/css" />
        <!-- Generic libs -->
        
        <script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
        <script type="text/javascript" src="noticias_fotos/admin/tpl/js/html5.js"></script>
        <script type="text/javascript" src="noticias_fotos/admin/tpl/js/old-browsers.js"></script>
        <!-- Template core functions -->
        <script type="text/javascript" src="noticias_fotos/admin/tpl/js/common.js"></script>
        <script type="text/javascript" src="noticias_fotos/admin/tpl/js/jquery.tip.js"></script>
        <script type="text/javascript" src="noticias_fotos/admin/tpl/js/standard.js"></script>
        <!--[if lte IE 8]><script type="text/javascript" src="tpl/js/standard.ie.js"></script><![endif]-->


        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link href="noticias_fotos/admin/uploadfy/css/uploadify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="noticias_fotos/admin/uploadfy/js/swfobject.js"></script>
        <script type="text/javascript" src="noticias_fotos/admin/uploadfy/js/jquery.uploadify.v2.1.4.min.js"></script>
        <script src="noticias_fotos/admin/js/jquery.scrollto.js" type="text/javascript"></script>
        <script type="text/javascript" src="noticias_fotos/admin/js/album.js" charset="utf-8"></script>
        
        

<?php 

	if(isset($_POST['atualizar'])){
					$db->conecta();
					$pastores->atualizarPastores();	
					$db->fechaConexao();
					
}
@$id = $_REQUEST['id'];
$db->conecta();
$db->query("SELECT * FROM noticias n
INNER JOIN usuarios u ON
n.usuario_id = u.id
 WHERE not_id='$id' LIMIT 1;")->fetchAll();
    if ( $db->rows >= 1 ) 
		{ // linhas
     foreach ( $db->data as $Loop )
       		{// loop conteudo
            $ln = ( object ) $Loop;
?>
        
        <p>Você está em -> <a href="Home">Home </a>-> Atualizar Pastores</p>
        <p align="right">Última atualização por: <?php echo $ln->nome ?></p>
                   
                   
  <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para atualizar.</h3><br>
        
        

       
        Nome:
        <input type="text" class="form-control" required  name="not_titulo" value='<?php echo $ln->not_titulo; ?>' >
        Nome para exibir nas mensagens:
        <input type="text" class="form-control" required  name="not_titulo_mensagem" value='<?php echo $ln->not_titulo_mensagem; ?>'  >
        Imagem:<br>
        <img src="pastores/<?php echo $ln->not_bg_titulo; ?>" style="height:60px; " />
        <input type="file" class="form-control"  name="not_bg_titulo" />
         URL:
        <input type="text" class="form-control" required  name="not_url"  value='<?php echo $ln->not_url; ?>'>
        <input type="hidden" name="not_tipo" value="P">
        Visualizar:
        <select name="not_view" class="form-control" >
        <option value="s" <?php if ($ln->not_view == "s") { echo 'selected="selected"'; }  ?>>Sim</option>
         <option value="n" <?php if ($ln->not_view == "n") { echo 'selected="selected"'; }  ?>>Não</option>
        </select>
        Conteúdo:
        <textarea required class="form-control" name="not_conteudo" style="height:600px; width:100%;">
        <?php echo $ln->not_conteudo; ?>
        </textarea>               
		                 
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />
        <input type="hidden" name="not_id" value="<?php echo $ln->not_id; ?>"><br />
          <input class="" id="atualizar" name="atualizar" value="Atualizar" type="submit">
      </form>
        <div id="wrap" class="container_12">
            <div class="grid_12">
                <p>&nbsp;</p>

                <div class="block-border">
                    <div class="block-content">
                        <h1><?php echo $ln->not_titulo; ?> - Postar Fotos
                            <?php
                            if ( isset( $_GET ) && !empty( $_GET ) )
                            {
                                ?>
                                <a href="MinisterioCadastrados" class="with-tip"  title="Todas os Ministérios">
                                    <img src="noticias_fotos/admin/tpl/images/back_blue.png" width="16" height="16"> 
                                    Voltar
                                </a>                        
                            <?php } ?>
                        </h1>
                        <div class="block-controls">
                            <ul class="controls-tabs js-tabs with-children-tip">
                                <!--<li><a href="index.php" title="Home">
                                        <img src="tpl/images/icons/home.png" width="24" height="24"></a>
                                </li>-->

                              <!--  <li class="current"><a href="album" title="Álbuns">
                                        <img src="noticias_fotos/admin/tpl/images/icons/gallery.png" width="24" height="24"></a>
                                </li>-->

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

      
                                <script type="text/javascript">
                                    $(document).ready(function() {                
                                        $('#fupload').uploadify({
                                            'uploader'  : 'noticias_fotos/admin/uploadfy/js/uploadify.swf',
                                            'script'    : 'noticias_fotos/admin/upload.php?not_id=<?php echo $id; ?>',
                                            'cancelImg' : 'noticias_fotos/admin/uploadfy/js/cancel.png',
                                            'folder'    : 'noticias_fotos/fotos',
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
                                            'buttonImg'   : 'noticias_fotos/images/upload.png',
                                            'onAllComplete': function(event, queueID, fileObj,response){
                                                //'onComplete': function(event, queueID, fileObj,response){
                                                // var response = JSON.parse(response);
                                                //alert(response.url)
                                                //window.location = baseUri+'/admin/campanha/cliente/<!--{cliente_id}-->/#&tab-mini&'+response.time ;
                                                window.location = 'AtualizarPastores&id=<?php echo $id; ?>';
                                                //$('#banner_mini_img').html('<img src="<!--{baseUri}-->/application/banners/'+response.url+'" id="'+response.id+'" />');
                                                //$("#mini .info").show();
                                            }		    
                                        })
                                    })
                                </script>                            
                                <?php
								$db->conecta();	
                                $db->query( "select * from noticias  where not_id = $id" )->fetchAll();
                                if ( $db->rows >= 1 )
                                {
                                  
                                    ?>
                                             
                               <div class="box-album">                                        
                                        <ul class="box-album-head">

                                        </ul>
                                        <span class="align-right btn-upload">
                                            <input id="fupload" name="upload" type="file" class="hides" />
                                        </span>                                             
                                        <?php
										$db->conecta();	
                                        $db->query( "SELECT * FROM noticias_fotos nf
										INNER JOIN noticias n ON 
										nf.not_id = n.not_id
										WHERE nf.not_id = $id 
										ORDER BY nfto_pos ASC" )->fetchAll();
                                        if ( $db->rows >= 1 )
                                        {
                                            $fotos = $db->data;
                                            echo "<ul class=\"sortable\" style=\"list-style-type: none; margin: 0; padding: 0;\">";
                                            foreach ( $fotos as $foto )
                                            {
                                                $f = ( object ) $foto;
                                                echo "<li class=\"lisort\" id=\"item_$f->nfto_id\" class=\"div_$f->nfto_id\">";
                                                if ( $f->nfto_caption == "" )
                                                {
                                                    $f->nfto_caption = "";
                                                }
                                                $f->nfto_caption = $f->nfto_caption ;
                                                echo '<ul class="box-foto-edit extended-list div_' . $f->nfto_id . '">' . "\n";
                                                echo "<li class=\"div_$f->nfto_id\">" . "\n";
                                                ?>
                                                <ul class="mini-menu with-children-tip">
                                                    <li><a href="javascript:void(0)" title="Atualizar" id="<?php echo $f->nfto_id; ?>" album="<?php echo $id; ?>" class="refresh"><img src="noticias_fotos/admin/tpl/images/icons/refresh.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Definir Capa" id="<?php echo $f->nfto_id; ?>" album="<?php echo $id ?>" class="cover"><img src="noticias_fotos/admin/tpl/images/icons/photo.png" width="16" height="16"></a></li>
                                                    <li><a href="javascript:void(0)" title="Remover" id="<?php echo $f->nfto_id; ?>" class="delete"><img src="noticias_fotos/admin/tpl/images/cross-circle.png" width="16" height="16"></a></li>
                                                </ul>   
                                                <img class="pic with-tip tip-bottom" title="mover posição" src="noticias_fotos/thumb2.php?img=fotos/<?php echo $f->nfto_url; ?>" width="174" height="136" />
                                                <input type="text" class="with-tip foto_caption" id="f_<?php echo $f->nfto_id; ?>"  value="<?php echo $f->nfto_caption; ?>" maxlength="120" title="TITULO FOTO" />
                                                <input type="text" class="with-tip tip-bottom foto_info" id="if_<?php echo $f->nfto_id; ?>"  value="<?php echo $f->nfto_info; ?>" maxlength="30" title="OBS" />
                                                <?php
                                                echo "</li>\n";
                                                echo "</ul>\n";
                                                echo '</li>' . "\n";
                                            }
                                            echo '</ul>';
                                        }else {
									echo	"<p>No momento seu conteudo não contém nenhuma foto! <br>Clique em upload para enviar suas fotos... </br></p>";
									}
                                    } 
                             
								?>
        </div>
        
                   </div>
                 
                        </div>
                  
                    </div>
                </div>
            

<?php
		} // fecha loop conteudo
	}// fecha linhas
?>
<?php
$db->fechaConexao();
?>
      
      	<br>
