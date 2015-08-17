<?php

abstract class Autenticador {

    
    private static $instancia = null;
    
    private function __construct() {}
    
    /**
     * 
     * @return Autenticador
     */
    public static function instanciar() {
        
        if (self::$instancia == NULL) {
            self::$instancia = new AutenticadorEmBanco();
        }
        
        return self::$instancia;
        
    }
    
    public abstract function logar($email, $senha);
    public abstract function esta_logado();
    public abstract function pegar_usuario();
    public abstract function expulsar();
    
}


class AutenticadorEmBanco extends Autenticador {
	
    public function esta_logado() {
        $sess = Sessao::instanciar();
        return $sess->existe('usuario');
    }

    public function expulsar() {
        //header('location: Controle.php?acao=sair');
		header('location: index.php');		
		
    }

    public function logar($email, $senha) {
		  

		$pdo = new PDO('mysql:dbname=malta;host=localhost', 'root', 'vertrigo');  				
		$sess = Sessao::instanciar();
        
        $sql = "select * 
               from usuarios 
               where usuarios.email ='{$email}' and
                   usuarios.senha = '{$senha}'";
                   
        $stm = $pdo->query($sql);
        
        if ($stm->rowCount() > 0) {
        
            $dados = $stm->fetch(PDO::FETCH_ASSOC);

            $usuario = new Usuario();
            $usuario->setEmail($dados['email']);
            $usuario->setId($dados['id']);
            $usuario->setNome($dados['nome']);
            $usuario->setSenha($dados['senha']);
			$usuario->setTipo($dados['tipo']);

            $sess->set('usuario', $usuario);
            return true;
            
        }
        else {
            return false;
        }
        
    }

    public function pegar_usuario() {
        $sess = Sessao::instanciar();
        
        if ($this->esta_logado()) {
            $usuario = $sess->get('usuario');
            return $usuario;
        }
        else {
            return false;
        }
    }

}

