<?php

namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
  
    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=islamNiger;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    /**
     * Fonction Query
     * @param string $statement la requete à executer
     * @param string $class_name le nom de la classe qui est optionnelle
     * @param boolean $one true/false pour la selection d'un ou plusieur
     * @return void le resultat de la requete
     */
    public function query($statement, $class_name = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        )
        {
            return $req;
        }
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $datas = $req->fetch();
        }
        else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }
    /**
     * Fonction Préparée
     * @param string $statement la requete
     * @param string $attributes les valeurs 
     * @param string $class_name le nom de la classe à charge
     * @return void le resultat de cette requete
     */
    public function prepare($statement, $attributes, $class_name = null, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        )
        {
            return $res;
        }
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $datas = $req->fetch();
        }
        else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }
    /**
     * LastInsertId function
     * @return int l'id du dernier insertion
     */
    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }
}