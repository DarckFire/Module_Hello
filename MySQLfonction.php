<?php

/**
 * class crud
 */
class crud{

    /**
    * getDatadaseConnexion
    *
    * 
    */
    private function getDatadaseConnexion (){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=modulehello',
            $user, $pass);
            $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e){
            echo "Erreur !:" . $e->getMessage() ."<br/>";
            die();
        }
    }

    /**
    * getNewUser
    *
    * 
    */
    public function getNewUser() {
        $user['id'] = "";
        $user['nom'] = "";
        $user['traduction'] = "";
    }


    /**
    * getAllUser
    *
    * @return $rows
    */
    public function getAllUser (){
        $con = $this->getDatadaseConnexion();
        $requete = 'SELECT * FROM langue';
        $rows = $con->query($requete);
        return $rows;
        
    }


    /**
    * createUser
    *
    * @param  string $nom
    * @param  string $traduction
    * 
    */
    public function createUser ($nom, $traduction,){
        try{
            $con = $this->getDatadaseConnexion();
            $sql = 'INSERT INTO langue (nom, traduction)';
            $sql.= ' VALUES ( "'.$nom.'", "'.$traduction.'")';
            $con->exec($sql);
            
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

}

/**
 * test
 */
class test{

    
    /**
    * getDatadaseConnexion
    *
    * @return $pdo
    */
    private function getDatadaseConnexion (){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=modulehello',
            $user, $pass);
            $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 
        catch (PDOException $e) {
            echo "Erreur !:" . $e->getMessage() ."<br/>";
            die();
        }
    }

    /**
    * readUser
    *
    * @param  int $id
    * @return $row
    */
    public function readUser ($id){
        
        $con = $this->getDatadaseConnexion();
        $requete = "SELECT * FROM langue where id =".$id;
        $stmt = $con->query($requete);
        $rows = $stmt->fetchAll();
        if (!empty($rows))
        return $rows[0];

     
    }



}

/**
 * update
 */
class update{


    /**
    * getDatadaseConnexion
    *
    * 
    */
    private function getDatadaseConnexion (){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=modulehello',
            $user, $pass);
            $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 
        catch (PDOException $e) {
            echo "Erreur !:" . $e->getMessage() ."<br/>";
            die();
        }
    }

    
    /**
     * updateUser
    *
    * @param  int $id
    * @param  string $nom
    * @param  string $traduction
    */
    public function updateUser ($id, $nom, $traduction){
        try {
            $con = $this->getDatadaseConnexion();
            $requete = "UPDATE langue SET
            `nom` ='$nom',
            `traduction` ='$traduction'
            WHERE `id` =".$id;
            $stmt = $con->exec($requete);
            } 
        catch(PDOException $e) {
            echo $requete . "<br>" . $e->getMessage();
        }
    }

}

/**
 * delete
 */
class delete{


    /**
    * getDatadaseConnexion
    *
    * 
    */
    private function getDatadaseConnexion (){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=modulehello',
            $user, $pass);
            $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 
        catch (PDOException $e) {
            echo "Erreur !:" . $e->getMessage() ."<br/>";
            die();
        }
    }


    /**
    * deleteUser
    *
    * @param int $id
    * 
    */
    public function deleteUser ($id){
        try {
            $con = $this->getDatadaseConnexion();
            $requete ="DELETE FROM langue WHERE id ='$id' ";
            $stmt = $con->query($requete);
        } 
        catch (PDOException $e) {
            echo $requete . "<br>" . $e->getMessage();
         }
    
    }

    
}

?>