

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Scilink - A plataforma para ciência</title>
		<meta name="description" content="Scilink - A plataforma para ciência">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="Scilink - A plataforma para ciência"/>
		<meta property="og:description" content="Venha otmizar os seus projetos"/>
		<meta property="og:url" content="http://scilink.com"/>
		<meta property="og:image" content="http://scilink.com/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="../../public/css/normalize.css">
		<link rel="stylesheet" href="../../public/css/reset.css">
		<link rel="stylesheet" href="../../public/css/grid.css">
		<link rel="stylesheet" href="../../public/css/style.css">
		<link rel="stylesheet" href="../../public/css/responsivo.css">
		<script>document.documentElement.classList.add("js");</script>
	</head>
	<body>
		
		<section class="produtos container fadeInDown" data-anime="200">
			<ul class="produtos_lista">
				<li class="grid-9">
					<div class="quadro1" >
						<nav class="grid-4">
								<img id="logo" src="../../public/img/desafio/logo.svg" alt="Scilink">
							</nav>
							<nav class="grid-2 header_menu">
									<img id="sep" src="../../public/img/desafio/sep.svg" alt="Scilink">
							</nav>
							<?php
								require_once "../Lib/style.php"
							?>
					</div>
				</li>

				<li class="grid-7-8">
					<div class="quadro2">
						<section class="introducao2 grid-6-7">
							<img id="detalhe" src="../../public/img/desafio/rec.svg" alt="animação 1">
							<h1>Crie a sua conta</h1>
							<form method="POST" action="../Controllers/CadastroController.php" class="form grid-6">
								<label for="nome">*Nome</label>
								<input type="text" id="nome" name="nome" required maxlength="50">
								<label for="cpf">*CPF</label>
								<input type="text" id="cpf" name="cpf" required maxlength="11">
								<label for="email">*E-mail</label>
								<input type="email" id="email" name="email" required maxlength="50">
								<label for="senha">*Senha</label>
								<input type="password" id="senha" name="senha" required maxlength="50">
								<img id="olho" src="../../public/img/desafio/olho.svg" alt="animação 1"class="olho">
								
								
				
								<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
								<input type="text" class="nao-aparece" name="leaveblank">
								<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
								<input type="text" class="nao-aparece" name="dontchange" value="http://">
								<div class="checkbox">
									<input type="checkbox" id="chk1" class="checkbox" required>
									<label class="termo" for="chk1" >
									</label>
								</div>
								  <label class="termo1">
									Concordo com os termos e condições
								</label>
								<button id="enviar" name="enviar" type="submit" class="botão">CRIAR MINHA CONTA</button>
								<div>
								<label class="possui">Já possui uma conta?<a href="telaLogin.php"> Entrar</a> </label>
							</div>
							</div>
							</form>
						</section>
					</div>
				</li>

			</ul>
		</section>
			

	<!-- JavaScript -->
	<script src="../../public/js/mostrar.js"></script>
	<script src="../../public/js/simple-anime.js"></script>
  <script src="../../public/js/script.js"></script>
	<!-- JavaScript -->

	</body>
</html>
