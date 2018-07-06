<?php
require_once ('conexao.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>The Pirate Dino</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script type="text/javascript" src="func.js">
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="btn btn-secondary" href="../index.php">Home</a>
	</nav>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Criar cadastro</li>
		</ol>
	</nav>


	<?php 
	if (isset($_SESSION['mensagem'])){
		echo $_SESSION['mensagem']; 
		unset($_SESSION['mensagem']);
	}?>


	<div class="jumbotron">
		<div class="col-md-6 offset-md-2">
			<div class="card" style="width: 50rem;">
				<h5 class="card-header">Cadastro</h5>
				<div class="card-body">
					<form name="formuser" action="adc_novouser.php" method="post">
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Nome</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
							</div>
						</div>
						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Confirme sua senha</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="senha2" name="senha2" placeholder="Password">
							</div>
						</div>
						<div class="">
							<input type="submit" class="btn btn-primary btn-lg btn-block" onclick="return validauser();">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<?php
	require_once('rodape.php'); 
	//$nome=$_POST['nome']//[tem que ser igual ao name do form]
	?>