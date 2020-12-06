<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params){
        //$data['page_tag'] = "Pagina principal";
        $this->View->getView($this, "home");
    }

}
