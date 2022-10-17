<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>SciLink</title>
    <meta name="description" content="Scilink - A plataforma para ciência">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="..\..\public\css\normalize.css">
	<link rel="stylesheet" href="..\..\public\css\reset.css">
	<link rel="stylesheet" href="..\..\public\css\grid.css">
	<link rel="stylesheet" href="..\..\public\css\style.css">
	<link rel="stylesheet" href="..\..\public\css\produtos.css">
	<link rel="stylesheet" href="..\..\public\css\responsivo.css">
	<link rel="stylesheet" href="..\..\public\css\menu.css">
	<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script>document.documentElement.classList.add("js");</script>
</head>

<body>
    <?php session_start(); ?>
	<header class="header">
		<div class="container">
			<a href="telaPrincipal.php" class="grid-2">
				<img src="..\..\public\img\desafio\logoheader.svg" alt="Menu">
			</a>
			<div class="grid-8 header_menu">
				<form class="search-container">
					<input type="search" id="search-bar" placeholder="Busca">
					<a href="#"><img class="search-icon" src="..\..\public\img/desafio/lupa.png"></a>
				</form>
			</div>
			<div class="box grid-1">
				<label class="avatar" for="btn">
					<img src="..\..\public\img\desafio\perfil.jpg" alt="">
				</label>
				<input type="checkbox" id="btn">
				<div class="menu1">
				</div>
			</div>
			<div class="grid-1 dropdown">
				<input type="checkbox" id="bt_menu">
				<label for="bt_menu">&#9776;</label>

				<nav class="menu">
					<ul>
						<li><a href="#"><?php echo $_SESSION['nome']; ?></a>
							<ul class="submenu">
								<li><a href="#">Editar Informações</a>
								<li><a href="#">Sair da conta</a>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<footer>
		<div class="footer">
			<div class="container">

				<div class="grid-3 footer_historia">
					<label>SciLink</label>
				</div>

				<div class="grid-4 footer_contato">
					<ul>
						<li>- Projetos</li>
						<li>- Cientistas</li>
						<li>- Meu Perfil</li>
					</ul>
				</div>


			</div>
		</div>

		<div class="copy">
			<div class="container">
				<p class="grid-16">Scilink 2022 - todos os direitos reservados</p>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="..\..\public\js\simple-anime.js"></script>
	<script src="..\..\public\js\simple-form.js"></script>
	<script src="..\..\public\js\script.js"></script>
	<!-- JavaScript -->

</body>

</html>

