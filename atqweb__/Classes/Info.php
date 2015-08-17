<?php 
class Info {	

	public $info_id;
	public $info_title;
	public $info_desc;
	public $info_key;
	public $info_id_usuario;
	public $info_email_contato1;
	public $info_email_contato2;
	public $info_email_contato3;
	public $info_email_contato4;
	public $info_date;
	public $info_time;


	function atualizarInfoPagina() {
		
		$this->info_id = mysql_escape_string($_POST['info_id']);
		$this->info_title = mysql_escape_string($_POST['info_title']);
		$this->info_desc = mysql_escape_string($_POST['info_desc']);
		$this->info_key = mysql_escape_string($_POST['info_key']);
		$this->info_id_usuario = mysql_escape_string($_POST['info_id_usuario']);
	
		$sql="UPDATE info SET
		info_title = '$this->info_title',
		info_desc = '$this->info_desc',
		info_key = '$this->info_key',
		info_id_usuario = '$this->info_id_usuario',
		info_date = NOW(),
		info_time = NOW()
		WHERE info_id = '$this->info_id' LIMIT 1";
			
  
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
							
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
		
		
		function atualizarInfoContato() {
		
		$this->info_id = mysql_escape_string($_POST['info_id']);
		$this->info_id_usuario = mysql_escape_string($_POST['info_id_usuario']);
		$this->info_email_contato1 = mysql_escape_string($_POST['info_email_contato1']);
		$this->info_email_contato2 = mysql_escape_string($_POST['info_email_contato2']);
		$this->info_email_contato3 = mysql_escape_string($_POST['info_email_contato3']);
		$this->info_email_contato4 = mysql_escape_string($_POST['info_email_contato4']);
		
		$sql="UPDATE info SET
		info_id_usuario = '$this->info_id_usuario',
		info_email_contato1 = '$this->info_email_contato1',
		info_email_contato2 = '$this->info_email_contato2',
		info_email_contato3 = '$this->info_email_contato3',
		info_email_contato4 = '$this->info_email_contato4',
		info_date = NOW(),
		info_time = NOW()
		WHERE info_id = '$this->info_id' LIMIT 1";
			
  
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
							
				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
	
		

}
?>