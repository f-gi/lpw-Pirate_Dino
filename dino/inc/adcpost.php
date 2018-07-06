<?php

session_start();
require_once('conexao.php');


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$privacidade = $_POST['privacidade'];
$categoria = $_POST['categoria'];
$id = $_SESSION['id'];

if(isset($_SESSION['id'])){ //se está logado

	if ($titulo!=''){

		echo "entrou no if titulo";

		$sql="INSERT INTO conteudo (titulo, descricao, status, id_usuario, id_categoria) values ('$titulo', '$descricao', '$privacidade', '$id', '$categoria')";
		$adc=pg_query($conexao,$sql);

		if ($adc != false) { //se conseguiu adc no banco
		?>

			<script type="text/javascript">
				alert('Torrent upado com sucesso!');	
			</script>

		<?php

		header('Location: dash.php');

		}else{
		echo "Não conseguiu criar novo torrent";
		}
	}
}else{
	echo "Você não tem acesso a essa página";
}

?>