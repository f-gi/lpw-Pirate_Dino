<?php

require_once('conexao.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>The Pirate Dino - LOGIN -</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="btn btn-secondary" href="../index.php">Home</a>
	</nav>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Entrar</li>
		</ol>
	</nav>

	<div class="jumbotron">
		<div class="col-md-6 offset-md-2">
			<div class="card" style="width: 50rem;">
				<h5 class="card-header">Entrar</h5>
				<div class="card-body">
					<form name="formentrar" action="login.php" method="post">
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
						<div class="">
							<input type="submit" class="btn btn-primary btn-lg btn-block" onclick="return valentrar()">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
