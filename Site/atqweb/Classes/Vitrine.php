<?php 
class Vitrine {	

	public $vit_id;
	public $vit_titulo;
	public $vit_preco;
	public $vit_descricao;
	public $vit_imagem;
	public $vit_nome_imagem;
	public $vit_ext;
	public $usuario_id;
	public $vit_date;
	public $vit_time;
	public $vit_tipo;
		
		
		public function cadastrar(){

			$this->vit_titulo = mysql_escape_string($_POST['vit_titulo']);
			$this->vit_preco = mysql_escape_string($_POST['vit_preco']);
			$this->vit_descricao = mysql_escape_string($_POST['vit_descricao']);
			$this->vit_tipo = mysql_escape_string($_POST['vit_tipo']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
			$this->vit_imagem = $_FILES['vit_imagem']['name'];
			$this->vit_ext = strrchr($this->vit_imagem,'.');
			$this->vit_nome_imagem = md5($this->vit_imagem).$this->vit_ext;
							
			$sql = mysql_query("INSERT INTO `vitrine` 
								(`vit_titulo`, `vit_preco`, `vit_descricao`, 
								`vit_imagem`, `vit_tipo`, `usuario_id`, `vit_date`, `vit_time`) 
								VALUES 
								('$this->vit_titulo', '$this->vit_preco', '$this->vit_descricao', 
								'$this->vit_nome_imagem', '$this->vit_tipo', '$this->usuario_id', NOW(), NOW()
								)");
									
				(move_uploaded_file($_FILES['vit_imagem']['tmp_name'], "images/vitrine/".$this->vit_nome_imagem));
				if($sql){
						echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
				}
				
		}
		
		public function atualizar() {
			
			$this->vit_id= mysql_escape_string($_POST['vit_id']);
			$this->vit_titulo = mysql_escape_string($_POST['vit_titulo']);
			$this->vit_preco = mysql_escape_string($_POST['vit_preco']);
			$this->vit_descricao = mysql_escape_string($_POST['vit_descricao']);
			$this->vit_tipo = mysql_escape_string($_POST['vit_tipo']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);		

			
			//imagem
			$this->vit_imagem = $_FILES['vit_imagem']['name'];
			if ($this->vit_imagem != "") {	
			$this->vit_ext = strrchr($this->vit_imagem,'.');
			$this->vit_nome_imagem = md5($this->vit_imagem).date("dmY").date("His").$this->vit_ext;
			} else {
			$this->vit_nome_imagem = "";
			}
			
			if ($this->vit_imagem == "") {
			$sql="UPDATE vitrine SET
			vit_titulo = '$this->vit_titulo',
			vit_preco = '$this->vit_preco',
			vit_descricao = '$this->vit_descricao',
			vit_tipo = '$this->vit_tipo',
			vit_date = NOW(),
			vit_time = NOW(),
			usuario_id = '$this->usuario_id'		
			WHERE vit_id = '$this->vit_id'";
			} else {
				
			//apaga imagem do servidor
			$sqlConsulta = mysql_query("select * from vitrine where vit_id = ".$this->vit_id.";");
			$numRows = mysql_num_rows($sqlConsulta);
			if ($numRows >= 1) {
				while($linha =  mysql_fetch_array($sqlConsulta)) {
					$url = $linha['vit_imagem'];
                                        //chmod ("images/vitrine", 0777); 
					$file = "images/vitrine/$url";
						if ( file_exists( $file ) )
						{
						@unlink( $file );
						}
					}	
			}
				
			$sql="UPDATE vitrine SET
			vit_titulo = '$this->vit_titulo',
			vit_preco = '$this->vit_preco',
			vit_descricao = '$this->vit_descricao',
			vit_tipo = '$this->vit_tipo',
			vit_imagem = '$this->vit_nome_imagem',
			vit_date = NOW(),
			vit_time = NOW(),
			usuario_id = '$this->usuario_id'		
			WHERE vit_id = '$this->vit_id'";
			}
			
			$resultado=mysql_query($sql);
			
			 // valida se tiver imagem faz o upload
             if ($this->vit_imagem != "") {				
                 (move_uploaded_file($_FILES['vit_imagem']['tmp_name'], "images/vitrine/".$this->vit_nome_imagem));
             }
			if($resultado){
							echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}													
								
		}
		
			
		public function excluir($codigo) {
			
			$sql="select*from vitrine where vit_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
				
			//apaga imagem do servidor
			$sqlConsulta = mysql_query("select * from vitrine where vit_id = ".$codigo.";");
			$numRows = mysql_num_rows($sqlConsulta);
			if ($numRows >= 1) {
				while($linha =  mysql_fetch_array($sqlConsulta)) {
					$url = $linha['vit_imagem'];
                                       // chmod ("images/vitrine", 0777); 
					$file = "images/vitrine/$url";
						if ( file_exists( $file ) )
						{
						@unlink( $file );
						}
					}	
			}
			
			$deleta=mysql_query("DELETE FROM vitrine where vit_id='".$codigo."' LIMIT 1");	
       		 echo '<script type="text/javascript">window.history.go(-1);</script>';
			}
			
		}
	
		
		

}
?>