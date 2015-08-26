<?php
require_once 'Usuario.php';
require_once 'Autenticador.php';
require_once 'Sessao.php';
@header('Content-Type: text/html; charset=utf-8');



switch($_REQUEST['acao']) {

    case 'logar': {
        
        # Uso do singleton para instanciar
        # apenas um objeto de autenticação
        # e esconder a classe real de autenticação
        $aut = Autenticador::instanciar();
        
        # efetua o processo de autenticação
        if ($aut->logar($_REQUEST['email'], md5($_REQUEST['senha']))) {
            # redireciona o usuário para dentro do sistema
            header('location: ../Home');
        }
        else {
            # envia o usuário de volta para 
            # o form de login
			print "<script>alert('Usuário ou Senha Inválidos !')</script>";
			print "<meta http-equiv='refresh' content='0; URL=../index.php'>";	
        }
        
        
    } break;
    
    case 'sair': {
        
        # envia o usuário para fora do sistema
        # o form de login
        header('location: ../index.php');
        
    } break;
    
}