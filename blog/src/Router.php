<?php


class Router
{
    private $routes = [];
    private $url;

    public function __construct(array $route, $url)
    {
        $this->routes = $route;
        $this->url = $url;
    }
    public function direct()
    {
        if(array_key_exists($this->url, $this->routes)) {
            require $this->routes[$this->url];
        }
    }
}