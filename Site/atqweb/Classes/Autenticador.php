<?php
include 'Mysql.php';
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

      $db = new Mysql();
      $db->conecta();
      $sess = Sessao::instanciar();
      $db->query("select *   from usuarios
      where usuarios.email ='{$email}' and
      usuarios.senha = '{$senha}'")->fetchAll();
      if ( $db->rows >= 1 )
      { // linhas
        foreach ( $db->data as $Loop )
        {// loop conteudo
          $ln = ( object ) $Loop;

          $usuario = new Usuario();
          $usuario->setEmail($ln->email);
          $usuario->setId($ln->id);
          $usuario->setNome($ln->nome);
          $usuario->setSenha($ln->senha);
          $usuario->setTipo($ln->tipo);
          $sess->set('usuario', $usuario);
          return true;
        }
      } else {
        return false;
      }
      $db->fechaConexao();

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
