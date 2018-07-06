<?php
session_start();
require_once('conexao.php');
if(isset($_SESSION['nome'])){ //se tem alguém logado
	$id=$_GET['id'];
	$sql="SELECT * FROM conteudo WHERE id_conteudo='$id'";
	$resultado=pg_query($conexao,$sql);
	$resultado_array=pg_fetch_array($resultado); // só funciona com fatch array
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Pirate Dino - EDITAR TORRENT </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="btn btn-secondary" href="../index.php">Home</a>
		<a class="btn btn-secondary" href="sair.php">Sair</a>
		<a class="btn btn-secondary" href="dash.php">Dash</a> 
	</nav>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="dash.php">Dash</a></li>
			<li class="breadcrumb-item active" aria-current="page">Editar torrent</li>
		</ol>
	</nav>

	<div class="jumbotron">
		<div class="col-md-6 offset-md-2">
			<div class="card" style="width: 50rem;">
				<h5 class="card-header">Editar torrent</h5>
				<div class="card-body">
					<form name="formpost" action="editabanco.php" method="post">

						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Título</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $resultado_array['titulo'];?>">
							</div>
						</div>

						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Descrição</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $resultado_array['descricao']; ?>">
							</div>
						</div>

						<h6>Privacidade</h6>	
						<div class="form-check">
							<input class="form-check-input" type="radio" name="privacidade" id="privacidade" value="1" checked>
							<label class="form-check-label" for="exampleRadios1">
								Publico
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="privacidade" id="privacidade" value="0">
							<label class="form-check-label" for="exampleRadios2">
								Privado
							</label>
						</div>

						<p> <br> </p>

						<h6>Categoria</h6>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="categoria" id="categoria" value="1" checked>
							<label class="form-check-label" for="exampleRadios1">
								Filme
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="categoria" id="categoria" value="2">
							<label class="form-check-label" for="exampleRadios2">
								Série
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="categoria" id="categoria" value="3" checked>
							<label class="form-check-label" for="exampleRadios1">
								Livro
							</label>
						</div>

						<p> <br> </p>

						<div class="form-group">
							<label for="exampleFormControlFile1">Selecione o arquivo</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>

						<input type="hidden" name="id" value="<?php echo $id; ?>">

						<div class="">
							<input type="submit" class="btn btn-primary btn-lg btn-block" onclick="return validatorrent();">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</body>
</html>