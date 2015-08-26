<?php
//Classe Escrita;
require("Banco.php");

class Escrita{
	//-----------------------------------------------------------------------
	//Aqui dizemos que esse atributo é private( só pode ser visto dentro da classe );
	private $banco;
	//-----------------------------------------------------------------------
	//Metodo para instanciar o objeto banco e passar a referencia do mesmo para
	//a variavel $banco e depois executa o metodo conectar() da classe Banco;
	public function escrita(){
		$this->banco = new Banco;// aqui instanciamos e passamos a referencia;
		$this->banco->conectar();//aqui executamos o metodo conectar da classe Banco;
	}
	//Fim metodo construtor;
	//-----------------------------------------------------------------------
	//Metodo para inserir um novo usuario ao banco de dados na tabela
	//users;
	public function cadastrarUsuario($nome, $email, $senha, $tipo){
		$nome = mysql_escape_string($nome);
		$email = mysql_escape_string($email);
		$senha = mysql_escape_string(md5($senha));
		$tipo = mysql_escape_string($tipo);
		/*$teste_sql = "SELECT email FROM usuarios WHERE email = '$email';";
		$query = $this->execSql($teste_sql);
		$row = mysql_fetch_array($query, MYSQL_NUM);
		mysql_free_result($query);
		if ($row != NULL){
			return false;
		}else{	*/
			$sql = mysql_query("INSERT INTO usuarios (nome, email, senha, tipo) VALUES ('$nome','$email','$senha','$tipo')");
			//$query = $this->execSql($sql);
			//$this->execSql($sql);
			/*if (mysql_affected_rows() == 1) {
				return true;
			}
			
		}*/
	}
}

?>
