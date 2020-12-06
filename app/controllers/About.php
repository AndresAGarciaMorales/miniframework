<?php

class About extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    //methods
    public function about($params){
        //$data['page_tag'] = "Pagina principal";
        $this->View->getView($this, "about");
    }
    //method User
    public function user($params){
        echo $params;
    }

}
