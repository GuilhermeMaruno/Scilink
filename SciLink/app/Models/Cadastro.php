<?php
    require_once 'Banco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      session_start();
      unset($_SESSION['Test']);

      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if(isset($_SESSION['Test'])){
        if($_SESSION['Test']->get_cpf_cientista() == $cpf || $_SESSION['Test']->get_email_cientista() == $email){
        echo "FAIL";
        }
      }else{
        $Cadastro = new Cientista(4,$nome,$cpf,null,$email,null,null,null,$senha);
        $_SESSION['Test'] = $Cadastro;
        echo '<html>
                            <head>
                                <meta http-equiv="refresh" content="0; ..\Views\login.php" />
                            </head>
                            <body>
                                <h3>Redirecting in 1 seconds...</h3>
                            </body>
                        </html>';
      }
    }
    
?>