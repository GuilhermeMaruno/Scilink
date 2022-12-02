<?php 
require_once '../Lib/Controller.php';

class LoginController extends Controller{

    public function index() {
        $this->model('Log');
    }

    public function __construct(){
        $this->index();
    }

}

$Con = new LoginController();
?> 