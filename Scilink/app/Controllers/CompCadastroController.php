<?php 
require_once '../Lib/Controller.php';

class CompCadastroController extends Controller{

    public function index() {
        $this->model('CompCadastro');
    }

    public function __construct(){
        $this->index();
    }

}

$Con = new CompCadastroController();
?>