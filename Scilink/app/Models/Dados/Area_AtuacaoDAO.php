<?php
    require_once 'conecta.php';

    class AreaAtDAO {
        public function listarNome() {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT nom_area_atuacao FROM area_atuacao;";

                $lista = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
            }
            catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            
            $conn = null;
            return $lista;
        }
  
        public function listarId() {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT id_area_atuacao FROM area_atuacao;";

                $lista = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);

            }
            catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
             
            $conn = null;
            return $lista;
        }

        public function getNome($id) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT nom_area_atuacao FROM area_atuacao WHERE id_area_atuacao = $id LIMIT 1;";
                

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

    }

?>