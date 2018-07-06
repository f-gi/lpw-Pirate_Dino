<?php
session_start();
require_once('conexao.php');
$id=$_GET['id'];

if(isset($_SESSION['id'])){ //se está logado

	$sql = "DELETE FROM conteudo WHERE id_conteudo='$id'";
	$exclui = pg_query($conexao,$sql);

	if($exclui!=false){ //se conseguiu excluir do banco
		?>
		<script type="text/javascript">
				alert('Torrent excluído com sucesso!');	
			</script>
		<?php
		header('Location: dash.php');
	}else{
		echo "Não excluiu do banco";
	}

}else{
	echo "VocÊ não tem permissão para estar nessa página.";
}

?>