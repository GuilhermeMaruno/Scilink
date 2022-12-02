<?php

class Controller {

    public function model($model)
    {
        require_once '../../app/Models/'.$model.'.php';
    }

    public function view($view, $dados=[])
    {   
        $arquivo = ('../../app/Views/'.$view.'.php');
        if (file_exists($arquivo)) {
            require_once $arquivo;
        }
        else {
            require_once "../Controllers/ErrorController.php";
            die();
        }
    }

}

?>