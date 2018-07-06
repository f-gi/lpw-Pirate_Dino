<?php
require_once ('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Pirate Dino</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<?php
	if(isset($_SESSION['id'])){//se tiver logado
		?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="btn btn-secondary" href="inc/sair.php">Sair</a>
			<a class="btn btn-secondary" href="inc/dash.php">Dash<a>
			</nav>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Home</li>
				</ol>
			</nav>

			<?php
	}else{ //se não
		?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="btn btn-primary" href="inc/entrar.php">Entrar</a> 
			<a class="btn btn-secondary" href="inc/novo_user.php">Criar cadastro</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto"> <!-- para separar o modal e o search -->
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Dino Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
				</form>
			</div>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">Home</li>
			</ol>
		</nav>

		<?php
	}
	?>

