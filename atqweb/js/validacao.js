	$(document).ready(function(){		

		$("#formcontato").validate({
		rules:{
			nome: {
				required: true, minlength: 3 },
			email: {
				required: true, email: true},
			assunto: {
				required: true },
			cidade: {
				required: true },
			estado: {
				required: true },
			celular: {
				required: true },
			mensagem: {
				required: true }
			},
		messages:{
			nome: {
				required: "Digite o seu nome",
				minlength: "O nome deve conter no minimo 3 caracteres" },
			email: {
				required: "Digite seu Email"},	
			assunto: {
				required: "Digite o Assunto"},
			estado: {
				required: "Selecione seu Estado"},
			cidade: {
				required: "Digite a sua Cidade" },
			celular: {
				required: "Digite o Telefone"},
			Mensagem: {
				required: "Preencha à Mensagem" }
			} 
		 });  }); 


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
	
		
	id('celular').onkeypress = function(){
		mascara( this, mtel );
		}

	
}

