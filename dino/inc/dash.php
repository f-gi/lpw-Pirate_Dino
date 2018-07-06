<?php
session_start();
require_once ('conexao.php');
$id=$_SESSION['id'];
$sql="SELECT * FROM conteudo WHERE id_usuario=$id";
$resultado = pg_query($conexao, $sql);
$resultado_array = pg_fetch_all($resultado);
if(isset($_SESSION['id'])){ //se está logado
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>The Pirate Dino - DASH - </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="btn btn-secondary" href="../index.php">Home</a>
			<a class="btn btn-secondary" href="sair.php">Sair</a>
			<!--    <a class="btn btn-secondary" href="../index.php">Meu perfil</a> -->
		</nav>

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dash</li>
			</ol>
		</nav>

		<div class="jumbotron">
			<div class="col-md-6 offset-md-2">
				<div class="card" style="width: 50rem;">
					<h5 class="card-header">Meus conteúdos</h5>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Nome</th>
									<th scope="col">Opções</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($resultado_array as $conteudo){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>
									<a class="btn btn-success" href="editar.php?id='.$conteudo['id_conteudo'].'"> 
									Editar</a> 
									<a class="btn btn-danger"href="excluir.php?id='.$conteudo['id_conteudo'].'">
									Excluir</a>
									</td>
									</tr>';
									echo $html;
								}
								?>
							</tbody>
						</table>
					</div>
					<div class="card-footer">
						<a class="btn btn-primary btn-lg btn-block" href="novopost.php">Novo Torrent</a>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>

	<?php
}else{
	echo "Você não tem permissão para acessar essa página.";
}
?>