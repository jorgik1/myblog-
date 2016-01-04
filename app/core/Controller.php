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
        
        header("location: {$url}");
    }

}
