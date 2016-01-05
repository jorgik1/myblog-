<?php

class CategoryController extends Controller {

    public function indexAction() {

        $model = $this->model('CategoryModel');
        $data['categories'] = $model->getCategories();

        $this->viev('admin/categoryform', $data);
    }

    public function saveAction() {
        $model = $this->model('CategoryModel');
        $data['categories'] = $model->getCategories();
        if (isset($_POST['submit'])) {
            $catTitle = $_POST['title'];

            if ($catTitle == '') {
                $error[] = 'Title is required';
            }
            if (!$error) {
                $data = ['title' => $catTitle];
                $model->addCategory($data);
                $this->redirect('home');

            }
        }

    }
}
