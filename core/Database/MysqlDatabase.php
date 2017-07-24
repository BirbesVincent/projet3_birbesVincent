<?php

namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database {
    private $db_name;
    private $db_user;
    private $db_host;
    private $db_pass;
    private $pdo;

    public function __construct($db_name,$db_host, $db_user,$db_pass)
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    /*
     * Connexion à la bdd
     * return object $pdo
     */
    private function getPDO(){
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=BlogOPC;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("SET NAMES UTF8"); //mysql_set_charset — Définit le jeu de caractères du client MySQL
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    /*
     * @$statement requête SQL
     * @$class nom class à instancier
     */
    public function query($statement, $class = null, $one = false){
        $res = $this->getPDO()->query($statement);
        if ($class === null){
            $res->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $res->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        if($one){
            $datas = $res->fetch();
        } else {
            $datas = $res->fetchAll();
        }
        return $datas;
    }

    /*
     * @statement : requête SQL
     * @values : valeurs envoyées ) la fonction[]
     * @class : nom de la class pour le FETCH_CLASS
     * @$one : variable : permet d'avoir 1/plusieurs résultat(s)
     * return $data : donnée(s) en objet(s)
     */
    public function prepare($statement, $values, $class = null, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($values);
        if ($class === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        if ($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

}