<?php

class AdminController extends Controller {

    public function IndexAction() {
        if (!filter_input_array(INPUT_COOKIE)) {
            $this->redirect('login');
        }
        $categoryModel = $this->model('CategoryModel');
        $postModel = $this->model('PostModel');
        $data['categories'] = $categoryModel->getCategories();
        $data['posts'] = $postModel->getPosts();

        $this->viev('admin/index', $data);
    }

}
