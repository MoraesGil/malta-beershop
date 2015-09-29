<p>Você está em -> <a href="Home">Home </a>-> <a href="HotSiteDicasCadastradas">HOT SITE - Dicas Cadastradas</a></p>
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
                  <th>Dia/Mês</th>
                  <th>Titulo</th>  
                  <th>Usuário</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
<?php
$db->conecta();
if ($usuario->getTipo()== 'ADMIN'){
	$db->query("SELECT * FROM hotsite_dicasjejum  h
			INNER JOIN usuarios u ON
			h.usuario_id = u.id
			WHERE hotsite_dicastitulo LIKE '%".$pesquisar."%' OR hotsite_dicasdia LIKE '%".$pesquisar."%'
			ORDER BY hotsite_dicasdate DESC;")->fetchAll();
	}
else
	{
	$db->query("SELECT * FROM hotsite_dicasjejum h
				INNER JOIN usuarios u ON
				h.usuario_id = u.id
				WHERE h.usuario_id = '".$usuario->getId()."' 
			 	AND hotsite_dicastitulo LIKE '%".$pesquisar."%' OR hotsite_dicasdia LIKE '%".$pesquisar."%'
			    ORDER BY hotsite_dicasdate DESC;")->fetchAll();	
	}
    if ( $db->rows == 0 )
		{ 
		 echo "<p class='moderar' align='center'>Não contém nenhum registro! com <strong>".$pesquisar."</strong></p>";
		}else{ // linhas pesquisa
     
	 foreach ( $db->data as $linhas )
       		{// loop conteudo pesquisa
            $ln = ( object ) $linhas;
?>

     
       </div>

              <tr>
                  <td><?php echo $ln->hotsite_dicasid; ?>	 </td>
            	  <td><?php echo $ln->hotsite_dicasdia; ?>/<?php echo $ln->hotsite_dicasmes; ?>	 </td>
            	  <td><?php echo $ln->hotsite_dicastitulo; ?></td>
				  <td><?php echo $ln->nome; ?></td>
                  <td><a href="HotSiteAtualizarDicas&id=<?php echo $ln->hotsite_dicasid; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='HotSiteExcluirDicas&id=<?php echo $ln->hotsite_dicasid; ?>'" title="Excluir">
                <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
              </tr>

<?php
		} // fecha loop conteudo linhas pesquisa
	}// fecha linhas linhas pesquisa
?>
           
            </tbody>
            </table>
            <p align="center"><a href="HotSiteDicasCadastradas" title="Voltar"> Voltar </a></p>
          </div>
<?php
$db->fechaConexao();
$db->conecta();	
} else {
$db->conecta();	
			?>
    <h2 class="sub-header">Dicas Cadastradas</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Cód.</th>
                  <th>Dia/Mês</th>
                  <th>Titulo</th>  
                  <th>Usuário</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
			<?php
							  
				@$pag = $_REQUEST["p"];
				if(isset($pag)) { $pag = $pag; } else { $pag = 1; } 
				$qnt = 21; 
				$inicio = ($pag*$qnt) - $qnt;
				
				if ($usuario->getTipo() == 'ADMIN'){
$db->query("SELECT * FROM hotsite_dicasjejum  h
			INNER JOIN usuarios u ON
			h.usuario_id = u.id
			ORDER BY hotsite_dicasdate DESC LIMIT ".$inicio.",".$qnt.";
			")->fetchAll();
	}
else
	{
	$db->query("SELECT * FROM hotsite_dicasjejum  h
				INNER JOIN usuarios u ON
				h.usuario_id = u.id
				WHERE h.usuario_id = '".$usuario->getId()."' 
				ORDER BY hotsite_dicasdate DESC LIMIT ".$inicio.",".$qnt.";
				")->fetchAll();	
	}
				
				
    			if ( $db->rows >= 1 ) 
				{ // linhas
     			foreach ( $db->data as $linhas )
       			{// loop conteudo
           		$ln = ( object ) $linhas;
				
				

?>
  			  <tr>
                  <td><?php echo $ln->hotsite_dicasid; ?>	 </td>
            	  <td><?php echo $ln->hotsite_dicasdia; ?>/<?php echo $ln->hotsite_dicasmes; ?>	 </td>
            	  <td><?php echo $ln->hotsite_dicastitulo; ?></td>
				  <td><?php echo $ln->nome; ?></td>
                  <td><a href="HotSiteAtualizarDicas&id=<?php echo $ln->hotsite_dicasid; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='HotSiteExcluirDicas&id=<?php echo $ln->hotsite_dicasid; ?>'" title="Excluir">
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

				
				if ($usuario->getTipo()== 'ADMIN'){
			$sql_all = "SELECT * FROM hotsite_dicasjejum  h
			INNER JOIN usuarios u ON
			h.usuario_id = u.id
			ORDER BY hotsite_dicasdate DESC;";
	}
else
	{
	
			$sql_all = "SELECT * FROM hotsite_dicasjejum  h
				INNER JOIN usuarios u ON
				h.usuario_id = u.id
				WHERE h.usuario_id = '".$usuario->getId()."' 
				ORDER BY hotsite_dicasdate DESC";	
	}
				
				$res_all = mysql_query($sql_all);
				$total_registros = mysql_num_rows($res_all);
				$pags = ceil($total_registros/$qnt);
				$max_links = 3;
				
				echo '<a href="HotSiteDicasCadastradas&p=1" target="_self" title="Primeira"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-left"></span></button></a> '; 
				for($i = $pag-$max_links; $i <= $pag-1; $i++) {
				 if($i <=0) { 
				} else { echo '<a href="HotSiteDicasCadastradas&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } } 
				 echo '<span> <button type="button" class="btn btn-default btn-xs"><strong>'.$pag.'</strong></button>'; 
				 for($i = $pag+1; $i <= $pag+$max_links; $i++) { 
				 if($i > $pags) { 
				 } 
				 else { echo '<a href="HotSiteDicasCadastradas&p='.$i.'" target="_self"><button type="button" class="btn btn-default btn-xs">'.$i.'</button></a> '; } }
				 echo '<a href="HotSiteDicasCadastradas&p='.$pags.'" target="_self" title="�ltima"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-right"></span></button></a> ';
				  

}
?>   
<?php
$db->fechaConexao();
?>   
           </p>