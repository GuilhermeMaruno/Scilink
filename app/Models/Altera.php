<?php
error_reporting(E_ERROR | E_PARSE);
    require_once "Dados/CientistaDAO.php";
    require_once "Dados/Area_Atuacao_CientistaDAO.php";
    require_once "Dados/Area_AtuacaoDAO.php";
    require_once "Dados/TelefoneDAO.php";
    require_once "Dados/FormacaoDAO.php";
    require_once "Dados/Redes_SociaisDAO.php";

    if(!isset($_SESSION)) {
        session_start();
	}

    $cientista = new CientistaDAO();
    $telefone = new TelefoneDAO();
    $area = new AreaAtCientistaDAO();
    $rede = new RedeDAO();
    $forma = new FormacaoDAO();
    $a = "'";

        echo
        '<form method="POST" action="../Controllers/AltCadastroController.php" class="form tela" id="form1">

            <ul >
                <li class="grid-1-3">
                    <div class="quadro2">
                        <section class="introducao2 grid-8">
                            <br>
                            <img id="detalhe" src="../../public/img/desafio/rec.svg" alt="animação 1">
                            <h1>Editar Informações</h1>
                            <label>Consulte o seu perfil e altere os dados se necessário</label>
                        </section>

                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required placeholder="Nome" value="'.$cientista->getInfoById($_SESSION['user'],"nom").'" maxlength="50">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" required disabled placeholder="CPF" value="'.$cientista->getInfoById($_SESSION['user'],"cpf").'" >
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required disabled placeholder="Email" value="'.$cientista->getInfoById($_SESSION['user'],"email").'">
                        <label for="email">E-mail Alternativo</label>
                        <input type="email" class="ls-form-text" placeholder="email@texto.com" id="emailAlt" name="emailAlt" value="'.$cientista->getInfoById($_SESSION['user'],"email_alternativo").'" maxlength="50" >
                        <img id="olho" src="../../public/img/desafio/olho.svg" alt="animação 1" class="olho">
                        <label for="data">Data de Nascimento</label>
                        <input placeholder="01/01/1111" class="data" type="text" name="dtn" value="'.$cientista->getInfoById($_SESSION['user'],"dtn").'" onfocus="(this.type='.$a.'date'.$a.')" onfocusout="(this.type='.$a.'text'.$a.')">
            
                    </div>
                </li>
                    
                <li class="grid-1-3">
                    <div class="quadro2">
                        <br><br><br><br><br><br<br>
 
                        <label for="email">Telefone</label>
                        <input type="text" placeholder="(ddd)" name="ddd" class="ddd" required value="'.$telefone->getInfoById($_SESSION['user'],"ddd").'" maxlength="3">
                        <input type="text" placeholder="xxxxx-xxxx" name="phone" class="phone" required value="'.$telefone->getInfoById($_SESSION['user'],"num").'" maxlength="9">
                        <label for="email">Currículo Lattes (link)</label>
                        <input type="text" id="lattes" name="lattes" required placeholder="Lattes" value="'.$cientista->getInfoById($_SESSION['user'],"lattes").'" maxlength="50">
                        <label for="senha">Titulação</label>
                        <select class="grid-1-3 filtro" name="titulacao" data-placeholder="Selecione">';
                        
                        require_once "ListarTitulacao.php";
                            
                        echo '</select> 
                        <label for="data">Data de Inicio da Formação</label>
                        <input placeholder="01/01/1111" class="data" name="dtiF" type="text" value="'.$cientista->getInfoById($_SESSION['user'],"dtn").'" onfocus="(this.type='.$a.'date'.$a.')" onfocusout="(this.type='.$a.'text'.$a.')">
                        <label for="data">Data de Termino da Formação</label>
                        <input placeholder="01/01/1111" class="data" name="dtfF" type="text" value="'.$cientista->getInfoById($_SESSION['user'],"dtn").'" onfocus="(this.type='.$a.'date'.$a.')" onfocusout="(this.type='.$a.'text'.$a.')">
                        <img id="olho" src="../../public/img/desafio/olho.svg" alt="animação 1" class="olho">

                        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                        <input type="text" class="nao-aparece" name="leaveblank">
                        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                        <input type="text" class="nao-aparece" name="dontchange" value="http://">
                        <button type="submit" id="enviar" name="enviar" class="botão" >SALVAR ALTERAÇÕES</button>
                    </div>
                </li>

                <li class="grid-1-3">
                    <div class="quadro2">
                        <br><br><br><br><br><br<br>

                        <section class="social">
                            <label for="senha">Redes Sociais (link)</label>
                            <input type="search" id="facebook" name="facebook" placeholder="Facebook" value="'.$rede->getEndereco($_SESSION['user'],"f").'" maxlength="50">
                            <input type="search" id="instagram" name="instagram" placeholder="Instagram" value="'.$rede->getEndereco($_SESSION['user'],"i").'" maxlength="50">
                            <input type="search" id="youtube" name="youtube" placeholder="YouTube" value="'.$rede->getEndereco($_SESSION['user'],"y").'" maxlength="50">
                            <input type="search" id="tiktok" name="tiktok" placeholder="TikTok" value="'.$rede->getEndereco($_SESSION['user'],"t").'" maxlength="50">
                        </section>

                        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                        <input type="text" class="nao-aparece" name="leaveblank">
                        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                        <input type="text" class="nao-aparece" name="dontchange" value="http://">
                    </div>
                </li>   
            </ul>
        </form>   
        '
?>