<?php
    require_once 'ModCadastro.php';
    
    class AltCadastro extends ModCadastro{
        function __construct($nome,$emailAlt,$lattes,$senha)
        {
            $this->Alterar($senha);
            $this->Modificar($nome,$emailAlt,$lattes);
        }    

        function Alterar($senha){

            if($senha==null){
                $senha = $_SESSION['Test']->get_senha_cientista();
            }
        
            $Cadastro = new Cientista($_SESSION['user'],$this->$_SESSION['Test']->get_nome_cientista(),$this->$_SESSION['Test']->get_cpf_cientista(),$this->$_SESSION['Test']->get_dtn_cientista(),$this->$_SESSION['Test']->get_email_cientista(),$this->$_SESSION['Test']->get_email_alt_cientista(),$this->$_SESSION['Test']->get_lattes_cientista(),$this->$_SESSION['Test']->get_snh_cientista(),$this->senha);
            
            $_SESSION['Test'] = $Cadastro;
        }
    }
    
?>