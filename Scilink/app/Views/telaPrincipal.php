<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Scilink - A plataforma para ciência</title>


	<meta property="og:type" content="website" />
	<meta property="og:title" content="Scilink - A plataforma para ciência" />
	<meta property="og:description" content="Venha otmizar os seus projetos" />
	<meta property="og:url" content="http://scilink.com" />
	<meta property="og:image" content="http://scilink.com/img/og-image.png" />


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="../icon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="..\..\public\css\normalize.css">
	<link rel="stylesheet" href="..\..\public\css\reset.css">
	<link rel="stylesheet" href="..\..\public\css\grid.css">
	<link rel="stylesheet" href="..\..\public\css\style.css">
	<link rel="stylesheet" href="..\..\public\css\responsivo.css">
	<link rel="stylesheet" href="..\..\public\css\menu.css">
	<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
	<script>document.documentElement.classList.add("js");</script>
</head>

<body >

	<?php 
	if(!isset($_SESSION)) {
    session_start();
	} ?>

	<header class="header">
		<div class="container">
			<div class="grid-2" >
				<a href="#" >
					<img src="..\..\public\img/desafio/logoheader.svg" alt="SciLink">
				</a>
			</div> 
			<form method="GET" id="buscar" action="">
				<div class="grid-2 header_menu custom-select " style="width:140px;">
					<select placeholder = "isso" name="area">
						<option value="-1">Todas</option >
						<option selected="selected" value="-1">Todas</option >
						<?php
							require_once "../Models/ListarAreas.php";
						?>
					</select>
				</div>
				<div class="grid-6 header_menu">
					<input type="search" id="search-bar" name="busca" placeholder="Busca">
					<input type="image" class="search-icon" src="..\..\public\img/desafio/lupa.png"  onclick="enviar()">
				</div>
			</form>

			<div class="grid-1-2 profile-pic ">
			<label class="-label" >
				  <span class="glyphicon glyphicon-camera"></span>
				</label>
				<img src="..\..\public\img\desafio\perfil.jpg" id="output" width="200" />
			</div>
			  
			  
				<nav class="menu">
					<ul>
						<li><a href="#"><?php echo explode(" ", $_SESSION['nome'])[0]; ?></a>
							<ul class="submenu">
								<li><a href="telaPerfil.php">Perfil</a>
								<li><a href="telaAltCadastro.php">Editar Informações</a>
								<li><a href="../Models/Sair.php">Sair da conta</a>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section class="produtos container fadeInDown tela" data-anime="1600">
		<br><br><br><br><br><br><br><br>

	<ul class="produtos_lista ">

		<?php
			require_once "../Models/Dados/Area_Atuacao_CientistaDAO.php";
			require_once "../Models/Dados/CientistaDAO.php";
			require_once "../Models/Dados/Area_AtuacaoDAO.php";
			require_once "../Models/Dados/ProjetoDAO.php";
		
			if(!isset($_SESSION)) {
				session_start();
			}
			if(!isset($_GET['area'])){
				$_GET['area'] = -1;
			}
			if(!isset($_GET['busca'])){
				$_GET['busca'] = null;
			}

			$area = $_GET['area'];
			$nome = $_GET['busca'];
			
			$areaAt = new AreaAtDAO;
			$conn = new AreaAtCientistaDAO;
			$cientistas = $conn->getCientistas($area);
			$cientista = new CientistaDAO;

			$proj = new ProjetoDAO;
			
			$a = "'";

			$nome = ucwords($nome);
		
			$tam = count($cientistas);
			$i=0;
			$j=0;
			while($i<$tam){ 
				$id = $cientistas[$i];
				$id = $conn->getArea($id);

				$projetos = $proj->getProjetos($cientistas[$i]);		
				if($projetos==null){
					$qtdProj = 0;
				}else
					$qtdProj = count($projetos);

				if($nome!=null){

					if($nome == $cientista->getInfoById($cientistas[$i],"nom")){
						$j=1;
						echo 
						'<form method="POST" action="telaPerfil.php">
							<li class="grid-1-3">
									<div class="produtos_icone">
										<img src="..\..\public\img\desafio\perfil.jpg" height="150px" alt="Foto Perfil">
										<label>'.$cientista->getInfoById($cientistas[$i],"nom").'</label>
										<input type="hidden" name="nomCie" id="nomCie" value="'.$cientista->getInfoById($cientistas[$i],"nom").'">
									</div>
									<h3>'.$areaAt->getNome($id).'</h3>
									<p>Número de Projetos: '.$qtdProj.'</p><br>
									<input type="submit" value="Visitar"></input>
							</li>
						</form>';
					}
				}else{
					$j=1;
					echo 
					'<form method="POST" action="telaPerfil.php">
						<li class="grid-1-3">
								<div class="produtos_icone">
									<img src="..\..\public\img\desafio\perfil.jpg" height="150px" alt="Foto Perfil">
									<label>'.$cientista->getInfoById($cientistas[$i],"nom").'</label>
									<input type="hidden" name="nomCie" id="nomCie" value="'.$cientista->getInfoById($cientistas[$i],"nom").'">
								</div>
								<h3>'.$areaAt->getNome($id).'</h3>
								<p>Número de Projetos: '.$qtdProj.'</p><br>
								<input type="submit" value="Visitar"></input>
						</li>
					</form>';
				}
				$i++;
			}
			if($j==0){
				echo 
						'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<br><br><br>';
			}
			
		?>

	</ul>
	</section>

	<footer>
		<div class="footer">
			<div class="container">

				<div class="grid-3 footer_historia">
					<label>SciLink</label>
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
	<script src="..\..\public/js/foto.js"></script>
	<script src="..\..\public\js\simple-anime.js"></script>
	<script src="..\..\public\js\simple-form.js"></script>
	<script src="..\..\public\js\script.js"></script>
	<script src="..\..\public/js/dropdown.js"></script>
	<!-- JavaScript -->
			
	<script>
		enviar = function(){
			document.getElementById("buscar").submit();
		}

	</script>
		
	</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-1VDDWMRSTH');
	</script><script>
	try {
	  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
		return true;
	  }).catch(function(e) {
		var carbonScript = document.createElement("script");
		carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
		carbonScript.id = "_carbonads_js";
		document.getElementById("carbon-block").appendChild(carbonScript);
	  });
	} catch (error) {
	  console.log(error);
	}
	</script>
</body>

</html>