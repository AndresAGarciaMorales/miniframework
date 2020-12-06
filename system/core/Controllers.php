<?php


class Controllers
{

    public function __construct()
    {
        $this->View = new Views();
        $this->LoadModel();
    }
    public function LoadModel(){

        $model = get_class($this)."Model";
        $routeClass = "app/models/".$model.".php";

        if(file_exists($routeClass)){
            //Aqui se cargan los modelos
            require_once($routeClass);
            $this->model = new $model();

        }
    }
}