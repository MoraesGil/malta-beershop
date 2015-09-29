<?php 
class Mensagem {	

	public $mensagem_id;
	public $mensagem_titulo;
	public $mensagem_pastor;
	public $mensagem_url;
	public $mensagem_date;
	public $mensagem_time;
	public $mensagem_view;
	public $usuario_id;
	public $mensagem_convidado;
	public $not_id;

	public $mensagem_imagem;
	public $mensagem_ext;
	public $mensagem_nome_imagem;
		
		public function CadastrarMensagem(){

			$this->mensagem_titulo = mysql_escape_string($_POST['mensagem_titulo']);
			$this->mensagem_url = mysql_escape_string($_POST['mensagem_url']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
			$this->not_id = mysql_escape_string($_POST['not_id']);
			$this->mensagem_convidado = mysql_escape_string($_POST['mensagem_convidado']);
			$this->mensagem_view = mysql_escape_string($_POST['mensagem_view']);
			$this->mensagem_imagem = $_FILES['mensagem_imagem']['name'];	
			$this->mensagem_ext = strrchr($this->mensagem_imagem,'.');
			$date = date("Y-m-d");
			$hora = date('H:i:s');
			$random = rand(0, 9).rand(0, 9).rand(0, 9);
			$this->mensagem_nome_imagem = md5($this->mensagem_imagem)."-".$random."-".$date."-".$hora.$this->mensagem_ext;
			
			if ($this->mensagem_convidado != "") { $this->not_id = ""; }
						
			$sql = mysql_query("INSERT INTO `mensagem`
							(`mensagem_titulo`, `mensagem_url`, `usuario_id`, `mensagem_date`, 
							`mensagem_time`,`mensagem_imagem`,`mensagem_view`, `not_id`, `mensagem_convidado`) 
								VALUES 
							('$this->mensagem_titulo', '$this->mensagem_url', '$this->usuario_id', NOW(), 
							NOW(),'$this->mensagem_nome_imagem','$this->mensagem_view','$this->not_id','$this->mensagem_convidado')");
									
				
				if($sql){
					
					 
					if(file_exists("mensagem")) {
						(move_uploaded_file($_FILES['mensagem_imagem']['tmp_name'], "mensagem/".$this->mensagem_nome_imagem));
						}
					else {
						mkdir("mensagem", 0777, true);
						(move_uploaded_file($_FILES['mensagem_imagem']['tmp_name'], "mensagem/".$this->mensagem_nome_imagem));
						}
										
					echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso</div>';
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao inserir! Tente novamente!</div>';
					echo '<script type="text/javascript">window.location = "cadastrarMensagem";</script>';
				
		}
	}
		
		public function AtualizarMensagem(){
			$this->mensagem_id = mysql_escape_string($_POST['mensagem_id']);
			$this->mensagem_titulo = mysql_escape_string($_POST['mensagem_titulo']);
			$this->mensagem_url = mysql_escape_string($_POST['mensagem_url']);
			$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
			$this->mensagem_view = mysql_escape_string($_POST['mensagem_view']);
			$this->eventos_imagem = $_FILES['eventos_imagem']['name'];	
			$this->not_id = mysql_escape_string($_POST['not_id']);
			$this->mensagem_convidado = mysql_escape_string($_POST['mensagem_convidado']);
			
			if ($this->mensagem_convidado != "") { $this->not_id = ""; }
			
			if ($this->mensagem_imagem == ""){
				$sql = mysql_query("UPDATE mensagem SET
								mensagem_titulo = '$this->mensagem_titulo',
								mensagem_url = '$this->mensagem_url',
								mensagem_id_usuario = '$this->mensagem_id_usuario',
								not_id = '$this->not_id',
								mensagem_convidado = '$this->mensagem_convidado',
								mensagem_date = NOW(),
								mensagem_time = NOW(),
								mensagem_imagem = '$this->mensagem_nome_imagem',
								mensagem_view = '$this->mensagem_view'
								WHERE mensagem_id = '$this->mensagem_id';");
			}else{
			$this->mensagem_ext = strrchr($this->mensagem_imagem,'.');
			$date = date("Y-m-d");
			$hora = date('H:i:s');
			$random = rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9);
			$this->mensagem_nome_imagem = md5($this->mensagem_imagem)."-".$random."-".$date."-".$hora.$this->mensagem_ext;
			
			$sqlQuery="select*from mensagem where mensagem_id='$this->mensagem_id'";
			$resultadoQuery=mysql_query($sqlQuery);
			while($linha = mysql_fetch_array($resultadoQuery))
			{
			$nomeimagem = $linha['mensagem_imagem'];
			}
				
			
			if (file_exists($fileToRemove)) {
  			 // yes the file does exist 
			chmod ($fileToRemove, 777); 
   			unlink($fileToRemove);
			}
			(move_uploaded_file($_FILES['mensagem_imagem']['tmp_name'], "mensagem/".$this->mensagem_nome_imagem));
			
			$sql = mysql_query("UPDATE mensagem SET
								mensagem_titulo = '$this->mensagem_titulo',
								mensagem_url = '$this->mensagem_url',
								mensagem_id_usuario = '$this->mensagem_id_usuario',
								not_id = '$this->not_id',
								mensagem_convidado = '$this->mensagem_convidado',
								mensagem_date = NOW(),
								mensagem_time = NOW(),
								mensagem_imagem = '$this->mensagem_nome_imagem',
								mensagem_view = '$this->mensagem_view'
								WHERE mensagem_id = '$this->mensagem_id';");			
								
			}
			
					if($sql){
									
					echo '<div class="alert alert-success" role="alert">Atualizado com sucesso</div>';
					
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar! Tente novamente!</div>';
					echo '<script type="text/javascript">window.location = "AtualizarMensagens&id='.$this->mensagem_id.'";</script>';
				
		}
	}		
		public function ExcluirMensagem($codigo) {
			
			$sql="select*from mensagem where mensagem_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
			
			$sql="delete from mensagem 
				   where mensagem_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
                echo '<script type="text/javascript">window.location = "MensagemCadastrada";</script>';
			}
			
		}
	
		
		

}
?>