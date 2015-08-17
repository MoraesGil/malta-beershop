<div class="contact_page nosidebar">
		<section class="subpage-banner contact-banner">
			<div class="container">
				<div class="row header-group">
					<div class="col-sm-8 col-sm-12">
						<h1>Contato</h1>
						<p>MALTA CERVEJARIA</p>					
					</div>	
                    <div class="col-xs-4 hidden-xs">
						<ol class="breadcrumb navegacao">
                        	<li>Você está em: </li>
							<li><a href="home">Home</a></li>
							<li class="active">Contato</li>
						</ol>			
					</div>			
				</div>
			</div>	
		</section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- Contact Form -->
					<section class="contact-form-blog">
						<div class="row">
							<div class="section-head">
								<header class="col col-xs-12 centered">
									<section>
										<h2>FALE COM A MALTA</h2>
									</section>
									<hr>
									<p class="descriptionText"></p>
								</header>
							</div>	
						</div>
<script type="text/javascript">

/* Máscaras ER */

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function id( el ){
	return document.getElementById( el );
}

window.onload = function(){	

	id('telefone').onkeypress = function(){
		mascara( this, mtel );
		}
}
</script>

						<div class="row">
							<div class="col-xs-12">
								<form class="form-inline" role="form" method="post">
									<div class="row">
										<div class="form-group col-xs-12 col-sm-4">
											<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
										</div>
										<div class="form-group col-xs-12 col-sm-4">
											<input type="email" class="form-control"  name="email" id="email" placeholder="Email" required>
										</div>
										<div class="form-group col-xs-12 col-sm-4">
											<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" maxlength="15">
										</div>
									</div>
                                    
                                    <div class="row">
										<div class="form-group col-xs-12 col-sm-4">
											<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
										</div>
										<div class="form-group col-xs-12 col-sm-4">
            			                      <select class="form-control" name="estado" id="estado" required>
                                                    <option value="" selected="selected">Escolher Estado</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="RS">RS</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                              </select>             
										</div>
										<div class="form-group col-xs-12 col-sm-4">
											<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" maxlength="50">
										</div>
									</div>
									
									<div class="row">
										<div class="form-group col-xs-12">
											<textarea class="form-control" rows="3" name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
										</div>
									</div>

									

									<div class="row">
										
										<div class="form-group col-xs-12 col-sm-12">
											<button type="submit" name="enviar" class="btn-send">Enviar</button>	
										</div>
									</div>

								</form>
                                
<?php 
if(isset($_POST['enviar'])) {
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$fone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	

	$email_remetente = "web@ataquepropaganda.com.br"; 
	$email_destinatario = "web@ataquepropaganda.com.br";
	$email_reply = "$email";
	$email_assunto = "CONTATO VIA SITE MALTA - ".$nome;

	$email_conteudo = '<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
<body style="background:#f6cc5a !important; font-family:"Lato", sans-serif  !important;"><table align="center" width="600" border="0" style="padding:0;background:#f6cc5a;font-family:"Lato", sans-serif  !important; font-size:11px  !important; color:#e42517  !important; border:solid 1px #f6cc5a  !important"><tr><td><img style="max-width:150px !important; " src="http://ataquepropaganda.com.br/malta/_/images/logo-malta.png" /></td></tr><tr><td><p><strong>Contato via site de: '.$nome.' </strong></p><p><strong>Nome: '.$nome.'<br />E-mail: '.$email.'<br />Telefone: '.$fone.'<br />Cidade: '.$cidade.'/'.$estado.'<br />Assunto: '.$assunto.'<br />Mensagem: '.$mensagem.'</strong><br /><br /></p></td></tr><tr><td>© Cervejaria Malta • Todos os direitos reservados</td></tr></table></body>';	 		

	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );	


 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
	 	echo '<div class="alert alert-success" role="alert">
     	<strong>'.$nome.'!</strong> Sua mensagem foi enviada com sucesso!
     	</div>';
} else {
		echo '<div class="alert alert-danger" role="alert">
     	<strong>'.$nome.'!</strong> Erro ao enviar! Tente Novamente!
    	</div>';
	}
}
?>
							</div>
						</div>

						
					</section>

					
				</div>
			</div>			
		</div>
	</div>
    <br>