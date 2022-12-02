<?php
if(!isset($_SESSION)) {
    session_start();
}

class Cientista {
    private $nom_cientista;
    private $cpf_cientista;
    private $dtn_cientista;
    private $email_cientista;
    private $email_alternativo_cientista;
    private $lattes_cientista;
    private $snh_cientista;

    function __construct($nome,$cpf,$nasc,$email,$email2,$lattes,$snh){
        $this->nom_cientista = $nome;
        $this->cpf_cientista = $cpf;
        $this->dtn_cientista = $nasc;
        $this->email_cientista = $email;
        $this->email_alternativo_cientista = $email2;
        $this->lattes_cientista = $lattes;
        $this->snh_cientista = $snh;
    }
 
    function get_nome_cientista(){
        return $this->nom_cientista;
    }
    function get_cpf_cientista(){
        return $this->cpf_cientista;
    }
    function get_dtn_cientista(){
        return $this->dtn_cientista;
    }
    function get_email_cientista(){
        return $this->email_cientista;
    }
    function get_email_alt_cientista(){
        return $this->email_alternativo_cientista;
    }
    function get_lattes_cientista(){
        return $this->lattes_cientista;
    }
    function get_snh_cientista(){
        return $this->snh_cientista;
    }
    
}
    $_SESSION['Cientista'] = new Cientista(null,null,null,null,null,null,null);
?>