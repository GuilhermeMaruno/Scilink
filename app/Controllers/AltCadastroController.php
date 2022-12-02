<?php 
require_once '../Lib/Controller.php';

class AltCadastroController extends Controller{

    public function index() {
        $this->model('AltCadastro');
    }

    public function __construct(){
        $this->index();
    }

} 

$Con = new AltCadastroController();
?>