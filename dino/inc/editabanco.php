<?php

session_start();
require_once ('conexao.php');

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$privacidade = $_POST['privacidade'];
$categoria = $_POST['categoria'];
$id = $_POST['id'];

if(isset($_SESSION['id'])){ //se está logado

	if ($titulo!=''){

		$sql="UPDATE conteudo SET titulo='$titulo', descricao='$descricao', status='$privacidade', id_categoria='$categoria' WHERE id_conteudo='$id'";
		$alt=pg_query($conexao,$sql);

		if($alt!=false){ //se conseguiu por no banco
			header('Location: dash.php');
		}else{
			echo "Não pos no banco";
		}

	}else{
		echo "O campo titulo é obrigatório";
	}
}else{

	echo "Você não tem acesso a esta página";
}

?>