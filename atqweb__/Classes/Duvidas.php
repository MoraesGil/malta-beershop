<?php 
class Duvidas {	

	public $duv_id;
	public $duv_titulo;
	public $duv_conteudo;
	public $duv_date;
	public $duv_time;
	public $usuario_id;
		
		public function cadastrarDuvidas(){

			$this->duv_titulo = mysql_escape_string($_POST['duv_titulo']);
			$this->duv_conteudo = mysql_escape_string($_POST['duv_conteudo']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
						
			$sql = mysql_query("INSERT INTO `duvidas` 
								(`duv_titulo`, `duv_conteudo`, `usuario_id`, `duv_date`, `duv_time`) 
								VALUES 
								('$this->duv_titulo', '$this->duv_conteudo', '$this->usuario_id', NOW(), NOW())");
									
				
				if($sql){
					echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
				}
				
		}
		
		public function atualizarDuvidas() {		

			
			$this->duv_id = mysql_escape_string($_POST['duv_id']);
            $this->duv_titulo = mysql_escape_string($_POST['duv_titulo']);
			$this->duv_conteudo = mysql_escape_string($_POST['duv_conteudo']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
				

			$sql="UPDATE duvidas SET
			duv_titulo = '$this->duv_titulo',
			duv_conteudo = '$this->duv_conteudo',
			duv_date = NOW(),
			duv_time = NOW(),
			usuario_id = '$this->usuario_id'
			WHERE duv_id = '$this->duv_id'";
			
			$resultado=mysql_query($sql);
			if($resultado){
					echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}	
									
								
		}
		
		public function excluirDuvidas($codigo) {
			
			$sql="select*from duvidas where duv_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
			
			$sql="delete from duvidas 
				   where duv_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
                echo '<script type="text/javascript">window.location = "DuvidasCadastradas";</script>';
			}
			
		}
	
		
		

}
?>