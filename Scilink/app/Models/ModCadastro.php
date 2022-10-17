<?php
    abstract class ModCadastro{
        function __construct()
        {
            require_once 'Banco.php';
            session_start();
        }    

        function Modificar($nome,$emailAlt,$lattes){
            if($nome==null){
                $nome = $_SESSION['Test']->get_nome_cientista();
            }
            if($emailAlt==null){
                $emailAlt = $_SESSION['Test']->get_email_alt_cientista();
            }
            if($lattes==null){
                $lattes = $_SESSION['Test']->get_lattes_cientista();
            }

            $Cadastro = new Cientista($_SESSION['user'],$this->nome,$this->$_SESSION['Test']->get_cpf_cientista(),$this->$_SESSION['Test']->get_dtn_cientista(),$this->$_SESSION['Test']->get_email_cientista(),$this->emailAlt,$this->lattes,$this->$_SESSION['Test']->get_snh_cientista(),$this->$_SESSION['Test']->get_senha_cientista());
            
            $_SESSION['Test'] = $Cadastro;
        }
    }
    
?>