<p>Você está em -> <a href="Home">Home </a>-> <a href="VitrineCadastradas">Vitrine Cadastradas</a></p>
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
                  <th>Título</th>
                  <th>Data</th>
                  <th>Usuário</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
<?php
$db->conecta();

if ($usuario->getTipo() == "ADMIN") {   
$db->query("SELECT * FROM vitrine v
INNER JOIN usuarios u ON
v.usuario_id = u.id 
WHERE vit_titulo LIKE '%".$pesquisar."%'  ORDER BY vit_titulo ASC;")->fetchAll();
} else {
$db->query("SELECT * FROM vitrine v
INNER JOIN usuarios u ON
v.usuario_id = u.id 
WHERE v.usuario_id = '".$usuario->getId()." AND 'vit_titulo LIKE '%".$pesquisar."%'  ORDER BY vit_titulo ASC;")->fetchAll();
}
    if ( $db->rows == 0 )
		{ 
		 echo "<p class='moderar' align='center'>Não contém nenhum registro! com <strong>".$pesquisar."</strong></p>";
		}else{ // linhas pesquisa
     
	 foreach ( $db->data as $Loop )
       		{// loop conteudo pesquisa
            $ln = ( object ) $Loop;
?>

     
       </div>

             <tr>
                  <td><?php echo $ln->vit_id; ?>	 </td>
                  <td><?php echo $ln->vit_titulo; ?></td>
             
                  <td><?php  echo $funcoes->formataData($ln->vit_date);?> às <?php echo $funcoes->formataHora($ln->vit_time);?></td>
                <td>  <?php echo $ln->nome; ?>	     </td>
                  <td><a href="AtualizarVitrine&id=<?php echo $ln->vit_id; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='ExcluirVitrine&id=<?php echo $ln->vit_id; ?>'" title="Excluir">
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
    <h2 class="sub-header">Vitrine Cadastradas</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Cód.</th>
                  <th>Título</th>
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
				if ($usuario->getTipo() == "ADMIN") {   
                $db->query("SELECT * FROM vitrine v
                INNER JOIN usuarios u ON
                v.usuario_id = u.id 
                ORDER BY v.vit_titulo ASC LIMIT ".$inicio.",".$qnt.";")->fetchAll();
                } else {
                $db->query("SELECT * FROM vitrine v
                INNER JOIN usuarios u ON
                v.usuario_id = u.id 
                WHERE v.usuario_id = '".$usuario->getId()." 
                ORDER BY v.vit_titulo ASC LIMIT ".$inicio.",".$qnt.";")->fetchAll();
                }
    			if ( $db->rows >= 1 ) 
				{ // linhas
     			foreach ( $db->data as $Loop )
       			{// loop conteudo
           		$ln = ( object ) $Loop;
				
				

?>
  		
               <tr>
                  <td><?php echo $ln->vit_id; ?>	 </td>
                  <td><?php echo $ln->vit_titulo; ?></td>
             
                  <td><?php  echo $funcoes->formataData($ln->vit_date);?> às <?php echo $funcoes->formataHora($ln->vit_time);?></td>
                <td>  <?php echo $ln->nome; ?>	     </td>
                  <td><a href="AtualizarVitrine&id=<?php echo $ln->vit_id; ?>" title="Editar"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                  <td><a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir?'))location.href='ExcluirVitrine&id=<?php echo $ln->vit_id; ?>'" title="Excluir">
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
           
 <ul class="pagination">           
<?php
        if ($usuario->getTipo() == "ADMIN") {   
                $sql_all = "SELECT * FROM vitrine v
                INNER JOIN usuarios u ON
                v.usuario_id = u.id 
                ORDER BY v.vit_titulo ASC;";
                } else {
                $sql_all = "SELECT * FROM vitrine v
                INNER JOIN usuarios u ON
                v.usuario_id = u.id 
                WHERE v.usuario_id = '".$usuario->getId()." 
                ORDER BY v.vit_titulo ASC;";
              
                }
				
    
                $res_all = mysql_query($sql_all);
				$total_registros = mysql_num_rows($res_all);
				$pags = ceil($total_registros/$qnt);
				$max_links = 3;
				
				echo ' <li><a href="VitrineCadastradas&pag=1" target="_self" title="Primeira">&laquo;</a></li>';
				for($i = $pag-$max_links; $i <= $pag-1; $i++) {
				 if($i <=0) { 
				} else { 
				echo ' <li ><a href="VitrineCadastradas&pag='.$i.'" target="_self">'.$i.'</a></li>';
				} } 
				 echo '<li ><a href="VitrineCadastradas&pag='.$i.'" target="_self">'.$pag.'</a></li>'; 
				 for($i = $pag+1; $i <= $pag+$max_links; $i++) { 
				 if($i > $pags) { 
				 } 
				 else { echo '<li><a href="VitrineCadastradas&pag='.$i.'" target="_self">'.$i.'</a></li>'; } }
				echo '<li><a href="VitrineCadastradas&pag='.$pags.'" target="_self" title="Última">&raquo;</a></li>	';
				
				
				  

}
?> 
     </ul>
<?php
$db->fechaConexao();
?>   
           </p>