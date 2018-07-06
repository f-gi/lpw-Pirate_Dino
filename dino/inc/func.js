function validauser (){

	var nome = formuser.nome.value;
	var email = formuser.email.value;
	var senha = formuser.senha.value;
	var senha2 = formuser.senha2.value;

	if (nome ==''){
		alert('O campo nome é obrigatório');
		formuser.nome.focus();
		return false;
	}


	if (senha!=senha2){
		alert('Senhas diferentes');
		formuser.senha.focus();
		return false;
	}
}

/*function valentrar(){

	var nome = formentrar.email.value;
	var senha = formentrar.senha.value;

	if (nom) {

	}
}*/

function validatorrent() {

	var titulo = formpost.titulo.value;
	var descricao = formpost.descricao.value;

	if (titulo<3){
		alert('Titulo muito curto!');
		formpost.titulo.focus();
		return false;
	}

}