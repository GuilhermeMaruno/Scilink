<?php
    require_once 'conecta.php';

    class RedeDAO {
        public function insert($id,$end,$tip) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $test = new RedeDAO;

                if($test->getEndereco($id,$tip)==null){
                    $sql = "INSERT INTO `redes_sociais` (`end_rede_social`, `tip_rede_social`, `id_cientista`) VALUES ('$end', '$tip', '$id')";

                    $conn->exec($sql); 

                    $sql = "SELECT id_rede_social FROM redes_sociais WHERE id_cientista = $id;";

                    $lista = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                }else $lista = $test->altRed($id,$end,$tip);
                
            }
            catch(PDOException $e) {
                return false;
            }
             
            $conn = null;
            return $lista;
        }

        public function getEndereco($id,$tipo) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT end_rede_social FROM redes_sociais WHERE id_cientista = $id AND tip_rede_social = '$tipo' LIMIT 1;";
                

                $end = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            if($end == null)    
            return null;
            return $end[0];
        }

        public function altRed($id,$end,$tip) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "UPDATE `redes_sociais` SET `end_rede_social` = '$end' WHERE `redes_sociais`.`id_cientista` = $id AND `tip_rede_social` ='$tip'";
                
                $conn->exec($sql);

                $sql = "SELECT id_rede_social FROM redes_sociais WHERE id_cientista = $id;";

                $lista = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $lista;
        }

        

    }

?>