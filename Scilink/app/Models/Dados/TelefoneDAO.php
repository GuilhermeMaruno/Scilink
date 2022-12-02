<?php
    require_once 'conecta.php';

    class TelefoneDAO {
        public function insert($cient,$ddd,$num) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                
                $sql = "INSERT INTO `telefone` (`ddd_telefone`,`id_cientista`, `num_telefone`) VALUES ('$ddd', '$cient','$num')";

                $conn->exec($sql);

            }  
            catch(PDOException $e) {
                echo $sql . "<br> No <br>" . $e->getMessage();
            }
            
            $conn = null;
            
        }

        public function getInfoById($id,$info) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT ".$info."_telefone FROM telefone WHERE id_cientista = $id LIMIT 1;";
                

                $info = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                echo $sql . "<br> No <br>" . $e->getMessage();
            }
            
            $conn = null;
            if($info == null)
            return null;
            return $info[0];
        }


    }

?>