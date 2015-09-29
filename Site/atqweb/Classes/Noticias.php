<?php
class Noticias {

	public $not_id;
	public $not_titulo;
	public $not_descricao;
	public $not_conteudo;
	public $usuario_id;
	public $not_ano;
	public $not_mes;
	public $not_dia;
	public $not_view;//diz se está disponivel para os leitores
	public $not_date;


	public function cadastrarNoticias(){

		$this->not_titulo = mysql_escape_string($_POST['not_titulo']);
		$this->not_descricao = mysql_escape_string($_POST['not_descricao']);
		$this->not_conteudo = mysql_escape_string($_POST['not_conteudo']);
		$this->not_date = mysql_escape_string($_POST['not_date']);
		$this->not_view = mysql_escape_string($_POST['not_view']);
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		$this->not_dia = mysql_escape_string(substr($this->not_date,8,2));
		$this->not_mes = mysql_escape_string(substr($this->not_date,5,2));
		$this->not_ano = mysql_escape_string(substr($this->not_date,0,4));
		$data = mysql_escape_string($this->not_ano."-".$this->not_mes."-".$this->not_dia);


		$sql = mysql_query("INSERT INTO `noticias`
		(`not_titulo`, `not_descricao`, `not_conteudo`, `usuario_id`,
		`not_date`, `not_time`, `not_dia`, `not_mes`, `not_ano`, `not_view`)
		VALUES
		('$this->not_titulo', '$this->not_descricao', '$this->not_conteudo', '$this->usuario_id',
		'$data', NOW(), '$this->not_dia', '$this->not_mes', '$this->not_ano', '$this->not_view'
		)");
		if($sql){
			$sqlConsulta = mysql_query("SELECT * FROM noticias ORDER BY not_id DESC LIMIT 1;");
			while($linha =  mysql_fetch_array($sqlConsulta)) {
				$idnot = $linha['not_id'];
			}
			//echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! </div>';
			echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! Você será redirecionado para fazer o upload das imagens! </div>';
			echo '<meta http-equiv="refresh" content="3; URL=AtualizarNoticias&id='.$idnot.'">';
		}else{
			echo '<div class="alert alert-danger" role="alert">Falha ao inserir!!</div>';
		}

	}

	public function atualizarNoticias() {

		$this->not_id= mysql_escape_string($_POST['not_id']);
		$this->not_titulo = mysql_escape_string($_POST['not_titulo']);
		$this->not_descricao = mysql_escape_string($_POST['not_descricao']);
		$this->not_conteudo = mysql_escape_string($_POST['not_conteudo']);
		$this->not_date = mysql_escape_string($_POST['not_date']);
		$this->not_view = mysql_escape_string($_POST['not_view']);
		$this->usuario_id = mysql_escape_string($_POST['usuario_id']);
		$this->not_dia = mysql_escape_string(substr($this->not_date,8,2));
		$this->not_mes = mysql_escape_string(substr($this->not_date,5,2));
		$this->not_ano = mysql_escape_string(substr($this->not_date,0,4));
		$data = mysql_escape_string($this->not_ano."-".$this->not_mes."-".$this->not_dia);

		$sql="UPDATE noticias SET
		not_titulo = '$this->not_titulo',
		not_descricao = '$this->not_descricao',
		not_conteudo = '$this->not_conteudo',
		not_view = '$this->not_view',
		usuario_id = '$this->usuario_id',
		not_dia = '$this->not_dia',
		not_mes = '$this->not_mes',
		not_ano = '$this->not_ano',
		not_date = '$data',
		not_time = NOW()
		WHERE not_id = '$this->not_id'";


		$resultado=mysql_query($sql);
		if($resultado){
			echo '<div class="alert alert-success" role="alert">Atualizado com sucesso! </div>';

		}else{
			echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
		}
	}


	public function excluirNoticias($codigo) {

		$sql="select*from noticias where not_id='$codigo'";
		$resultado=mysql_query($sql);
		if(mysql_num_rows($resultado)==0){
			echo"<script>
			alert('NAO ENCONTRADO');
			history.go(-1);
			</script>";
		}
		else{

			$sqlConsulta = mysql_query("select * from noticias_fotos where not_id = ".$codigo.";");
			$numRows = mysql_num_rows($sqlConsulta);
			if ($numRows >= 1) {
				while($linha =  mysql_fetch_array($sqlConsulta)) {
					$url = $linha['nfto_url'];
					$file = "noticias_fotos/fotos/$url";
					if ( file_exists( $file ) )
					{
						@unlink( $file );
					}

				}
				$deletaFotosBanco = mysql_query("DELETE FROM noticias_fotos WHERE not_id = '".$codigo."'; ");

			}
			$deletaNoticia=mysql_query("DELETE FROM noticias  where not_id='".$codigo."' LIMIT 1");

			echo '<script type="text/javascript">window.location = "NoticiasCadastradas";</script>';
		}

	}

	public function visualizarNoticias($codigo) {

		$sql="select*from noticias where not_id='$codigo'";
		$resultado=mysql_query($sql);

		if(mysql_num_rows($resultado)==0){
			echo"<script>
			alert('NAO ENCONTRADO');
			history.go(-1);
			</script>";
		}
		else{
			while ($linha = mysql_fetch_array($resultado)) {
				$view = $linha['not_view'];
			}

			if ($view == "s") {
				$sql="UPDATE noticias SET
				not_view = 'n'
				where not_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
				if($resultado){
					echo '<script type="text/javascript">window.location = "NoticiasCadastradas";</script>';

				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}
			}else{
				$sql="UPDATE noticias SET
				not_view = 's'
				where not_id='$codigo' LIMIT 1";
				$resultado=mysql_query($sql);
				if($resultado){
					echo '<script type="text/javascript">window.location = "NoticiasCadastradas";</script>';

				}else{
					echo '<div class="alert alert-danger" role="alert">Falha ao atualizar!!</div>';
				}
			}

		}

	}




}
?>
