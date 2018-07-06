<?php

require_once('conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$resultado=pg_query($conexao,$sql);
$nome=$resultado['nome'];


//if($resultado != false){ // se conectou 
	if(pg_num_rows($resultado)>0){ // se tem algo no banco
		$registro=pg_fetch_array($resultado);
		session_start(); 
		$_SESSION['nome']=$registro['nome'];
		$_SESSION['id']=$registro['id_usuario'];
		$_SESSION['status']=$registro['status'];
		header('Location: dash.php');
	}
//}

?>