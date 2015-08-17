<?php

require_once 'class/Canvas.class.php';
if ( isset( $_GET['img'] ) )
{
    $pic = $_GET['img'];
    $w = 476; //largura
    $h = 357; //altura
    $t = new Canvas;
    $t->carrega( $pic );
    $t->redimensiona( $w, $h, 'crop' );
    $t->grava();
}
?>