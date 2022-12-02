<?php
error_reporting(E_ERROR | E_PARSE);
    require_once "Dados/ProjetoDAO.php";

    $proj = new ProjetoDAO;
    $id = $_SESSION['projeto'];
    $projetos = $proj->getProjetos($id);
        
    if($projetos==null){
        $qtdProj = 0;
    }else
        $qtdProj = count($projetos);

    $i=0;

    while($i<$qtdProj){
      if($proj->getInfoByProjeto($projetos[$i],'pub')==1){
        echo 
        '<div class="bicicletas container2">
            <div class="bicicletas-imagem">
              <img src="../../public/img/desafio/projeto1.jpg" alt="Bicicleta preta">
              <span class="font-2-m cor-0">'.$proj->getInfoByProjeto($projetos[$i],'dti').'</span>
            </div>
            <div class="bicicletas-conteudo">
              <h3 class="font-1-xl">'.$proj->getInfoByProjeto($projetos[$i],'tit').'</h3>
              <p class="font-2-s cor-8">'.$proj->getInfoByProjeto($projetos[$i],'res').'</p>
              
            </div>
          </div>';
      }
          $i++;
    }
    
?>
