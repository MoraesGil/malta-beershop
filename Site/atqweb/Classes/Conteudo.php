<?php 
class Conteudo {	

	public $cont_id;
	public $cont_titulo;
	public $cont_conteudo;
	public $cont_id_usuario;
	public $cont_chamada;
	public $cont_url;

	function atualizarConteudo() {
		
		$this->cont_id = mysql_escape_string($_POST['cont_id']);
		$this->cont_titulo = mysql_escape_string($_POST['cont_titulo']);
		$this->cont_conteudo = mysql_escape_string($_POST['cont_conteudo']);
		$this->cont_url = mysql_escape_string($_POST['cont_url']);
		$this->cont_chamada = mysql_escape_string($_POST['cont_chamada']);
		$this->cont_id_usuario = mysql_escape_string($_POST['cont_id_usuario']);
		
		$sql="UPDATE conteudo SET
		cont_titulo = '$this->cont_titulo',
		cont_conteudo = '$this->cont_conteudo',
		cont_chamada = '$this->cont_chamada',
		cont_url= '$this->cont_url',
		cont_date = NOW(),
		cont_time = NOW(),
		cont_id_usuario = '$this->cont_id_usuario'
		WHERE cont_id = '$this->cont_id'";
			
  
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<script type="text/javascript">alert("Conteudo atualizado com sucesso!!");</script>';
			}else{
				echo '<script type="text/javascript">alert("Falha ao atualizar. Tente novamente");</script>';
				echo '<script type="text/javascript">window.location = "AtualizarConteudo&url='.$this->cont_url.'&id='.$this->cont_id.'";</script>';
			}	
									
								
		}
		
	
		

}
?>