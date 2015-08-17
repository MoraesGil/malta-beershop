<?php 
	if(isset($_POST['cadastrar'])){
					
					$db->conecta();			
					$vitrine->cadastrar();	
					$db->fechaConexao();
					
}
		?>
        <p>Você está em -> <a href="Home">Home </a>-> Cadastrar Vitrine</p>

    <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Preencha os dados para cadastrar.</h3><br>
		Título:
        <input type="text" class="form-control" required autofocus name="vit_titulo" >
        Descrição:
        <input type="text" class="form-control"  required  name="vit_descricao" >
        Preço:
        <input type="text" class="form-control" placeholder="Exemplo: 50,00"  autofocus name="vit_preco" >
        Tipo:
        <select name="vit_tipo" class="form-control" required>
        <option value="">Selecione o Campo</option>
        <option value="coleiras">Coleiras</option>
        <option value="guias">Guias</option>
        <option value="keyskulls">Keyskulls</option>
        <option value="peitorais">Peitorais</option>
        <option value="tijela-de-racao">Tijela de Ração</option>
        <option value="outros">Outros</option>
        </select><br>
    
          Imagem:<span style="font-size:11px;"><strong>Tamanho Máx. Largura: 1024px X Altura 768px</strong></span>
        <input type="file" class="form-control" required name="vit_imagem" >
        <input type="hidden" name="usuario_id" value="<?php echo $usuario->getId(); ?>"><br />

        
  
        <input class="" id="cadastrar" name="cadastrar" value="Cadastrar" type="submit">
      </form>
      
      	<br>
