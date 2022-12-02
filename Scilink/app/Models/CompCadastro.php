<?php
error_reporting(E_ERROR | E_PARSE);
    require_once 'ModCadastro.php';
    require_once 'Dados/CientistaDAO.php';
    require_once 'Dados/Area_Atuacao_CientistaDAO.php';
    require_once 'Dados/TelefoneDAO.php';
    
    if(!isset($_SESSION)) {
        session_start();
    }

    class CompCadastro{
        function __construct($nome,$emailAlt,$lattes,$dtn,$tel,$ddd)
        {
            $this->Completar($nome,$emailAlt,$lattes,$dtn);
            $this->Area();
            $this->Telefone($ddd,$tel);
            $this->Redirect();
        }    

        function Completar($nome,$emailAlt,$lattes,$dtn){
            $Cadastro = new Cientista($nome,$_SESSION['cpf'],$dtn,$_SESSION['email'],$emailAlt,$lattes,$_SESSION['senha']);
            
            $_SESSION['Cientista'] = $Cadastro;
            $conn = new CientistaDAO;
            $_SESSION['user'] = $conn->insert($_SESSION['Cientista']);
        }

        function Area(){
            $AreaCien = new AreaAtCientistaDAO;

            foreach ($_POST['area'] as $area){
                $AreaCien->insert($_SESSION['user'],$area);
                
            }
        }

        function Telefone($ddd,$num){
            $Tel = new TelefoneDAO;
            $Tel->insert($_SESSION['user'],$ddd,$num);
        }

        function Redirect(){
            echo '<html>
                <head>
                <meta http-equiv="refresh" content="0; ..\Views\telaAltCadastro.php" />
                </head>
                <body>
                <h3>Redirecionando...</h3>
                </body>
            </html>';
        }
    }
    
    $dtn = $_POST['data'];
    $emailAlt = $_POST['emailAlt'];
    $tel = $_POST['phone'];
    $lattes = $_POST['lattes'];
    $ddd = $_POST['ddd'];


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $comp = new CompCadastro($_SESSION['nome'],$emailAlt,$lattes,$dtn,$tel,$ddd); 
    }   
    
?>