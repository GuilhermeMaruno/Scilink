<?php
error_reporting(E_ERROR | E_PARSE);
    require_once "Dados/Area_AtuacaoDAO.php";

    $conn = new AreaAtDAO;
    $listaN = $conn->listarNome();
    $listaI = $conn->listarId();

    $tam = count($listaN);
    $i = 0;

    while($i < $tam){
        echo "<option value=".$listaI[$i].">".$listaN[$i]."</option>";
        $i++;
    }
?>