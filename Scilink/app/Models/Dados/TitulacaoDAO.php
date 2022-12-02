<?php
    require_once 'conecta.php';

    class TitulacaoDAO {
        public function listarNome() {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT nom_titulacao FROM titulacao;";

                $lista = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $lista;
        }

        public function listarId() {
            try {
                $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT id_titulacao FROM titulacao;";

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

                $sql = "SELECT nom_titulacao FROM titulacao WHERE id_titulacao = $id LIMIT 1;";

                $lista = $conn->query($sql)->fetch();
            }
            catch(PDOException $e) {
                return null;
            }
            
            $conn = null;
            return $lista[0];
        }


    }

?>