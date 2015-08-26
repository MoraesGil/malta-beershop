<?php 
	if(isset($_POST['atualizarUsuarios'])){
	
$db->conecta();
					$usuarios->id = mysql_escape_string($_POST['id_atualizar']);
					$usuarios->nome = mysql_escape_string($_POST['nome']);
					if ($usuarios->senha = mysql_escape_string($_POST['senha']) == "") {
						$usuarios->senha = "";
					}
					else {
					$usuarios->senha = mysql_escape_string(md5($_POST['senha']));
					}
					$usuarios->tipo = mysql_escape_string($_POST['tipo']);
					$usuarios->atualizarUsuario();	
						$db->fechaConexao();
					
}
		?>
        <p>Você esta em -> <a href="Home">Home </a>-> Atualizar Usuários</p>

    <form class="form" role="form" action="" method="post">
<?php
$db->conecta();
	@$iduser = $_REQUEST['id'];
	$sql = mysql_query("SELECT * FROM usuarios WHERE id='$iduser'");
	while ($linha = mysql_fetch_array($sql)) {
	
	
	

?>    
        <h3 class="form-signin-heading">Preencha os dados para atualizar o usuário.</h3><br>
        <p>Obs.: Após atualizar clica em logout para encerrar a sua sessão e logue novamente para recarregar os novos dados.</p>
		Nome:
        <input type="text" class="form-control" required autofocus name="nome" value="<?php echo $linha['nome'];?>" >
        Senha:
        <input type="password" class="form-control"   name="senha" >
       
       
        Tipo:
        <select name="tipo" class="form-control" required>
        <?php  if ($usuario->getTipo() == "ADMIN") { ?>
        <option value="">Selecione o Campo</option>
        <option value="ADMIN" <?php if ($linha['tipo'] == "ADMIN") { echo 'selected="selected"'; }?>>Administrador</option>
        <option value="USUARIO" <?php if ($linha['tipo'] == "USUARIO") { echo 'selected="selected"'; }?>>Usuário</option>
        <?php }else { ?>
        <option value="USUARIO" <?php if ($linha['tipo'] == "USUARIO") { echo 'selected="selected"'; }?>>Usuário</option>
        <?php } ?>
        </select><br>

   		<input type="hidden" value="<?php echo $linha['id'];?>" name="id_atualizar" id="id_atualizar" />
        <input class="" id="atualizarUsuarios" name="atualizarUsuarios" value="Atualizar Usuário" type="submit">
        <?php } 	$db->fechaConexao();?>
      </form>
      
      	<br>
