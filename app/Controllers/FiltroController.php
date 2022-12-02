<?php 
require_once '../Lib/Controller.php';

class FiltroController extends Controller{

    public function index() {
        $this->model('Filtro');
    }

    public function __construct(){
        $this->index();
    }

}

$Con = new FiltroController();
?>