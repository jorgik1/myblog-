<?php

class PostModel extends BaseModel {

    private $connect;

    public function __construct() {

        $this->connect = $this->getDBConnection();
    }
    
    public function getPosts() {
        $qery = 'SELECT *  FROM post';       
        $getquery = $this->connect->query($qery, PDO::FETCH_ASSOC);
        return $getquery->fetchAll();
    }
    
    public function addPost($postData) {
        $statement = 'INSERT INTO post (title, post_text) VALUES (:title, :post_title))';       
        $qery = $this->connect->prepare($statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if($postData) {
            $qery->execute(array(':title' => $postData['title'], ':post_title' => $postData['post_title']));
        }
    }

}
