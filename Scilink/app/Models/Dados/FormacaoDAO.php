<?php 
if(!isset($_SESSION)) {
    session_start();
}

require_once 'conecta.php';

    class FormacaoDAO {
        public function insert($id,$idTit,$dtI,$dtF) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                if($this->getInfo($id,"id")==null){
                    $sql = "INSERT INTO `formacao` (`id_cientista`, `id_titulacao`, `dti_formacao`, `dtt_formacao`) VALUES ('$id', '$idTit', '$dtI', '$dtF')";
                }else{
                    $sql = "UPDATE `formacao` SET `id_titulacao` = '$idTit', `dti_formacao` = '$dtI', `dtt_formacao` = '$dtF' WHERE `formacao`.`id_cientista` = $id";
                }
                $conn->exec($sql); 

            }
            catch(PDOException $e) {
                return false;
            }
             
            $conn = null;
        }

        public function getInfo($id,$info) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT ".$info."_titulacao FROM formacao WHERE id_cientista = $id LIMIT 1;";
                

                $info = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $info[0];
        }

        

    }
?>