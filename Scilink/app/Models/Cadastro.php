<?php
error_reporting(E_ERROR | E_PARSE);
  require_once 'Dados/Cientista.php';
  require_once 'Dados/CientistaDAO.php';
  require_once 'ValidarCPF.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_SESSION)) {
      session_start();
    }
    unset($_SESSION['Cientista']);

    $nome = $_POST['nome'];
    $nome = ucwords($nome);
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn = new CientistaDAO;
    $existe = $conn->verificar($cpf);

    $val = new ValCpf;

    if($val->validaCPF($cpf) == false){
      echo '<html>
              <head>
                <meta http-equiv="refresh" content="0; ../../public/index.php" />
              </head>
              <body>
                <h3>Redirecionando...</h3>
              </body>
            </html>';
      echo "<script type='text/javascript'>alert('CPF invalido');</script>";
    }
    
    if(!$existe && $val->validaCPF($cpf)==true){      
      $Cadastro = new Cientista($nome,$cpf,null,$email,null,null,$senha);
      $_SESSION['Cientista'] = $Cadastro;
      $_SESSION['cpf']= $cpf;
      $_SESSION['email']=$email;
      $_SESSION['senha']=$senha;
      $_SESSION['nome'] = $nome;
      echo '<html>
              <head>
                <meta http-equiv="refresh" content="0; ..\Views\telaCompCadastro.php" />
              </head>
              <body>
                <h3>Redirecionando...</h3>
              </body>
            </html>';
    }else {
      if($val->validaCPF($cpf)==true){

        echo '<html>
                <head>
                  <meta http-equiv="refresh" content="0; ../../public/index.php" />
                </head>
                <body>
                  <h3>Redirecionando...</h3>
                </body>
              </html>';
        echo "<script type='text/javascript'>alert('CPF ja cadastrado');</script>";
      }
    }
  }
    
?>