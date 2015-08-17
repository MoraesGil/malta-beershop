<p>Você está em -> <a href="Home">Home </a>-> <a href="ParceirosCadastrados">Parceiros Cadastrados</a></p>
<form style="float:right;" action="" method="post"><input type="text" name="pesquisar" placeholder="Pesquisar"><input type="submit" name="enviar" value="Buscar" /></form>      
<?php 

if (isset($_POST['enviar'])) {
	$pesquisar = $_POST['pesquisar'];
	?>
       <h2 class="sub-header">Resultados Encontrados</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Cód.</th>
                  <th>Nome</th>
                  <th>Data</th>
                  <th>Usuário</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
<?php
$db->conecta();
$db->query("SELECT * FROM parceiros WHERE parc_id_usuario = '".$usuario->getId()."' AND parc_nome LIKE '%".$pesquisar."%'  ORDER BY parc_nome ASC;")->fetchAll();
    if ( $db->rows == 0 )
		{ 
		 echo "<p class='moderar' align='center'>Não contém nenhum registro! com <strong>".$pesquisar."</strong></p>";
		}else{ // linhas pesquisa
     
	 foreach ( $db->data as $parceirosLoop )
       		{// loop conteudo pesquisa
            $p = ( object ) $parceirosLoop;
?>

     
       </div>

             <tr>
                  <td><?php echo $p->parc_id; ?>	 </td>
                  <td><?php echo $p->parc_nome; ?></td>
             
                  <td><?php  echo $parceiros->formataData($p->parc_date);?> às <?php echo $parceiros->formataHora($p->parc_time);?></td>
                   <td>
				  <?php 
				  $sqlAutor = "SELECT * FROM usuarios WHERE id = '".$p->parc_id_usuario."'  LIMIT 1;";
				  $resultAutor = mysql_query($sqlAutor);
				  while ($linhaAutor = mysql_fetch_array($resultAutor)) {
				   echo $linhaAutor['nome'];
				   } // fecha loop autor
				   ?>
                   </td>
                  <td><a href="AtualizarParceiros&id=<?php echo $p->parc_id; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='ExcluirParceiros&id=<?php echo $p->parc_id ?>'" title="Excluir">
                <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                </tr>

<?php
		} // fecha loop conteudo linhas pesquisa
	}// fecha linhas linhas pesquisa
?>
           
            </tbody>
            </table>
          </div>
<?php
$db->fechaConexao();
$db->conecta();	
} else {
$db->conecta();	
			?>
    <h2 class="sub-header">Parceiros Cadastrados</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>Cód.</th>
                  <th>Nome</th>
                  <th>Data</th>
                  <th>Usuário</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
<?php
							  
				@$pag = $_REQUEST["pag"];
				if(isset($pag)) { $pag = $pag; } else { $pag = 1; } 
				$qnt = 15; 
				$inicio = ($pag*$qnt) - $qnt;
				
				$db->query("SELECT * FROM parceiros WHERE parc_id_usuario = '".$usuario->getId()."' ORDER BY parc_nome ASC LIMIT ".$inicio.",".$qnt.";")->fetchAll();
    			if ( $db->rows >= 1 ) 
				{ // linhas
     			foreach ( $db->data as $parceirosLoop )
       			{// loop conteudo
           		$p = ( object ) $parceirosLoop;
				
				

?>
  			<tr>
                  <td><?php echo $p->parc_id; ?>
                  </td>
                  <td><?php echo $p->parc_nome; ?></td>
             
                 <td><?php echo $parceiros->formataData($p->parc_date); ?> às <?php echo $parceiros->formataHora($p->parc_time);?></td>
                   <td>
				  <?php 
				  $sqlAutor = "SELECT * FROM usuarios WHERE id = '".$p->parc_id_usuario."'  LIMIT 1;";
				  $resultAutor = mysql_query($sqlAutor);
				  while ($linhaAutor = mysql_fetch_array($resultAutor)) {
				   echo $linhaAutor['nome'];
				   } // fecha loop autor
				   ?>
                   </td>
                  <td><a href="AtualizarParceiros&id=<?php echo $p->parc_id; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='ExcluirParceiros&id=<?php echo $p->parc_id ?>'" title="Excluir">
                <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
           </tr>
                
<?php
		} // fecha loop conteudo
	}// fecha linhas

?>             
      
              </tbody>
            </table>
          </div>
          <p align="center">
           
           
<?php

				
				$sql_all = "SELECT * FROM parceiros WHERE parc_id_usuario = '".$usuario->getId()."' ORDER BY parc_nome ASC";
				$res_all = mysql_query($sql_all);
				$total_registros = mysql_num_rows($res_all);
				$pags = ceil($total_registros/$qnt);
				$max_links = 3;
				
				echo '<a href="ParceirosCadastradosU&p=1" target="_self" title="Primeira"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-left"></span></button></a> '; 
				for($i = $pag-$max_links; $i <= $pag-1; $i++) {
				 if($i <=0) { 
				} else { echo '<a href="ParceirosCadastradosU&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } } 
				 echo '<span> <button type="button" class="btn btn-default btn-xs"><strong>'.$pag.'</strong></button>'; 
				 for($i = $pag+1; $i <= $pag+$max_links; $i++) { 
				 if($i > $pags) { 
				 } 
				 else { echo '<a href="ParceirosCadastradosU&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } }
				 echo '<a href="ParceirosCadastradosU&p='.$pags.'" target="_self" title="Última"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-right"></span></button></a> ';
				  

}
?>   
<?php
$db->fechaConexao();
?>   
           </p>