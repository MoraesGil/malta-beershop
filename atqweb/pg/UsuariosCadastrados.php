       <p>Você esté em -> <a href="Home">Home </a>-> <a href="UsuariosCadastrados">Usuários Cadastrados</a></p>
    <form style="float:right;" action="" method="post"><input type="text" name="pesquisar" placeholder="Pesquisar"><input type="submit" name="enviar" value="Buscar" /></form>      
      <?php 
	  $db->conecta();
if (isset($_POST['enviar'])) {
	$pesquisar = $_POST['pesquisar'];
	?>
       <h2 class="sub-header">Usuários Encontrados</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>CÓD</th>
                  <th>Perfil</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
    <?php
	
					  
		  $sql2 = "SELECT * FROM usuarios WHERE nome LIKE '%".$pesquisar."%' OR email LIKE '%".$pesquisar."%'  ORDER BY nome ASC;";			  
		  $res2 = mysql_query($sql2);
		  if(@mysql_num_rows($res2) == '0'){
		 echo "<p class='moderar' align='center'>Não contém nenhum registro! com <strong>".$pesquisar."</strong></p>";
		 ?>
          </tbody>
            </table>
          </div>
         <?php
		}else{
			while ($linha = mysql_fetch_array($res2))  { 
			?>
             <tr>
                  <td><?php echo $linha['id']; ?></td>
                  <td><?php echo $funcoes->formataNivel($linha['tipo']); ?></td>
                  <td><?php echo $linha['nome']; ?></td>
                  <td><?php echo $linha['email']; ?></td>
                  <td><a href="AtualizarUsuarios&id=<?php echo $linha['id']; ?>" title="Editar Usuário"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este Usuário?'))location.href='ExcluirUsuarios&id=<?php echo $linha['id']; ?>'" title="Excluir Usuário">
                <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                </tr>
                
            <?php
			
			
			} 
			?>
            </tbody>
            </table>
          </div>
            <?php
		}
} else {
			
			?>
    <h2 class="sub-header">Usuários Cadastrados</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>CÓD</th>
                  <th>Perfil</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
              <?php
			  
				@$p = $_REQUEST["p"];
				if(isset($p)) { $p = $p; } else { $p = 1; } 
				$qnt = 10; 
				$inicio = ($p*$qnt) - $qnt;
				
				$sql = "SELECT * FROM usuarios ORDER BY nome ASC LIMIT ".$inicio.",".$qnt.";";
				$result = mysql_query($sql);
					
				while ($linha = mysql_fetch_array($result)) {
				
			  ?>
                <tr>
                  <td><?php echo $linha['id']; ?></td>
                  <td><?php echo $funcoes->formataNivel($linha['tipo']);  ?></td>
                  <td><?php echo $linha['nome']; ?></td>
                  <td><?php echo $linha['email']; ?></td>
                  <td><a href="AtualizarUsuarios&id=<?php echo $linha['id']; ?>" title="Editar Usuário"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este Usuário?'))location.href='ExcluirUsuarios&id=<?php echo $linha['id']; ?>'" title="Excluir Usuário">
                <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                </tr>
                
     		<?php } ?>
              </tbody>
            </table>
          </div>
          <p align="center">
           
           
          <?php

				
				$sql_all = "SELECT * FROM usuarios ORDER BY nome ASC";
				$res_all = mysql_query($sql_all);
				$total_registros = mysql_num_rows($res_all);
				$pags = ceil($total_registros/$qnt);
				$max_links = 3;
				
				echo '<a href="UsuariosCadastrados&p=1" target="_self" title="Primeira"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-left"></span></button></a> '; 
				for($i = $p-$max_links; $i <= $p-1; $i++) {
				 if($i <=0) { 
				} else { echo '<a href="UsuariosCadastrados&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } } 
				 echo '<span> <button type="button" class="btn btn-default btn-xs"><strong>'.$p.'</strong></button>'; 
				 for($i = $p+1; $i <= $p+$max_links; $i++) { 
				 if($i > $pags) { 
				 } 
				 else { echo '<a href="UsuariosCadastrados&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } }
				 echo '<a href="UsuariosCadastrados&p='.$pags.'" target="_self" title="Última"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-right"></span></button></a> ';
				  

}
$db->fechaConexao();
?>   
           </p>