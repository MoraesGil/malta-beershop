<?php
class Funcoes {
	
		public function formataData($novadata) {
			return substr($novadata,8,2) . "/" . substr($novadata,5,2) . "/" . substr($novadata,0,4);	
		}
		
		public function retornaMes($data) {
			return substr($novadata,5,2);	
		}
		
		public function retornaDia($data) {
			return substr($novadata,8,2);	
		}
		
		public function retornaAno($data) {
			return substr($novadata,0,4);	
		}
		
		public function formataHora($novahora) {
			return substr($novahora,0,2) . "h" . substr($novahora,3,2) . "min";			
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