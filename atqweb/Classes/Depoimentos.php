<?php 
class Depoimentos {	

	public $dep_id;
	public $dep_titulo;
	public $dep_detalhes;
	public $dep_conteudo;
    public $dep_imagem;
	public $dep_nome_imagem;
	public $dep_ext;
	public $usuario_id;
	public $dep_date;
	public $dep_time;
	

		public function cadastrarDepoimentos(){

			$this->dep_titulo = mysql_escape_string($_POST['dep_titulo']);
			$this->dep_detalhes = mysql_escape_string($_POST['dep_detalhes']);
			$this->dep_conteudo = mysql_escape_string($_POST['dep_conteudo']);
			$this->dep_imagem = $_FILES['dep_imagem']['name'];
			$this->dep_ext = strrchr($this->dep_imagem,'.');
			$this->dep_nome_imagem = md5($this->dep_imagem).$this->dep_ext;
            $this->usuario_id = mysql_escape_string($_POST['usuario_id']);
							
			$sql = mysql_query("INSERT INTO `depoimentos` 
								(`dep_titulo`, `dep_detalhes`, `dep_conteudo`, `dep_imagem`, `dep_date`, `dep_time`, `usuario_id`) 
								VALUES 
								('$this->dep_titulo', '$this->dep_detalhes', '$this->dep_conteudo','$this->dep_nome_imagem', NOW(), NOW(), '$this->usuario_id'
								)");
									
				(move_uploaded_file($_FILES['dep_imagem']['tmp_name'], "images/depoimentos/".$this->dep_nome_imagem));
			if($sql){
					echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
				}
				
		}
		
		public function atualizarDepoimentos() {		

			$this->dep_id= mysql_escape_string($_POST['dep_id']);
            $this->dep_titulo = mysql_escape_string($_POST['dep_titulo']);
			$this->dep_detalhes = mysql_escape_string($_POST['dep_detalhes']);
			$this->dep_conteudo = mysql_escape_string($_POST['dep_conteudo']);
			$this->dep_imagem = $_FILES['dep_imagem']['name'];
			$this->dep_ext = strrchr($this->dep_imagem,'.');
			$this->dep_nome_imagem = md5($this->dep_imagem).$this->dep_ext;
            $this->usuario_id = mysql_escape_string($_POST['usuario_id']);
				
			if($this->dep_imagem == "") {
			$sql="UPDATE depoimentos SET
			dep_titulo = '$this->dep_titulo',
			dep_detalhes = '$this->dep_detalhes',
            dep_conteudo = '$this->dep_conteudo',
			dep_date = NOW(),
			dep_time = NOW(),
			usuario_id = '$this->usuario_id'
			WHERE dep_id = '$this->dep_id'";
			} else
			{
				$sql="UPDATE depoimentos SET
			dep_titulo = '$this->dep_titulo',
			dep_detalhes = '$this->dep_detalhes',
            dep_conteudo = '$this->dep_conteudo',
            dep_imagem = '$this->dep_nome_imagem',
			dep_date = NOW(),
			dep_time = NOW(),
			usuario_id = '$this->usuario_id'
			WHERE dep_id = '$this->dep_id'";
			
			(move_uploaded_file($_FILES['dep_imagem']['tmp_name'], "images/depoimentos/".$this->dep_nome_imagem));
			
			}
				   
			$resultado=mysql_query($sql);
			if($resultado){
					echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}	
									
								
		}
		
		public function excluirDepoimentos($codigo) {
			
			$sql="select*from depoimentos where dep_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
			
			$sql="delete from depoimentos 
				   where dep_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
                echo '<script type="text/javascript">window.location = "DepoimentosCadastrados";</script>';
			}
			
		}
	
		
		

}
?>