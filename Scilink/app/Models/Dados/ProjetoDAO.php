<?php

require_once 'conecta.php';

class ProjetoDAO {
    public function insert($id,$tit,$res,$dti,$dtt,$pub) {
        try {
            $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $sql = "INSERT INTO `projeto` (`id_cientista`, `tit_projeto`, `res_projeto`, `dti_projeto`, `dtt_projeto`, `pub_projeto`) VALUES ('$id', '$tit', '$res', '$dti', '$dtt','$pub');";

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
    
            
            $sql = "SELECT ".$info."_projeto FROM projeto WHERE id_cientista = $id LIMIT 1;";
            

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

    public function getProjetos($id) {
        try {
            $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            
            $sql = "SELECT id_projeto FROM projeto WHERE id_cientista = $id;";
            

            $info = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
            
        }
        catch(PDOException $e) {
            return null;
        }
        
        $conn = null;
        if($info == null)
        return null;
        return $info;
    }
    

    public function getInfoByProjeto($id,$info) {
        try {
            $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            
            $sql = "SELECT ".$info."_projeto FROM projeto WHERE id_projeto = $id LIMIT 1;";
            

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

