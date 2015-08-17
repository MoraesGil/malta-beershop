<?php 
class Usuarios {	
	private $host;
	private $user;
	private $pass;
	private $db;
	private $connection;
		 

	public $id;
	public $nome;
	public $email;
	public $senha;
	public $tipo;
	
	
		
		
		function cadastrarUsuario(){

			
			$verifica = mysql_query("SELECT email FROM usuarios WHERE email = '$this->email';");
			if (mysql_num_rows($verifica) == "0") {				
			$sql = mysql_query("INSERT INTO `usuarios` 
								(`nome`, `email`, `senha`,`tipo`) 
								VALUES 
								('$this->nome', '$this->email', '$this->senha', '$this->tipo'
								)");				
			} 
			if($sql) {
			echo '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso! </div>';
			}else {
   			echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
			}
	
		
		}
			
		
		function atualizarUsuario() {
		if($this->senha == "") {
		$sql="update usuarios set
		nome='$this->nome',
		tipo='$this->tipo'
       	where id='$this->id'";
		} else
		{
		$sql="update usuarios set
		nome='$this->nome',
		senha='$this->senha',
        tipo='$this->tipo'
       	where id='$this->id'";
		}
		
	   
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Usuário atualizado com sucesso! </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
		
		function excluirUsuario() {
	
			
		$sql="delete from usuarios where
		id='$this->id' LIMIT 1";
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<script type="text/javascript">alert("Usuário deletado com sucesso!!");</script>';
			}else{
				echo '<script type="text/javascript">alert("Falha ao deletar. Tente novamente");</script>';
				echo '<script type="text/javascript">window.location = "UsuariosCadastrados";</script>';
			}	
			
		}
		
		

}
?>