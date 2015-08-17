<?php

require_once '../../galeria/class/Canvas.class.php';
if ( isset( $_GET['img'] ) )
{
    $pic = $_GET['img'];
    $w = 369; //largura
    $h = 247; //altura
    $t = new Canvas;
    $t->carrega( $pic );
    $t->redimensiona( $w, $h, 'crop' );
    $t->grava();
}
?>