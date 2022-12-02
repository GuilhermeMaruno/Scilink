<?php
error_reporting(E_ERROR | E_PARSE);
    require_once "Dados/TitulacaoDAO.php";
    require_once "Dados/FormacaoDAO.php";

    if(!isset($_SESSION)) {
        session_start();
	}

    class Lista{
        function __construct(){
            $conn = new TitulacaoDAO;
            $form = new FormacaoDAO();
            $listaN = $conn->listarNome();
            $listaI = $conn->listarId();

            $tam = count($listaI);
            $i = 0;
            $j = 1;

            while($i < $tam){
                if($j == $form->getInfo($_SESSION['user'],"id")){
                    echo 'echo "<option selected="selected" value='.$listaI[$i].'>'.$listaN[$i].'</option>"';
                }else
                    echo 'echo "<option value='.$listaI[$i].'>'.$listaN[$i].'</option>"';
                $i++;
                $j++;
            }
        }
    }

    $lista = new Lista;
?>