<?php 
require("loader.php");
include "Escrita.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/* 
		 * atribuindo valor que foi digitado
		 * no campo com o name="login" no formul�rio cadastro.php
		 * Os outros � a mesma coisa, s� muda os campos daonde eles est�o pegando os
		 * valores, o campo sempre vai ter o mesmo nome no arquivo cadastro.php  
		 * que o nome $_POST["que_estiver_aqui"]
		*/
		$nome = $_POST["nome"]; 
		$email = $_POST["email"];
    	$senha = $_POST["senha"]; 
    	$tipo = $_POST["tipo"];
}
//aqui instanciamos um objeto da classe Escrita e atribuimos sua referencia a $escrita
$escrita = new Escrita(); 
//declaramos uma variavel;
$teste_status; 
//executamos o metodo cadastrar do objeto $escrita e retornamos o valor true
//se executar corretamente sen�o false;
$teste_status = $escrita->cadastrarUsuario($nome, $email, $senha, $tipo);
//iremos utilizar a variavel criada acima($teste_status)
//para retornar uma resposta apropriada para o usuario;
if ($teste_status == true){
	  /*	$corpo;
  		$remetente = "contato@rafaelsm.com.br";
  		$destinatario = $email;
  		$corpo = "Obrigado por cadastrar em nosso site.";
  		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset= utf-8\r\n";
		$headers .= "Reply-To: ".$remetente."\r\n";
		$headers .= "From: contato@rafaelsm.com.br \r\n";
		*/
  		//mail($destinatario, $assunto, $corpo, $headers);

		echo "<div id='content'>Cadastro efetuado com sucesso</div>";
}else{
		echo "<div id='content'>Ocorreu um erro no cadastro.</div>";		
}

//Destruimos o conteudo (A instancia do objeto);
unset($escrita);
//Apagamos a referencia;
$escrita = null;
?>
