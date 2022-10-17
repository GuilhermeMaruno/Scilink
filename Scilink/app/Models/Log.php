<?php
    error_reporting(E_ERROR | E_PARSE);
    require_once 'Banco.php';
  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $status=true;
        foreach($Cientistas as &$id){
            if(isset($id)){
                if ($_POST['cpf'] == $id->get_cpf_cientista()){
                    if($_POST['senha'] == $id->get_senha_cientista()){
                        $status=false;
                        session_start();
                        $_SESSION['user'] = $id->get_id_cientista();
                        $_SESSION['nome'] = $id->get_nome_cientista();
                        $_SESSION['ativo'] = true;
                        
                        echo '<html>
                                <head>
                                    <meta http-equiv="refresh" content="0;..\Views\telaPrincipal.php" />
                                </head>
                                <body>
                                    <h3>Redirecting in 1 seconds...</h3>
                                </body>
                            </html>';
                    }
                }
            }
            
        }

        if ($status){
            echo '<html>
                            <head>
                                <meta http-equiv="refresh" content="0; ..\Views\telaLogin.php" />
                            </head>
                            <body>
                                <h3>Redirecting in 1 seconds...</h3>
                            </body>
                        </html>';
            
            echo "<script type='text/javascript'>alert('Login invalido');</script>";
        }
        
      }
?>
