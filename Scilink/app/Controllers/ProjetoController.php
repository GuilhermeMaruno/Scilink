<?php 
require_once '../Lib/Controller.php';

class ProjetosController extends Controller{

    public function index() {
        $this->model('CadProjeto');
    }

    public function __construct(){
        $this->index();
    }

} 

$Con = new ProjetosController();
?>