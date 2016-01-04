<?php

class UserModel extends BaseModel {

    private $connect;

    public function __construct() {

        $this->connect = $this->getDBConnection();
    }

    public function getUserData($logindata) {



        $statement = 'SELECT login, password FROM admin WHERE login = :login AND password= :password';
        $qery = $this->connect->prepare($statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if ($logindata) {
            $qery->execute(array(':login' => $logindata['login'], ':password' => $logindata['password']));
            return $qery->fetchAll(PDO::FETCH_ASSOC) ? TRUE : FALSE;
        } else {
            return FALSE;
        }
    }

    public function createUser($userData) {
        
        $statement = 'INSERT INTO admin (login, password) VALUES (:login, :password)';
        $qery = $this->connect->prepare($statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if($userData) {
            $qery->execute(array(':login' => $userData['login'], ':password' => $userData['password']));
        }
        
    }
}
