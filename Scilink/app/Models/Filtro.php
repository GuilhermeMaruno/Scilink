<?php
    
    error_reporting(E_ERROR | E_PARSE);
    require_once 'Dados/Area_Atuacao.php';
    require_once 'Dados/Area_Atuacao_Cientista.php';
    require_once 'Dados/Cientista.php';
    if(!isset($_SESSION)) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $busca = $_POST['busca'];
        $nEncontrou = true;
            
        foreach($Areas_Atuacao as $area){
            if($busca==$area->get_nom_area_atuacao()){
                $nEncontrou = false;
                $codArea = $area->get_id_area_atuacao();
            }
        }

        if($nEncontrou){
            echo "<h2>Nenhum resultado<h2>";
        }else {
            $nEncontrou = true;
            echo '<ul class="produtos_lista">';

            foreach($Areas_Atuacao_Cientista as $aac){
                if($codArea == $aac->get_area_atuacao_Area_Atuacao_Cientista()){
                    $nEncontrou = false;

                    foreach($Cientistas as $Cientista){
                        if(isset($Cientista) && $Cientista->get_id_cientista() == $aac->get_cientista_Area_Atuacao_Cientista()){
                            echo '<li class="grid-1-3">
                                <div class="produtos_icone">
                                    <img src="..\..\public\img\desafio\perfil.jpg" alt="Foto"><br>
                                    <label>'. $Cientista->get_nome_cientista() .'</label>
                                </div>
                                <h3>'. $busca .'</h3>
                                <p>Número de Projetos: #</p>
                                <p>Idade: # anos</p>
                                <p>Cadastrado desde: #</p>
                            </li>';
                        }
                    }
                }
            }

            echo '</ul>';
        }
    }

?>