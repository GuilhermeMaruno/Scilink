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
   />
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="../../public/css/normalize.css">
  <link rel="stylesheet" href="../../public/css/reset.css">
  <link rel="stylesheet" href="../../public/css/grid.css">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/css/responsivo.css">
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'><link rel="stylesheet" href="./css/filter.css">
  <link rel="stylesheet" href="../../public/css/complete.css">
  <link rel="stylesheet" href="../../public/css/dados.css">
  <link rel="stylesheet" href="../../public/css/menu.css">
  <link rel="stylesheet" href="../../public/css/cadprojeto.css">
  <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <script>document.documentElement.classList.add("js");</script>
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

  <section class="container">
    <ul>
      <li class="grid-6">
      <div class="quadro2">
        <section class="introducao2 grid-10">
          <img id="detalhe" src="../../public/img/desafio/rec.svg" alt="animação 1">
          <h1>Cadastre o seu projeto</h1>
        </section>

        <form class="form grid-6" method="POST" action="../Controllers/ProjetoController.php">
          <label for="text"><span>*</span>Nome do Projeto</label>
          <input type="text" id="nome" name="nome" required maxlength="50">
          <label for="email"><span>*</span>Resumo</label>
          <textarea name="mensagem" id="mensagem" required maxlength="250"></textarea><br>
          <label for="data"><span>*</span>Data de Inicio</label>
          <input type="date" id="data" name="dataI" required>
          <label for="data">Data de Fim</label>
          <input type="date" id="data" name="dataF" value="null">
          <label for="senha"><span>*</span>Privacidade</label>
            <select class="filtro" name="pub" data-placeholder="Selecione">
            <option value="1">Público</option>
			<option value="0">Privado</option>
            </select> 


          <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
          <input type="text" class="nao-aparece" name="leaveblank">
          <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
          <input type="text" class="nao-aparece" name="dontchange" value="http://">
          <button id="enviar" name="enviar" type="submit" class="botão">CONCLUIR CADASTRO</button>
      </div>
      </form>
    </div>
    </li>

  <li class="grid-8 completa">
    <img src="../../public/img/desafio/projeto.svg" alt="animação 1">
  </li>
</ul>
</section>
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
  <script src="../../public/js/foto.js"></script>
  <script src="../../public/js/simple-anime.js"></script>
  <script src="../../public/js/simple-form.js"></script>
  <script src="../../public/js/script.js"></script>
  <script src="../../public/js/dropdown.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="./js/filter.js"></script>
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
<script type="text/javascript">
  $(document).ready(function(){
$('body').on('focus', '.phone', function(){
  var maskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  options = {
      onKeyPress: function(val, e, field, options) {
          field.mask(maskBehavior.apply({}, arguments), options);

          if(field[0].value.length >= 14){
              var val = field[0].value.replace(/\D/g, '');
              if(/\d\d(\d)\1{7,8}/.test(val)){
                  field[0].value = '';
                  alert('Telefone Invalido');
              }
          }
      }
  };
  $(this).mask(maskBehavior, options);
});
});
</script>
 
  <!-- JavaScript -->

</body>

</html>