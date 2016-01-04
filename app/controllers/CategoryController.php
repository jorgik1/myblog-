<?php

class CategoryController extends Controller {

    public function indexAction() {

        $model = $this->model('CategoryModel');
        $data['categories'] = $model->getCategories();
        
        $this->viev('admin/categoryform', $data);
    }

}
