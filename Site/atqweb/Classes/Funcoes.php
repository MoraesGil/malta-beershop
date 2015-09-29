<?php
class Funcoes {

	public function formataData($novadata) {
		return substr($novadata,8,2) . "/" . substr($novadata,5,2) . "/" . substr($novadata,0,4);
	}

	public function retornaMes($data) {
		return substr($data,5,2);
	}

	public function retornaDia($data) {
		return substr($data,8,2);
	}

	public function retornaAno($data) {
		return substr($data,0,4);
	}

	public function formataHora($novahora) {
		return substr($novahora,0,2) . "H" . substr($novahora,3,2);
	}

	public function formataDateTime($datetime) {
		return substr($datetime,8,2) . "/" . substr($datetime,5,2) . "/" . substr($datetime,0,4). " às " .substr($datetime,11,8);
	}

	public function formataNivel($novonivel) {
		if ($novonivel == "ADMIN") {
			return "Administrador";
		} else if($novonivel == "USUARIO") {
			return "Usuário";
		} else {
			return "Usuário";
		}
	}

	public function fotoPadrao($foto) {
		if ($foto == "") {
			return "padrao.png";
		} else {
			return $foto;
		}


	}

	public function MesPorNumero($mes)
	{
		switch($mes) {
			case ($mes == 1): $mes = "Janeiro"; break;
			case ($mes == 2): $mes = "Fevereiro"; break;
			case ($mes == 3): $mes = "Março"; break;
			case ($mes == 4): $mes = "Abril"; break;
			case ($mes == 5): $mes = "Maio"; break;
			case ($mes == 6): $mes = "Junho"; break;
			case ($mes == 7): $mes = "Julho"; break;
			case ($mes == 8): $mes = "Agosto"; break;
			case ($mes == 08): $mes = "Agosto"; break;
			case ($mes == 9): $mes = "Setembro"; break;
			case ($mes == 09): $mes = "Setembro"; break;
			case ($mes == 10): $mes = "Outubro"; break;
			case ($mes == 11): $mes = "Novembro"; break;
			case ($mes == 12): $mes = "Dezembro"; break;
		}

		return $mes;
	}

	public function MesAbreviado($mesAbrev){
		switch($mesAbrev)
		{
			case ($mesAbrev == 01): $mesAbrev = "JAN"; break;
			case ($mesAbrev == 02): $mesAbrev = "FEV"; break;
			case ($mesAbrev == 03): $mesAbrev = "MAR"; break;
			case ($mesAbrev == 04): $mesAbrev = "ABR"; break;
			case ($mesAbrev == 05): $mesAbrev = "MAI"; break;
			case ($mesAbrev == 06): $mesAbrev = "JUN"; break;
			case ($mesAbrev == 07): $mesAbrev = "JUL"; break;
			case ($mesAbrev == 08): $mesAbrev = "AGO"; break;
			case ($mesAbrev == 8): $mesAbrev = "AGO"; break;
			case ($mesAbrev == 09): $mesAbrev = "SET"; break;
			case ($mesAbrev == 9): $mesAbrev = "SET"; break;
			case ($mesAbrev == 10): $mesAbrev = "OUT"; break;
			case ($mesAbrev == 11): $mesAbrev = "NOV"; break;
			case ($mesAbrev == 12): $mesAbrev = "DEZ"; break;
		}

		return $mesAbrev;
	}


	public function formataStatusMorador($novostatus) {
		if ($novostatus == "1") {
			return '<span style="font-size:15px; color:#289307; font-weight:700;">• status ativo</span>';
		} else {
			return '<span style="font-size:15px; color:#df0404; font-weight:700;">• status inativo</span>';
		}
	}

	public function selecionaQuadra($valorquadra) {

		for ($i = 1; $i <= 36; $i++) {
			if ($i == $valorquadra) {
				echo 'selected="selected"';
			} else {
				echo '';
			}
		}
	}

	public function formataChatUsuario($tipo) {
		if ($tipo == "2") {
			return "primary";
		} else {
			return "warning";
		}
	}

	public function formataChatNome($tipoNome) {
		if ($tipoNome == "1") {
			return "Administração";
		} else {
			return "$resp->mor_nome";
		}
	}

	public function formataNomeAviso($tipoNome) {
		if ($tipoNome == "1") {
			return "Todos";
		} else if ($tipoNome == "2") {
			return "Por Quadras";
		} else {
			return "Individual";
		}
	}
}

?>
