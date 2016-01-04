<?php

class HomeController extends Controller {

    public function indexAction() {

        $categoryModel = $this->model('CategoryModel');
        $postModel = $this->model('PostModel');
        $data['categories'] = $categoryModel->getCategories();
        $data['post'] = $postModel->getPosts();
        $this->viev('home/index', $data);
    }

}
