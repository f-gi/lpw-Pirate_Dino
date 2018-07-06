<?php
	session_start();
	$conexao = pg_connect('host=localhost port=5432 dbname=dino user=postgres password=pastel');
	if(!$conexao){
		echo 'Não conectou com o banco de dados.';
	}
?>