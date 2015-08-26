<?php 
	if(isset($_POST['cadastrarUsuarios'])){
	
					$db->conecta();
					
					$usuarios->nome = mysql_escape_string($_POST['nome']);
					$usuarios->email = mysql_escape_string($_POST['email']);
					$usuarios->senha = mysql_escape_string(md5($_POST['senha']));
					$usuarios->tipo = mysql_escape_string($_POST['tipo']);
					
					$usuarios->cadastrarUsuario();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Usuários</p>

    <form class="form" role="form" action="" method="post">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar o usuário.</h3><br>
		Nome:
        <input type="text" class="form-control" required autofocus name="nome" >
        E-mail:<input type="email" class="form-control"  required autofocus name="email">
        Senha:
        <input type="password" class="form-control"  required name="senha" >
        Tipo:
        <select name="tipo" class="form-control" required>
        <option value="">Selecione o Campo</option>
        <option value="ADMIN">Administrador</option>
        <option value="USUARIO">Usuário</option>
        </select><br>

   
        <input class="" id="cadastrarUsuarios" name="cadastrarUsuarios" value="Cadastrar Usuário" type="submit">
      </form>
      
      	<br>
