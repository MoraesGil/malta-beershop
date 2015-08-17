<?php 
class Aniversariantes {	

	public $ani_id;
	public $ani_nome;
	public $ani_dia;
	public $ani_mes;
	public $ani_ano;
	public $ani_data_aniversario;
	public $ani_imagem;
	public $ani_ext;
	public $ani_nome_imagem;
	public $usuario_id;

	
	
	public function cadastrarAniversariantes() {
		
		
		$this->ani_nome = mysql_escape_string($_POST['ani_nome']);
		$this->ani_dia = mysql_escape_string($_POST['ani_dia']);
		$this->ani_mes = mysql_escape_string($_POST['ani_mes']);
		$this->ani_ano = mysql_escape_string($_POST['ani_ano']);
		$this->ani_data_aniversario = $this->ani_ano."-".$this->ani_mes."-".$this->ani_dia;
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		//recebe a imagem			
			$this->ani_imagem = $_FILES['ani_imagem']['name'];	
			// se não tiver imagem nao faz nenhum tratamento
			$this->ani_ext = strrchr($this->ani_imagem,'.');
			$this->ani_nome_imagem = md5($this->ani_imagem).$this->ani_ext;
			(move_uploaded_file($_FILES['ani_imagem']['tmp_name'], "images/aniversariantes/".$this->ani_nome_imagem));	
			
			// inseri o aniversariante
				$sql="INSERT INTO aniversariantes 
				(ani_nome, ani_data_aniversario, ani_imagem, usuario_id, ani_dia, ani_mes, ani_ano, ani_date, ani_time) VALUES 
				('$this->ani_nome', '$this->ani_data_aniversario', '$this->ani_nome_imagem', '$this->usuario_id', '$this->ani_dia', '$this->ani_mes', '$this->ani_ano', NOW(), NOW())";
		
		
		
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
				
			}else{
				echo '<div class="alert alert-danger" role="alert">Falha ao Cadastrar!!</div>';
			}	
									
								
		}
	
	
	
	
	
	
	public function atualizarAniversariantes() {
		
		$this->ani_id = mysql_escape_string($_POST['ani_id']);
		$this->ani_nome = mysql_escape_string($_POST['ani_nome']);
		$this->ani_dia = mysql_escape_string($_POST['ani_dia']);
		$this->ani_mes = mysql_escape_string($_POST['ani_mes']);
		$this->ani_ano = mysql_escape_string($_POST['ani_ano']);
		$this->ani_data_aniversario = $this->ani_ano."-".$this->ani_mes."-".$this->ani_dia;
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		//recebe a imagem			
			$this->ani_imagem = $_FILES['ani_imagem']['name'];	
			// se não tiver imagem nao faz nenhum tratamento
			
			if ($this->ani_imagem == "") 
			{
			// atualiza aniversariante sem imagem
				$sql="UPDATE aniversariantes SET
				ani_nome = '$this->ani_nome',
				ani_dia = '$this->ani_dia',
				ani_mes = '$this->ani_mes',
				ani_ano = '$this->ani_ano',				
				ani_data_aniversario = '$this->ani_data_aniversario',
				usuario_id = '$this->usuario_id',
				ani_date = NOW(),
				ani_time = NOW()
				WHERE ani_id = '".$this->ani_id."'";
			} else {
			$this->ani_ext = strrchr($this->ani_imagem,'.');
			$this->ani_nome_imagem = md5($this->ani_imagem).$this->ani_ext;
			(move_uploaded_file($_FILES['ani_imagem']['tmp_name'], "images/aniversariantes/".$this->ani_nome_imagem));	
			
			// atualiza serviço com imagem e faz o upload
				$sql="UPDATE aniversariantes SET
				ani_nome = '$this->ani_nome',
				ani_dia = '$this->ani_dia',
				ani_mes = '$this->ani_mes',
				ani_ano = '$this->ani_ano',	
				ani_data_aniversario = '$this->ani_data_aniversario',
				usuario_id = '$this->usuario_id',
				ani_imagem = '$this->ani_nome_imagem',
				ani_date = NOW(),
				ani_time = NOW()
				WHERE ani_id = '".$this->ani_id."'";
			}
		
		
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
		
			
		public function excluirAniversariantes($codigo) {
			
			$sql="select*from aniversariantes where ani_id='$codigo'";
			$resultado=mysql_query($sql);
			if(mysql_num_rows($resultado)==0){
				echo"<script>
						alert('NAO ENCONTRADO');
						history.go(-1);
					 </script>";
			}
			else{
			
			$sql="delete from aniversariantes 
				   where ani_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
                echo '<script type="text/javascript">window.location = "AniversariantesCadastrados";</script>';
			}
			
		}
	
		
	
		

}
?>