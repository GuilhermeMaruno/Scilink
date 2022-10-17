<?php
    require_once 'ModCadastro.php';
    
    class CompCadastro extends ModCadastro{
        function __construct($nome,$emailAlt,$lattes,$snh,$dtn)
        {
            $this->Completar($dtn,$snh);
            $this->Modificar($nome,$emailAlt,$lattes);
        }    

        function Completar($dtn,$snh){

            if($dtn==null){
                $dtn = $_SESSION['Test']->get_dtn_cientista();
            }
            if($snh==null){
                $snh = $_SESSION['Test']->get_snh_cientista();
            }
        
            $Cadastro = new Cientista($_SESSION['user'],$this->$_SESSION['Test']->get_nome_cientista(),$this->$_SESSION['Test']->get_cpf_cientista(),$this->dtn,$this->$_SESSION['Test']->get_email_cientista(),$this->Cientista->get_email_alt_cientista(),$this->$_SESSION['Test']->get_lattes_cientista(),$this->snh,$this->$_SESSION['Test']->get_senha_cientista());
            
            $_SESSION['Test'] = $Cadastro;
        }
    }
    
?>