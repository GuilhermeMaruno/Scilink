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

        <link rel="stylesheet" href="..\..\public\css/normalize.css">
        <link rel="stylesheet" href="..\..\public\css/reset.css">
        <link rel="stylesheet" href="..\..\public\css/grid.css">
        <link rel="stylesheet" href="..\..\public\css/style.css">
        <link rel="stylesheet" href="..\..\public\css/responsivo.css">
        <link rel="stylesheet" href="..\..\public\css/menu.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'><link rel="stylesheet" href="..\..\public\css/filter.css">
        <link rel="stylesheet" href="..\..\public\css/complete.css">
        <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

        <script>document.documentElement.classList.add("js");</script>
    </head>

    <body>
        <?php
        if(!isset($_SESSION)) {
            session_start();
        }
        ?>

        <header class="header">
            <div class="container ">
            <a href="../Models/Sair.php" class="grid-2">
                <img src="..\..\public\img/desafio/logoheader.svg" alt="Scilink">
            </a>
                        <nav class="menu">
                            <ul>
                            <li><a href="#"><?php echo $_SESSION['nome']; ?></a>
							<ul class="submenu">
								<li><a href="../Models/Sair.php">Cancelar</a>
							</ul>
						</li>
                            </ul>
                        </nav>
                    </div>
            </div>
        </header>

        <section class="container tela">
            <ul>
                <li class="grid-6">
                    <div class="quadro2">
                        <section class="introducao2 grid-10">
                            <img id="detalhe" src="..\..\public\img/desafio/rec.svg" alt="animação 1">
                            <h1>Finalize a sua conta</h1>
                            <label>Complete os seus dados para conseguir utilizar a sua conta</label>
                        </section>
                        <form method="POST" action="../Controllers/CompCadastroController.php" class="form grid-6">
                            <label for="data"><span>*</span>Data de Nascimento</label>
                            <input type="date" id="data" name="data" required>
                            <label for="email"><span></span>E-mail Alternativo</label>
                            <input type="email" id="emailAlt" name="emailAlt" maxlength="50">
                            <label for="email"><span>*</span>Telefone</label>
                            <input type="text" placeholder="(ddd)" name="ddd" id="ddd" required/ maxlength="3">
                            <input type="text" placeholder="xxxxx-xxxx" name="phone" id="phone" required maxlength="9"/>
                            <label for="email"><span>*</span>Áreas de Atuação</label>
                            <select class="grid-6" name="area[]" id="area" multiple data-placeholder="Selecione" required>
                                <?php 
                                    require_once "../Models/ListarAreas.php";
                                ?>
                            </select> 
                            <label for="senha"><span>*</span>Currículo Lattes (link)</label>
                            <input type="search" id="lattes" name="lattes" required>
                            <img id="olho" src="..\..\public\img/desafio/olho.svg" alt="animação 1" class="olho">

                            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                            <input type="text" class="nao-aparece" name="leaveblank">
                            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                            <input type="text" class="nao-aparece" name="dontchange" value="http://">
                            <div class="checkbox">
                                <input type="checkbox" id="chk1" class="checkbox" required>
                                <label class="termo" for="chk1">
                                </label>
                            </div>
                            <label class="termo1">
                                Concordo em fazer parte da comunidade
                            </label>
                            <button id="enviar" name="enviar" type="submit" class="botão">CONCLUIR CADASTRO</button>
                        </form>
                    </div>
                </li>

                <li class="grid-8 completa">
                    <img src="..\..\public\img/desafio/completa.svg" alt="animação 1">
                </li>
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

        <script src="..\..\public\js/foto.js"></script>
        <script src="..\..\public\js/simple-anime.js"></script>
        <script src="..\..\public\js/simple-form.js"></script>
        <script src="..\..\public\js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="..\..\public\js/filter.js"></script>
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

    </body>

</html>
