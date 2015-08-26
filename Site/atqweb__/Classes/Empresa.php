<?php 
class Empresa {	

	public $emp_id;
	public $emp_t1;
	public $emp_t2;
	public $emp_t_esq;
	public $emp_t_dir;
	public $emp_cont_esq;
	public $emp_cont_dir;
	public $usuario_id;
	public $emp_date;
	public $emp_time;

	function atualizarEmpresa() {
		
		
		$this->emp_t1 = mysql_escape_string($_POST['emp_t1']);
		$this->emp_t2 = mysql_escape_string($_POST['emp_t2']);
		$this->emp_t_esq = mysql_escape_string($_POST['emp_t_esq']);
		$this->emp_t_dir = mysql_escape_string($_POST['emp_t_dir']);
		$this->emp_cont_esq = mysql_escape_string($_POST['emp_cont_esq']);
		$this->emp_cont_dir = mysql_escape_string($_POST['emp_cont_dir']);
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		// atualiza empresa conteudo da linha 1
		$sql="UPDATE empresa SET
		emp_t1 = '$this->emp_t1',
		emp_t2 = '$this->emp_t2',
		emp_t_esq = '$this->emp_t_esq',
		emp_t_dir = '$this->emp_t_dir',
		emp_cont_esq = '$this->emp_cont_esq',
		emp_cont_dir = '$this->emp_cont_dir',
		emp_date = NOW(),
		emp_time = NOW(),
		usuario_id = '$this->usuario_id'
		WHERE emp_id = '1'";
			
  
		$resultado=mysql_query($sql);
		if($resultado){
				echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
			}	
									
								
		}
		
	
		

}
?>