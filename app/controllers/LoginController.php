<?php

class loginController extends Controller {
    
    public function indexAction() {
        
        $data['validate'] = $this->validateFields();
        if($data['validate']) {
            setcookie('validate', $data['validate']);
            $this->redirect("admin");
        } 
        $this->viev('home/login', $data['validate']);
    }

    public function validateFields() {
        
        $userModel = $this->model('UserModel');        
        return $userModel->getUserData(filter_input_array(INPUT_POST));                   
        
    }
        
}
