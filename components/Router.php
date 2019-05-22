<?php
  class Router {
    private $routes; 
    
    public function __construct() {
      include_once('./config/routes.php');
      $this->routes = $s_routes;
    }
    
    public function run() {
      $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
      $uri = ltrim($uri, '/');

      foreach ($this->routes as $route=>$path) {
        $route = RELATIVE_PATH . $route;
        if (preg_match("~^$route$~", $uri)) {
          $uriPattern = preg_replace("~$route~", $path, $uri); 
          $segments = explode('/', $uriPattern);
          $controllerName = array_shift($segments) . 'Controller'; 
          $controllerName = ucfirst($controllerName); 
          $actionName = 'action' . ucfirst(array_shift($segments)); 
          $parameters = $segments; 
          $controller = new $controllerName(); 
          $result = $controller->$actionName($parameters); 
          return true; 
        }
      }
      return true; 
    }
  
  }

?>