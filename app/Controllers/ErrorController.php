<?php 
require_once '../Lib/Controller.php';

class ErroController extends Controller{

    public function index() {
        $this->view('Cadastro',null);
    }

    public function __construct(){
        $this->index();
    }

}

$Con = new ErroController();
?>