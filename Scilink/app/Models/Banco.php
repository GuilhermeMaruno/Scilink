<?php 
session_start();

class Cientista {
    public $id_cientista;
    private $nom_cientista;
    private $cpf_cientista;
    private $dtn_cientista;
    private $email_cientista;
    private $email_alternativo_cientista;
    private $lattes_cientista;
    private $snh_cientista;
    private $senha_cientista;

    function __construct($id,$nome,$cpf,$nasc,$email,$email2,$lattes,$snh,$senha){
        $this->id_cientista = $id;
        $this->nom_cientista = $nome;
        $this->cpf_cientista = $cpf;
        $this->dtn_cientista = $nasc;
        $this->email_cientista = $email;
        $this->email_alternativo_cientista = $email2;
        $this->lattes_cientista = $lattes;
        $this->snh_cientista = $snh;
        $this->senha_cientista = $senha;
    }

    function get_id_cientista(){
        return $this->id_cientista;
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
    function get_senha_cientista(){
        return $this->senha_cientista;
    }
}

$Cientista1= new Cientista(1,"Cientista 1",12345,01/01/01,"email1@email.com",null,null,null,"abc123");
$Cientista2= new Cientista(2,"Cientista 2",123456,01/01/01,"email2@email.com",null,null,null,"abc123");
$Cientista3= new Cientista(3,"Cientista 3",1234567,01/01/01,"email3@email.com",null,null,null,"abc123");
$_SESSION['Test'];

$Cientistas = array($Cientista1,$Cientista2,$Cientista3,$_SESSION['Test']);


class Titulacao{
    public $id_titulacao;
    private $nom_titulacao;

    function __construct($id,$nom){
        $this->id_titulacao =  $id;
        $this->nom_titulacao = $nom;
    }

    function get_nom_titulacao(){
        return $this->nom_titulacao;
    }
}
$Titulacao1;


class Formacao{
    private $id_cientista;
    private $id_titulacao;
    private $dti_formacao;
    private $dtt_formacao;

    function __construct($Cientista,$Titulacao,$dti,$dtt){
        $this->id_cientista = $Cientista->id_cientista;
        $this->id_titulacao = $Titulacao->id_Titulacao;
        $this->dti_formacao = $dti;
        $this->dtt_formacao = $dtt;
    }

    function get_id_cientista_formacao(){
        return $this->id_cientista;
    }
    function get_id_titulacao_formacao(){
        return $this->id_titulacao;
    }
    function get_dti_formacao(){
        return $this->dti_formacao;
    }
    function get_dtt_formacao(){
        return $this->dtt_formacao;
    }
}
$Formacao1;


class Telefone{
    private $ddd_telefone;
    private $id_cientista;
    private $num_telefone;

    function __construct($ddd,$Cientista,$num){
        $this->ddd_telefone = $ddd;
        $this->id_cientista = $Cientista->id_cientista;
        $this->num_telefone = $num;
    }

    function get_ddd_telefone(){
        return $this->ddd_telefone;
    }
    function get_id_cientista_telefone(){
        return $this->id_cientista;
    }
    function get_num_telefone(){
        return $this->num_telefone;
    }
}
$Telefone1;


class Area_Atuacao{
    public $id_area_atuacao;
    private $nom_area_atuacao;
        
    function __construct($id,$nom){
        $this->id_area_atuacao = $id;
        $this->nom_area_atuacao = $nom;
    }

    function get_id_area_atuacao(){
        return $this->id_area_atuacao;
    }

    function get_nom_area_atuacao(){
        return $this->nom_area_atuacao;
    }
}
$Area_Atuacao1 = new Area_Atuacao(1,"Exemplo 1");
$Area_Atuacao2= new Area_Atuacao(2,"Exemplo 2");
$Area_Atuacao3= new Area_Atuacao(3,"Exemplo 3");

$Areas_Atuacao = array($Area_Atuacao1,$Area_Atuacao2,$Area_Atuacao3);


class Area_Atuacao_Cientista{
    private $id_cientista;
    private $id_area_atucao;

    function __construct($Cientista,$Area_Atuacao){
        $this->id_cientista = $Cientista;
        $this->id_area_atucao = $Area_Atuacao;
    }

    function get_cientista_Area_Atuacao_Cientista(){
        return $this->id_cientista;
    } 
    function get_area_atuacao_Area_Atuacao_Cientista(){
        return $this->id_area_atucao;
    }
}
$Area_Atuacao_Cientista1 = new Area_Atuacao_Cientista(1,1);
$Area_Atuacao_Cientista2 = new Area_Atuacao_Cientista(2,1);
$Area_Atuacao_Cientista3 = new Area_Atuacao_Cientista(3,3);

$Areas_Atuacao_Cientista = array($Area_Atuacao_Cientista1,$Area_Atuacao_Cientista2,$Area_Atuacao_Cientista3);


class Redes_Sociais{
    private $id_rede_social;
    private $id_cientista;
    private $end_rede_social;
    private $tip_rede_social;

    function __construct($id,$Cientista,$end,$tip){
        $this->id_rede_social = $id;
        $this->id_cientista = $Cientista->id_cientista;
        $this->end_rede_social = $end;
        $this->tip_rede_social = $tip;
    }

    function get_id_rede_rocial(){
        return $this->id_rede_social;
    }
    function get_id_cientista_Rede_Social(){
        return $this->id_cientista;
    }
    function get_end_rede_social(){
        return $this->end_rede_social;
    }
    function get_tip_rede_social(){
        return $this->tip_rede_social;
    }
}
$Rede_Social1;


class Projeto{
    private $id_projeto;
    private $id_cientista;
    private $tit_projeto;
    private $res_projeto;
    private $dti_projeto;
    private $dtt_projeto;
    private $pub_projeto;

    function __construct($id,$Cientista,$tit,$res,$dti,$dtt,$pub){
        $this->id_projeto = $id;
        $this->id_cientista = $Cientista->id_cientista;
        $this->tit_projeto = $tit;
        $this->res_projeto = $res;
        $this->dti_projeto = $dti;
        $this->dtt_projeto = $dtt;
        $this->pub_projeto = $pub;
    }

    function get_id_projeto(){
        return $this->id_projeto;
    }
    function get_id_cientista_Projeto(){
        return $this->id_cientista;
    }
    function get_tit_projeto(){
        return $this->tit_projeto;
    }
    function get_res_projeto(){
        return $this->res_projeto;
    }
    function get_dti_projeto(){
        return $this->dti_projeto;
    }
    function get_dtt_projeto(){
        return $this->dtt_projeto;
    }
    function get_pub_projeto(){
        return $this->pub_projeto;
    }
}
$Projeto1;

?>