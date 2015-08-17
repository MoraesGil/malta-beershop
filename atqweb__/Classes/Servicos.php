<?php 
class Servicos {	

	public $serv_id;
	public $serv_titulo;
	public $serv_chamada;
	public $serv_imagem;
	public $serv_ext;
	public $serv_nome_imagem;
	public $usuario_id;

	public function atualizarServicos() {
		
		
		$this->serv_id = mysql_escape_string($_POST['serv_id']);
		$this->serv_titulo = mysql_escape_string($_POST['serv_titulo']);
		$this->serv_chamada = mysql_escape_string($_POST['serv_chamada']);
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		//recebe a imagem			
			$this->serv_imagem = $_FILES['serv_imagem']['name'];	

			// se não tiver imagem nao faz nenhum tratamento
			if ($this->serv_imagem == "") 
			{
			// atualiza serviço sem imagem
				$sql="UPDATE servicos SET
				serv_titulo = '$this->serv_titulo',
				serv_chamada = '$this->serv_chamada',
				usuario_id = '$this->usuario_id',
				serv_date = NOW(),
				serv_time = NOW()
				WHERE serv_id = '".$this->serv_id."'";
			} else {
			$this->serv_ext = strrchr($this->serv_imagem,'.');
			$this->serv_nome_imagem = md5($this->serv_imagem).$this->serv_ext;
			(move_uploaded_file($_FILES['serv_imagem']['tmp_name'], "images/servicos/".$this->serv_nome_imagem));	
			
			// atualiza serviço com imagem e faz o upload
				$sql="UPDATE servicos SET
				serv_titulo = '$this->serv_titulo',
				serv_chamada = '$this->serv_chamada',
				serv_imagem = '$this->serv_nome_imagem',
				usuario_id = '$this->usuario_id',
				serv_date = NOW(),
				serv_time = NOW()
				WHERE serv_id = '".$this->serv_id."'";
			}
		
		
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
		
	
		

}
?>