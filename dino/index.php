<?php
session_start();
require_once('inc/cabecalho.php');

if(isset($_SESSION['id'])){ //se está logado

	$sql="SELECT * FROM conteudo ORDER BY titulo ASC";
	$resultado = pg_query($conexao, $sql);
	$resultado_array = pg_fetch_all($resultado);
?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#geral" role="tab" aria-controls="home" aria-selected="true"
			>Geral</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#filmes" role="tab" aria-controls="contact" aria-selected="false">Filmes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#series" role="tab" aria-controls="profile" aria-selected="false">Séries</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#livros" role="tab" aria-controls="contact" aria-selected="false">Livros</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">

		<!--geral-->
		<div class="tab-pane fade show active" id="geral" role="tabpanel" aria-labelledby="home-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								$html = '<tr>
								<td>'.$conteudo['titulo'].'</td>
								<td>'.$conteudo['descricao'].'</td>
								<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
								</tr>';
								echo $html;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!--fim geral-->

		<!--filmes-->
		<div class="tab-pane fade" id="filmes" role="tabpanel" aria-labelledby="profile-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 1){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!--fecha filmes-->

		<!--series-->
		<div class="tab-pane fade" id="series" role="tabpanel" aria-labelledby="contact-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 2){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!-- fim series-->

		<!-- livros -->
		<div class="tab-pane fade" id="livros" role="tabpanel" aria-labelledby="contact-tab">
			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 3){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- fim livros-->
<?php
} else{ //se não está logado
	$sql="SELECT * FROM conteudo WHERE status='1' ORDER BY titulo ASC"; //PQ QUE QUANDO BOTA WHERE AQUI CAGA O DE CIMA???
	$resultado = pg_query($conexao, $sql);
	$resultado_array = pg_fetch_all($resultado);
?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#geral" role="tab" aria-controls="home" aria-selected="true"
			>Geral</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#filmes" role="tab" aria-controls="contact" aria-selected="false">Filmes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#series" role="tab" aria-controls="profile" aria-selected="false">Séries</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#livros" role="tab" aria-controls="contact" aria-selected="false">Livros</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">

		<!--geral-->
		<div class="tab-pane fade show active" id="geral" role="tabpanel" aria-labelledby="home-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								$html = '<tr>
								<td>'.$conteudo['titulo'].'</td>
								<td>'.$conteudo['descricao'].'</td>
								<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
								</tr>';
								echo $html;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!--fim geral-->

		<!--filmes-->
		<div class="tab-pane fade" id="filmes" role="tabpanel" aria-labelledby="profile-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 1){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!--fecha filmes-->

		<!--series-->
		<div class="tab-pane fade" id="series" role="tabpanel" aria-labelledby="contact-tab">

			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 2){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div> <!-- fim series-->

		<!-- livros -->
		<div class="tab-pane fade" id="livros" role="tabpanel" aria-labelledby="contact-tab">
			<div class="card" style="width: 50rem;">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Torrent</th>
								<th scope="col">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($resultado_array as $conteudo){
								if($conteudo['id_categoria'] == 3){
									$html = '<tr>
									<td>'.$conteudo['titulo'].'</td>
									<td>'.$conteudo['descricao'].'</td>
									<td> <a class="btn btn-success"href="#"> Baixar </a> </td>
									</tr>';
									echo $html;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- fim livros-->

		<?php
	}
	require_once('inc/rodape.php');
	?>

