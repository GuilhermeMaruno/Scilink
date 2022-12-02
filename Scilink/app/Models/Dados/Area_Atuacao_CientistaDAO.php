<?php
    require_once 'conecta.php';

    class AreaAtCientistaDAO {
        public function insert($idCie,$idArea) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                
                $sql = "INSERT INTO `area_atuacao_cientista` (`id_cientista`, `id_area_atuacao`) VALUES ('$idCie', '$idArea')";

                $conn->exec($sql);

            }
            catch(PDOException $e) {
                echo $sql . "<br> No <br>" . $e->getMessage();
            }
            
            $conn = null;
            
        }

        public function getCientistas($area) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if($area == -1){
                    $sql = "SELECT id_cientista FROM area_atuacao_cientista";
                }else{
                    $sql = "SELECT id_cientista FROM area_atuacao_cientista WHERE id_area_atuacao = $area;";
                }

                $info = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                
            }
            catch(PDOException $e) {
                echo $sql . "<br> No <br>" . $e->getMessage();
            }
            
            $conn = null;
            return $info;
        }

        public function getArea($id) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT id_area_atuacao FROM area_atuacao_cientista WHERE id_cientista = $id LIMIT 1";
                

                $info = $conn->query($sql)->fetch();
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $info[0];
        }

        public function getAreas($id) {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
                $sql = "SELECT id_area_atuacao FROM area_atuacao_cientista WHERE id_cientista = $id";
                

                $info = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $info;
        }

        

    }

?>