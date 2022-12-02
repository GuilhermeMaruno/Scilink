<?php
    error_reporting(E_ERROR | E_PARSE);
    require_once 'Dados/Cientista.php';
    require_once 'Dados/CientistaDAO.php';
  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        $conn = new CientistaDAO;
        $senhaBD = $conn->getInfo($cpf,"snh");
        
        if($senhaBD == false){
            echo '<html>
                                <head>
                                    <meta http-equiv="refresh" content="0; ..\Views\telaLogin.php" />
                                </head>
                                <body>
                                    <h3>Redirecionando...</h3>
                                </body>
                            </html>';

            echo "<script type='text/javascript'>alert('Servidor Indisponível  Tente novamente mais tarde');</script>";
        }else{

            if ($senhaBD == $senha){
                if(!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['user']  = $conn->getInfo($cpf,"id");
                $_SESSION['nome'] = $conn->getInfo($cpf,"nom");
                            
                echo '<html>
                        <head>
                            <meta http-equiv="refresh" content="0; ..\Views\telaPrincipal.php" />
                        </head>
                        <body>
                            <h3>Redirecionando...</h3>
                                </body>
                    </html>';
            }else{
                echo '<html>
                                <head>
                                    <meta http-equiv="refresh" content="0; ..\Views\telaLogin.php" />
                                </head>
                                <body>
                                    <h3>Redirecionando...</h3>
                                </body>
                            </html>';
                
                echo "<script type='text/javascript'>alert('Login invalido');</script>";
            }
        }
    }
?>
