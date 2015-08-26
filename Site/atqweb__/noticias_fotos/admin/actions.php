
<?php

@header( 'Content-Type: text/html; charset=UTF-8' );
require_once '../../Classes/Mysql.php';
/*require_once '../class/Session.class.php';*/
require_once '../class/Upload.class.php';
$db = new Mysql();
				
					
/*$sid = new Session;
$sid->start();
if ( !$sid->check() )
{
    @header( 'Location: login.php' );
}
*/
if ( isset( $_GET['action'] ) )
{
    $action = $_GET['action'];
    $action();
}

function fulltrim( $str )
{
    return trim( preg_replace( '/\s+/', ' ', $str ) );
}

function updateAlbumName()
{
	@header( 'Content-Type: text/html; charset=UTF-8' );
    $album_name = fulltrim( $_POST['album_name'] );
	$album_name2 = $album_name;
    $album_id = $_POST['album_id'];
	$album_user = fulltrim( $_POST['album_user'] );
	$album_tipo = fulltrim( $_POST['album_tipo'] );
  	$album_tipo2 = $album_tipo;
    $db = new Mysql();
	$db->conecta();	
    $db->query( "update albuns set album_name = '$album_name2', album_user = '$album_user', album_tipo = '$album_tipo2' where album_id = $album_id" );
    echo 'ALBUM ATUALIZADO: <Br/>' . $album_name;
	$db->fechaConexao();
}

function updateFotoCover()
{
	
    $not_id = $_POST['not_id'];
    $nfto_id = $_POST['nfto_id'];
    $db = new Mysql();
	$db->conecta();	
    $db->query( "update noticias_fotos set nfto_pos = 1 where not_id = $not_id" );
    $db->query( "update noticias_fotos set nfto_pos = 0 where nfto_id = $nfto_id" );
    echo 'Cover Atualizado <Br/>';
	$db->fechaConexao();
}

function updateFotoName()
{
	
    $nfto_caption = fulltrim( $_POST['nfto_caption'] );
    $nfto_info = fulltrim( $_POST['nfto_info'] );
    $nfto_id = preg_replace( '/f\_/', '', fulltrim( $_POST['nfto_id'] ) );
    $db = new Mysql();
	$db->conecta();	
    $db->query( "update noticias_fotos set nfto_caption = '$nfto_caption', nfto_info = '$nfto_info' where nfto_id = $nfto_id" );
    echo 'Foto Atualizada<Br/>' . $nfto_caption;
	$db->fechaConexao();
}

function deleteFoto()
{
	
    $nfto_id = $_POST['nfto_id'];


        $db = new Mysql();
		$db->conecta();	
        $db->query( "select * from noticias_fotos where nfto_id = $nfto_id" )->fetchAll();
        if ( $db->rows >= 1 )
        {
            $file = "../fotos/" . $db->data[0]['nfto_url'];
            if ( file_exists( $file ) )
            {
                @unlink( $file );
            }
            $db->query( "delete from noticias_fotos where nfto_id = $nfto_id" );
        }
        echo 'Foto Removida<Br/>';
		$db->fechaConexao();
   
}

function updateVideoPos()
{
    extract( $_POST );
    parse_str( $item, $arr );
    $db = new Mysql();
	$db->conecta();	
    foreach ( $arr['item'] as $pos => $nfto_id )
    {
        $db->query( "update noticias_fotos set nfto_pos = $pos where nfto_id = $nfto_id" );
    }
	$db->fechaConexao();
}

?>