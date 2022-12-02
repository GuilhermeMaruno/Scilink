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

    <link rel="stylesheet" href="../../public/css/normalize.css">
    <link rel="stylesheet" href="../../public/css/reset.css">
    <link rel="stylesheet" href="../../public/css/grid.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/responsivo.css">
<link rel="stylesheet" href="../../public/css/style2.css">
<link rel="stylesheet" href="../../public/css/menu.css">
<link rel="stylesheet" href="../../public/css/projetos.css">
<link rel="stylesheet" href="../../public/css/style3.css">
<link rel="stylesheet" href="../../public/css/projeto.css">
<link rel="stylesheet" href="../../public/css/perfil.css">

<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
  <script> document.documentElement.classList.add("js");</script>
</head>

<body>

<?php 
	if(!isset($_SESSION)) {
    session_start();
	} ?>

	<header class="header">
		<div class="container">
			<div class="grid-2" >
			<a href="telaPrincipal.php" >
				<img src="../../public/img/desafio/logoheader.svg" alt="Bikcraft">
			</a>
		</div>
			  
				<nav class="menu">
					<ul>
						<li><a href="#"><?php echo explode(" ", $_SESSION['nome'])[0]; ?></a>
							<ul class="submenu">
                <li><a href="telaPrincipal.php">Inicio</a>
								<li><a href="telaAltCadastro.php">Editar Informações</a>
								<li><a href="../Models/Sair.php">Sair da conta</a>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section class="introducao-interna interna_produtos">
		<div class="container">
				<h1 data-anime="400" class="fadeInDown">< Perfil ></h1>
			
		</section>

		<section class="container produto_item fadeInDown" data-anime="1200">
			<div class="grid-4 profile-pic2 fundopic ">
                <label class="-label">
                  <span class="glyphicon glyphicon-camera"></span>
                </label>
                <img src="..\..\public\img\desafio\perfil.jpg" id="output" width="250" />
        </div>

        <?php
        require_once "../Models/Dados/CientistaDAO.php";
        require_once "../Models/Dados/Area_Atuacao_CientistaDAO.php";
        require_once "../Models/Dados/Area_AtuacaoDAO.php";
        require_once "../Models/Dados/TitulacaoDAO.php";
        require_once "../Models/Dados/FormacaoDAO.php";
        require_once "../Models/Dados/TelefoneDAO.php";
        require_once "../Models/Dados/Redes_SociaisDAO.php";
        require_once "../Models/Dados/ProjetoDAO.php";

        $tel = new TelefoneDAO;
        $area = new AreaAtDAO;
        $ac = new AreaAtCientistaDAO;
        $cient = new CientistaDAO;
        $tit = new TitulacaoDAO;
        $form= new FormacaoDAO;
        $rede = new RedeDAO;
        $proj = new ProjetoDAO;
        
        
        if(!isset($_POST['nomCie'])){
          $_POST['nomCie'] = $_SESSION['nome'];
        }

        $id = $cient->getId($_POST['nomCie']);
        $idTit = $form->getInfo($id,"id");
        $nomFor = $tit->getNome($idTit);
        $idArea = $ac->getArea($id);
        $projetos = $proj->getProjetos($id);
        
        if($projetos==null){
          $qtdProj = 0;
        }else
        $qtdProj = count($projetos);

        $_SESSION["projeto"] = $id;

        echo
        '<div class="perfil grid-8">
                <h1>'.$cient->getInfoById($id,"nom").'</h1>
                <p>'.$nomFor.'</p>
                <p><br></p>
                <img class="imgperfil" src="../../public/img/desafio/perfil.svg" width="390" />
            </div>
        
        <li class="grid-5">
            <div class="liperfil">
            <p>'.$cient->getInfoById($id,"email").'</p>
            <p>('.$tel->getInfoById($id,"ddd").")".$tel->getInfoById($id,"num").'</p>
            <a href="'.$cient->getInfoById($id,"lattes").'" target="blank">Lattes</a><br><br>';

            if($rede->getEndereco($id,"f")){
              echo '<a href="'.$rede->getEndereco($id,"f").'" target="blank">Facebook</a><br><br>';
            }
            if($rede->getEndereco($id,"i")){
              echo '<a href="'.$rede->getEndereco($id,"i").'" target="blank">Instagram</a><br><br>';
            }
            if($rede->getEndereco($id,"y")){
              echo '<a href="'.$rede->getEndereco($id,"y").'" target="blank">Youtube</a><br><br>';
            }
            if($rede->getEndereco($id,"t")){
              echo '<a href="'.$rede->getEndereco($id,"t").'" target="blank">TikTok</a>';
            }

            echo  '</li>';

        ?>
        <li class="grid-11">
          <div class="quadroperfil tela">
            <?php
              $areas = $ac->getAreas($id);
              $tam = count($areas);
              $i = 0;
              $j=1;
      
              while($i<$tam){
                
                echo 'echo "<h3 selected="selected" >'.$area->getNome($areas[$i]).'</h3>"';
                $i++;
                $j++;
              }

            ?>
            
              
          </div>
      </li>
      <?php
        if($id == $_SESSION['user']){
          echo '<nav class="menu">
					<ul>
						<li><a href="telaCadProjeto.php">Cadastrar Projeto</a>
            </nav>';
        }
      ?>
		</section>
     
    <div>
    
    <?php
      echo
        '<section class="curso container">
            <h2 class="subtitulo">Projetos - '.$qtdProj.'</h2>';

            
              require_once "../Models/Projetos.php";
    ?>
        
          </section>

	

		<footer>
		<div class="footer">
			<div class="container">

				<div class="grid-3 footer_historia">
					<label>SciLink</label>
				</div>

				<div class="grid-4 footer_contato">
					<ul>
						
				</div>


			</div>
		</div>

		<div class="copy">
			<div class="container">
				<p class="grid-16">Scilink 2022 - todos os direitos reservados</p>
			</div>
		</div>
	</footer>

        <script src="../../public/js/foto.js"></script>
        <script src="../../public/js/simple-anime.js"></script>
        <script src="../../public/js/simple-form.js"></script>
        <script src="../../public/js/script.js"></script>
        <script src="../../public/js/dropdown.js"></script>
        <!-- JavaScript -->
                
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