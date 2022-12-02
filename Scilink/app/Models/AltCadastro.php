<?php
error_reporting(E_ERROR | E_PARSE);
    require_once 'ModCadastro.php';
    require_once 'Dados/CientistaDAO.php';
    require_once 'Dados/TelefoneDAO.php';
    require_once 'Dados/FormacaoDAO.php';
    require_once 'Dados/Redes_SociaisDAO.php';
     
    class AltCadastro{
        function __construct($nome,$emailAlt,$ddd,$phone,$lattes,$titulacao,$dtiF,$dtfF,
        $facebook,$instagram,$youtube,$tiktok){
            $id = $_SESSION['user'];
            $formacao = new FormacaoDAO;
            $redes = new RedeDAO;

            

            if($nome != null){
                $this->Alterar($nome,"nom_cientista","cientista",$id);
                $_SESSION['nome'] = $nome;
            }

            if($emailAlt != null)
            $this->Alterar($emailAlt,"email_alternativo_cientista","cientista",$id);

            if($ddd != null)
            $this->Alterar($ddd,"ddd_telefone","telefone",$id);

            if($phone != null)
            $this->Alterar($phone,"num_telefone","telefone",$id);

            if($lattes != null)
            $this->Alterar($lattes,"lattes_cientista","cientista",$id);

            if($titulacao != null && $dtiF != null && $dtiF < $dtfF)
            $formacao->insert($id,$titulacao,$dtiF,$dtfF);

            if($facebook != null)
            $redes->insert($id,$facebook,"f");

            if($instagram != null)
            $redes->insert($id,$instagram,"i");

            if($youtube != null)
            $redes->insert($id,$youtube,"y");
            
            if($tiktok != null)
            $redes->insert($id,$tiktok,"t");

            $this->Redirect();

        }


        function Alterar($info,$area,$tabela,$id){
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                $sql = "UPDATE `$tabela` SET `$area` = '$info' WHERE `cientista`.`id_cientista` = $id";

                $conn->exec($sql);
                
            }
            catch(PDOException $e) {
                return false;
            }
            
            $conn = null;
            return $info;
        }

        
 
        function Redirect(){
            echo '<html>
                <head>
                <meta http-equiv="refresh" content="0; ..\Views\telaPrincipal.php" />
                </head>
                <body>
                <h3>Redirecionando...</h3>
                </body>
            </html>';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST['nome'];
        $emailAlt = $_POST['emailAlt'];
        $ddd = $_POST['ddd'];
        $phone = $_POST['phone'];
        $lattes = $_POST['lattes'];
        $titulacao = $_POST['titulacao'];
        $dtiF = $_POST['dtiF'];
        $dtfF = $_POST['dtfF'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];
        $tiktok = $_POST['tiktok'];

        $Alt = new AltCadastro($nome,$emailAlt,$ddd,$phone,$lattes,$titulacao,$dtiF,$dtfF,
        $facebook,$instagram,$youtube,$tiktok);
    }   
    
?>