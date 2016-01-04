<?php

class PostController extends Controller {

    public function indexAction() {

        $postModel = $this->model('PostModel');
        $categoryModel = $this->model('CategoryModel');
        $data['posts'] = $postModel->getPosts();
        $data['categories'] = $categoryModel->getCategories();
        
        $this->viev('admin/postform', $data);
    }

}
