<?php
error_reporting(E_ERROR | E_PARSE);
    abstract class ModCadastro{
        function __construct()
        {
            require_once 'Dados/Cientista.php';
            if(!isset($_SESSION)) {
                session_start();
            }
        }    

        function Modificar($nome,$emailAlt,$lattes){
            if($nome==null){
                $nome = $_SESSION['Cientista']->get_nome_cientista();
            }
            if($emailAlt==null){
                $emailAlt = $_SESSION['Cientista']->get_email_alt_cientista();
            }
            if($lattes==null){
                $lattes = $_SESSION['Cientista']->get_lattes_cientista();
            }


            $Cadastro = new Cientista($nome,$_SESSION['Cientista']->get_cpf_cientista(),$_SESSION['Cientista']->get_dtn_cientista(),$_SESSION['Cientista']->get_email_cientista(),$emailAlt,$lattes,$_SESSION['Cientista']->get_snh_cientista());

            $_SESSION['Cientista'] = $Cadastro;
        }
    }
    
?>