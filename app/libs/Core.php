<?php

class Core
{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];
    // constructor
    public function __construct () {
        $url = $this->getUrl();
        $controllerName = ucwords($url[0]);
        $controllerFile = '../app/controllers/'.$controllerName.'.php';
        if(file_exists($controllerFile)) {
            $this->currentController = $controllerName;
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->currentController.'.php';
        $this->currentController = new $this->currentController;

        if(method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array(array($this->currentController, $this->currentMethod), $this->params);

        // logging
        // print_r($this->params);
    }
    // get url data
    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url  = explode('/', $url );
            return $url;
        }
    }
}