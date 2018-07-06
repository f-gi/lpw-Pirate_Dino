<?php

require_once ('conexao.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senha2=$_POST['senha2'];

$sqll="SELECT email FROM usuarios WHERE email='$email'";
$verifica=pg_query($conexao,$sqll);

if(pg_num_rows($verifica)<1){ //se não tem esse email cadastrado ainda

	if ($senha==$senha2 ){ //se as senhas coencindirem 
		$sql="INSERT INTO usuarios(senha,nome,email,status) VALUES ('$senha','$nome','$email','1')"; //bota no banco
		$adiciona=pg_query($conexao,$sql);
		if($adiciona != false){ //se conseguiu adc no banco
			if(pg_affected_rows($adiciona) != 0){ //esqueci pq fiz isso
				header('Location: entrar.php');
			}else{ //se não
				echo 'Erro ao criar usuário.'; 
				echo '<a class="navbar-brand" href="C:\Bitnami\wappstack-7.1.17-0\apache2\htdocs\dino\inc\novo_user.php">Voltar</a>'; //redireciona pra home
			}
		}
	}else{ 
		 echo "deu ruim";
	}	
}else{ //se email já cadastrado
	$_SESSION['mensagem']='email já cadastrado';
	header ('Location: novo_user.php');
}

?>