<?php

Class App {

    protected $defaultAction = "indexAction";
    protected $controller = "HomeController";
    protected $error = 'error/index';
    protected $params = array();
    protected $routeMap = array(
        '/'                 => 'home/index',
        '/index.php'        => 'home/index',
        '/login.php'        => 'login/index',
        '/login'            => 'login/index',
        '/admin'            => 'admin/index',
        '/admin.php'        => 'admin/index',
        '/postform'         => 'post/index',
        '/postform.php'     => 'post/index',
        '/categoryform'     => 'category/index',
        '/categoryform.php' => 'category/index',
    );

    public function __construct() {
        $url = $this->getRequestData();
        $controllerPath = __DIR__ . '/../controllers/' . ucfirst($url['controller']) . 'Controller.php';
        if (file_exists($controllerPath)) {
            $this->controller = $url['controller'] . 'Controller';
            unset($url['controller']);
        }
        require_once __DIR__ . '/../controllers/' . ucfirst($this->controller) . '.php';
        $this->controller = new $this->controller;

        if (isset($url['action'])) {
            if (method_exists($this->controller, $url['action'])) {
                $this->defaultAction = $url['action'] . 'Action';
                unset($url['action']);
            }
        }
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->defaultAction], $this->params);
    }

    public function getRequestData() {

        $data = parse_url($_SERVER['REQUEST_URI']);
        if (isset($data['path']) && array_key_exists($data['path'], $this->routeMap)) {
            $route = $this->routeMap[$data['path']];
        } else {
            $route = $this->error;
        }
        $route = explode('/', $route);

        return [
            'controller' => $route[0],
            'action' => $route[1],
            'params' => isset($data['query']) ? $data['query'] : null
        ];
    }

}
