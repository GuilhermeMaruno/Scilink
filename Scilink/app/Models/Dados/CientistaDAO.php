<?php
    if(!isset($_SESSION)) {
        session_start();
	}

    require_once 'conecta.php';
    require_once 'Cientista.php';

    class CientistaDAO {
        public function insert($cientista) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $nome = $cientista->get_nome_cientista();
                $cpf = $cientista->get_cpf_cientista();
                $dtn = $cientista->get_dtn_cientista();
                $email = $cientista->get_email_cientista();
                $emailAlt = $cientista->get_email_alt_cientista();
                $lattes = $cientista->get_lattes_cientista();
                $snh = $cientista->get_snh_cientista();

                
                $sql = "INSERT INTO `cientista` (`nom_cientista`, `cpf_cientista`, `dtn_cientista`, `email_cientista`, `email_alternativo_cientista`, `lattes_cientista`, `snh_cientista`) VALUES ('$nome', '$cpf', '$dtn', '$email', '$emailAlt', '$lattes', '$snh')";


                $conn->exec($sql); 


                $sql = "SELECT id_cientista FROM cientista WHERE cpf_cientista = $cpf LIMIT 1;";

                $id = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                echo $sql . "<br> No <br>" . $e->getMessage();
            }
            
            $conn = null;
            return $id[0];
        }

        public function getInfo($cpf,$info) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT ".$info."_cientista FROM cientista WHERE cpf_cientista = $cpf LIMIT 1;";
                

                $info = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $info[0];
        }

        public function getId($nome) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT id_cientista FROM cientista WHERE nom_cientista = '$nome' LIMIT 1;";
                

                $info = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $info[0];
        }

        public function getInfoById($id,$info) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT ".$info."_cientista FROM cientista WHERE id_cientista = $id LIMIT 1;";
                

                $info = $conn->query($sql)->fetch(); 
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;

            if($info == null) 
            return null;
            return $info[0];
        }

        public function verificar($cpf) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT id_cientista FROM cientista WHERE cpf_cientista = $cpf;";
                

                $nome = $conn->query($sql)->fetch();
                
                if(isset($nome[0])){
                    $existe = true;
                }else{
                    $existe = false;
                }
                
            }
            catch(PDOException $e) {
                return false;
            }
            
            $conn = null;
            return $existe;
        }

    }

?>