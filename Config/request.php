<?php namespace Config;

class Request
{
    private $controller;
    private $method;
    private $argument;

    # Constructor
    public function __construct(){
        // if exists
        if(isset($_GET["url"])){
            $route = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $route = explode("/", $route); // separator, array => get string for separator
            $route = array_filter($route);

            // Route for index
            if($route[0] == "index.php"){
                $this->controller = "estudiantes";
            }
            else{
                $this->controller = strtolower(array_shift($route));
            }

            $this->method = strtolower(array_shift($route));

            if(!$this->method){
                $this->method = "index";
            }
            $this->argument = $route;
        }
        else{
            $this->controller = "estudiantes";
            $this->method = "index";
        }
    }

    // Setters and Getters
    public function getControlador(){
        return $this->controller;
    }
    
    public function getMetodo(){
        return $this->method;
    }

    public function getArgumento(){
        return $this->argument;
    }

}



?>