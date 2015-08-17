<?php
$db->conecta();
@$id = $_REQUEST['id'];

$sql="select*from usuarios where id='$id'";
$resultado=mysql_query($sql);
if(mysql_num_rows($resultado)==0){
    echo"<script>
            alert('USUARIO NAO ENCONTRADO');
            history.go(-1);
         </script>";
}
else{

$sql="delete from usuarios 
       where id='$id'";
    $resultado=mysql_query($sql);
  
		echo '<script type="text/javascript">window.location = "UsuariosCadastrados";</script>';
}
	
	$db->fechaConexao();
?>

