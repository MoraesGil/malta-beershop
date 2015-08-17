<?php 
class Parceiros {	

	public $parc_id;
	public $parc_titulo;
	public $parc_imagem;
	public $parc_nome_imagem;
	public $parc_ext;
	public $usuario_id;
	public $parc_date;
	public $parc_time;
	public $parc_link;
		
		
		public function cadastrarParceiros(){

			$this->parc_titulo = mysql_escape_string($_POST['parc_titulo']);
			$this->parc_link = mysql_escape_string($_POST['parc_link']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
			$this->parc_imagem = $_FILES['parc_imagem']['name'];
			$this->parc_ext = strrchr($this->parc_imagem,'.');
			$this->parc_nome_imagem = md5($this->parc_imagem).$this->parc_ext;
							
			$sql = mysql_query("INSERT INTO `parceiros` 
								(`parc_titulo`, `parc_link`, `parc_imagem`, `parc_date`, `parc_time`, `usuario_id`) 
								VALUES 
								('$this->parc_titulo', '$this->parc_link', '$this->parc_nome_imagem', NOW(), NOW(), '$this->usuario_id'
								)");
									
				(move_uploaded_file($_FILES['parc_imagem']['tmp_name'], "images/parceiros/".$this->parc_nome_imagem));
				if($sql){
						echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
				}
				
		}
		
		public function atualizarParceiros() {		

			$this->parc_id= mysql_escape_string($_POST['parc_id']);
			$this->parc_titulo = mysql_escape_string($_POST['parc_titulo']);
			$this->parc_link = mysql_escape_string($_POST['parc_link']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
			$this->parc_imagem = $_FILES['parc_imagem']['name'];
			$this->parc_ext = strrchr($this->parc_imagem,'.');
			$this->parc_nome_imagem = md5($this->parc_imagem).$this->parc_ext;
				
			if($this->parc_imagem == "") {
			$sql="UPDATE parceiros SET
			parc_titulo = '$this->parc_titulo',
			parc_link = '$this->parc_link',
			parc_date = NOW(),
			parc_time = NOW(),
			usuario_id = '$this->usuario_id'
			WHERE parc_id = '$this->parc_id'";
			} else
			{
			$sql="UPDATE parceiros SET
			parc_titulo = '$this->parc_titulo',
			parc_link = '$this->parc_link',
			parc_imagem = '$this->parc_nome_imagem',
			parc_date = NOW(),
			parc_time = NOW(),
			usuario_id = '$this->usuario_id'
			WHERE parc_id = '$this->parc_id'";
			
			(move_uploaded_file($_FILES['parc_imagem']['tmp_name'], "images/parceiros/".$this->parc_nome_imagem));
			
			}
				   
			$resultado=mysql_query($sql);
			if($resultado){
							echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}	
									
								
		}
		
			
		public function excluirParceiros($codigo) {
			
			$sql="select*from parceiros where parc_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
			
			$sql="delete from parceiros 
				   where parc_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
                echo '<script type="text/javascript">window.location = "ParceirosCadastrados";</script>';
			}
			
		}
	
		
		

}
?>