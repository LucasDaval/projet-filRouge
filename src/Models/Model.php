<?php

namespace src\Models;

use EmptyIterator;

class Model{
    protected $pdo;

    /**
     * Initialize db connection 
     * Change 'root' and put your db password
     */
    public function __construct(){
        $this->pdo = new \PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root', 'root');;
    }

    /**
     * General method to insert user in db
     *
     * @param string $table
     * @param array $infos
     * @return void
     */
    public function insert(string $table, array $infos){
        $request = $this->pdo->prepare("INSERT INTO $table (lastname, firstname, email, password, status) VALUES (:lastname, :firstname,:email, :password, :status)");
        $request->bindValue(":lastname", $infos['lastname']);
        $request->bindValue(":firstname", $infos['firstname']);
        $request->bindValue(":email", $infos['email']);
        $request->bindValue(":password", $infos['password']);
        $request->bindValue(":status", 0);
        $request->execute();
    }

    /**
     * General function to find something in db with email
     * And get all informations
     * 
     * @param string $table
     * @param string $email
     * @return void
     */
    public function find(string $table, string $email){
        $request = $this->pdo->query("SELECT * FROM $table WHERE email =" ."'$email'");
        $infos = $request->fetch(\PDO::FETCH_ASSOC);
        return $infos;
    }

    /**
     * Get personal infos for profil user
     *
     * @param string $table
     * @param string $email
     * @return void
     */
    public function getUserInfos(string $table, string $email){
        $request = $this->pdo->query("SELECT lastname, firstname, email FROM $table WHERE email =" ."'$email'");
        $infos = $request->fetch(\PDO::FETCH_ASSOC);
        return $infos;
    }

}