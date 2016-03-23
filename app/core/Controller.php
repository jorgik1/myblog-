<?php

abstract class Controller {

    public function model($model){
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model();
    }
    
    public function viev($view, $data=[]){
        require_once  __DIR__ . '/../views/' . $view  . '.php';
    }
    
    public function redirect($url) {
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
        }else{
            header('Location: ' . $url);
            die();
        }
    }

}
