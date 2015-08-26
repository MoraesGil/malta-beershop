
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
	
    $foto_album = $_POST['foto_album'];
    $foto_id = $_POST['foto_id'];
    $db = new Mysql();
	$db->conecta();	
    $db->query( "update fotos set foto_pos = 1 where foto_album = $foto_album" );
    $db->query( "update fotos set foto_pos = 0 where foto_id = $foto_id" );
    echo 'Cover Atualizado <Br/>';
	$db->fechaConexao();
}

function updateFotoName()
{
	
    $foto_caption = fulltrim( $_POST['foto_caption'] );
    $foto_info = fulltrim( $_POST['foto_info'] );
    $foto_id = preg_replace( '/f\_/', '', fulltrim( $_POST['foto_id'] ) );
    $db = new Mysql();
	$db->conecta();	
    $db->query( "update fotos set foto_caption = '$foto_caption', foto_info = '$foto_info' where foto_id = $foto_id" );
    echo 'Foto Atualizada<Br/>' . $foto_caption;
	$db->fechaConexao();
}

function deleteFoto()
{
	
    $foto_id = $_POST['foto_id'];

    if ( $foto_id <= 57 )
    {
        echo "FOTO DO ALBUM DEMO NAO PODE SER REMOVIDO NESSA VERSAO";
    }
    else
    {
        $db = new Mysql();
		$db->conecta();	
        $db->query( "select * from fotos where foto_id = $foto_id" )->fetchAll();
        if ( $db->rows >= 1 )
        {
            $file = "../fotos/" . $db->data[0]['foto_url'];
            if ( file_exists( $file ) )
            {
                @unlink( $file );
            }
            $db->query( "delete from fotos where foto_id = $foto_id" );
        }
        echo 'Foto Removida<Br/>';
		$db->fechaConexao();
    }
}

function updateVideoPos()
{
    extract( $_POST );
    parse_str( $item, $arr );
    $db = new Mysql();
	$db->conecta();	
    foreach ( $arr['item'] as $pos => $foto_id )
    {
        $db->query( "update fotos set foto_pos = $pos where foto_id = $foto_id" );
    }
	$db->fechaConexao();
}

?>