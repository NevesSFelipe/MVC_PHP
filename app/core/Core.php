<?php

class Core {

    private string $controller;
    private string $method;
    private array $parameters = [];

    public function __construct()
    {
        $this->dismount_url();
    }

    public function run(): void
    {
        $name_controller = $this->get_controller();
        $new_controller = new $name_controller;

        call_user_func_array([$new_controller, $this->get_method()], $this->get_parameters());
    }

    private function dismount_url(): void
    {
        $url = explode('index.php', $_SERVER["PHP_SELF"]);
        $url = end($url);

        if(!empty($url)) {
            
            $url = explode('/', $url);
            array_shift($url);

            $this->controller = NAMESPACE_CONTROLLER . ucfirst($url[0]) . "Controller";
            array_shift($url);

            if(isset($url[0])) {
                $this->method = $url[0];
                array_shift($url);
            }

            if(isset($url[0])) {
                $this->parameters = array_filter($url);
            }

        }
        
    }

    public function get_controller(): string
    {
        if(empty($this->controller) || !class_exists($this->controller)) {
            return NAMESPACE_CONTROLLER . ucfirst(CONTROLLER_DEFAULT) . "Controller";
        }
        
        return $this->controller;
    }

    public function get_method(): string
    {
        if(empty($this->method) || !method_exists($this->get_controller(), $this->method)) {
            return METHOD_DEFAULT;
        }

        return $this->method;
    }

    public function get_parameters(): array
    {
        return $this->parameters;
    }
    
}