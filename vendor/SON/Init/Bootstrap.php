<?php 

namespace SON\Init;

abstract class Bootstrap {

	private $route;
    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function run($url)
    {/*Vai receber a rota, se a url é igual a nossa rota? Declaro o caminho do controller, com caixa alta na primeira letra. Depois do caminho->criar a nova classe->Depois a ação->Executa a ação()*/
        array_walk($this->route,function($route)use($url){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }
    protected function setRoute(array $routes)
    {
        $this->route = $routes;	
    }
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}