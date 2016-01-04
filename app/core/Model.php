<?php

abstract class BaseModel {

    const DB_HOST = 'mysql:host=localhost;dbname=blog';
    const DB_USER = 'root';
    const DB_PASSWORD = 'htmlcms';

    protected function getDBConnection() {
        try {
            $connect = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

}
