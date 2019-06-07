<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:09
 */

class App extends Base
{
    protected $url;
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $parameters = [];

    /**
     * App constructor.
     */
    public function __construct()
    {
        $this->url = $this->parseUrl();
    }

    public function dispatch(){
        $this->setController();
        $this->setMethod();
        $this->setParameters();

        call_user_func([$this->controller, $this->method], $this->parameters);
    }

    private function parseUrl(){
        if(isset($_GET['url']) && !empty($_GET['url'])){
            return explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
        }
    }

    public function setController(){
        $path = '../App/Controllers/' . $this->url[0] . 'BaseController';
        if(file_exists($path)){
            $this->controller = $this->url[0] . 'BaseController';
            unset($this->url[0]);
        } else if(!file_exists($path) && !empty($this->url[0])){
            $this->respondNotFound();
        }

        require_once '../App/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    }

    public function setMethod(){
        if(isset($this->url[1]) && method_exists($this->controller, $this->url[1])){
            $this->method = $this->url[1];
            unset($this->url[1]);
        }
    }

    public function setParameters(){
        $this->parameters = $this->url ? [array_values($this->url), $_POST] : [$_POST];
    }

}