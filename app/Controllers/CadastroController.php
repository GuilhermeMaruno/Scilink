<?php 
require_once '../Lib/Controller.php';

class CadastroController extends Controller{

    public function index() {
        $this->model('Cadastro');
    }

    public function __construct(){
        $this->index();
    }

}

$Con = new CadastroController();
?>