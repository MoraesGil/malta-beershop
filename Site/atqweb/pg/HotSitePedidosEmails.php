	<h2 class="sub-header">Listagem de e-mails</h2> 
 
              			<?php
							  
              			$db->conecta();
				
				
$db->query("SELECT * FROM hotsite_pedidos  h
			LEFT JOIN usuarios u ON
			h.usuario_id = u.id
			ORDER BY hotsite_peddatetime DESC;
			")->fetchAll();


				if ( $db->rows == 0 ){
					echo "<p class='moderar' align='center'>Não contém nenhum email!</p>";
				}else
				{ // linhas
     			foreach ( $db->data as $linhas )
       			{// loop conteudo
           		$ln = ( object ) $linhas;
				
				

?>
  			  <?php echo $ln->hotsite_pedemail.", "; ?>
            	 
<?php
		} // fecha loop conteudo
	}// fecha linhas

?>    
<?php
$db->fechaConexao();
?>          
      
              </tbody>
            </table>