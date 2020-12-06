<?php


class Route
{
    /*public $uri;
    public $controller;
    public $method;*/
    public $params;

    public function __construct()
    {
        /*$this->Uri();
        $this->getController();
        $this->getMethod();
        $this->getParams();*/
        $this->Router();
    }
    /*public function Uri()
    {
        // [0] = controller  [1] Method [2] params
        //obtengo la url
        $this->uri = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
        //divido en un array la url
        $this->uri = explode('/',$this->uri);
    }
    public function getController()
    {
        // Controller
        $this->controller = $this->uri[0];
    }
    public function getMethod()
    {
        //method
        $this->method = $this->uri[0];
    }
    public function getParams()
    {
        //params
        $this->params = "";
    }*/
    public function Router(){

        //Condicion para validar el metodo
        if (!empty($this->uri[1])){
            if ($this->uri[1] !=""){
                $this->method = $this->uri[1];
            }
        }
        //Condicion para validar los parametros
        if (!empty($this->uri[2])){
            if ($this->uri[2] !=""){
                for ($i = 2; $i < count($this->uri); $i++){
                    $this->params .= $this->uri[$i].',';
                }
                //quitamos la ultima ','
                $this->params = trim($this->params,',');
            }
        }

        //var_dump($this->controller);
        //print_r( $this->controller. " / ".$this->method." / ".$this->params);
    }



}//END CLASS