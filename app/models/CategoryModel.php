<?php

class CategoryModel extends BaseModel {    

    private $connect;

    public function __construct() {

        $this->connect = $this->getDBConnection();
    }
    
    public function getCategories() {
        $connection = $this->getDBConnection();
        $qery = 'SELECT *  FROM category';       
        $getquery = $connection->query($qery, PDO::FETCH_ASSOC);
        return $getquery->fetchAll();
    }   
    
    
    public function addCategory($categoryData) {
        $statement = 'INSERT INTO post (title) VALUES (:title))';       
        $qery = $this->connect->prepare($statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if($categoryData) {
            $qery->execute(array(':title' => $categoryData['title'], ':post_title' => $categoryData['post_title']));
        }
    }

}
