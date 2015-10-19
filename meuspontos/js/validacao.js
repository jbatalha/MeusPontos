/*Função de excluir item na tela consumo diario*/	
function funExcluir(id) {
		var resposta = confirm("Deseja excluir esse quesito?");
			if (resposta == true) {
				window.location.href = "remover.php?id="+id;/* mudar a referncia de acordo com o banco*/
			}
}
 
/*função validaão de email*/
function validacaoEmail(field) { 
	usuario = field.value.substring(0, field.value.indexOf("@")); 
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
			
	if ((usuario.length >=1) && 
		(dominio.length >=3) && 
		(usuario.search("@")==-1) && 
		(dominio.search("@")==-1) && 
		(usuario.search(" ")==-1) && (dominio.search(" ")==-1) && 
		(dominio.search(".")!=-1) && (dominio.indexOf(".") >=1) && 
		(dominio.lastIndexOf(".") < dominio.length - 1)) 
					
		{ document.getElementById("msgemail").innerHTML="E-mail válido"; alert("E-mail valido"); 
		} else{ document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>"; 
			alert("E-mail invalido"); } 
}






