<?php
error_reporting(E_ERROR | E_PARSE);
    require_once "Dados/ProjetoDAO.php";

    if(!isset($_SESSION)) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $resumo = $_POST['mensagem'];
        $dataI = $_POST['dataI'];
        $dataF = $_POST['dataF'];
        $pub = $_POST['pub'];

        $projeto = new ProjetoDAO;
        $projeto->insert($_SESSION['user'],$nome,$resumo,$dataI,$dataF,$pub);

    }
    
        echo '<html>
            <head>
            <meta http-equiv="refresh" content="0; ..\Views\telaPerfil.php" />
            </head>
            <body>
            <h3>Redirecionando...</h3>
            </body>
        </html>';
    
?>