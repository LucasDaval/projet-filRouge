<?php

namespace src\Controllers;
use src\Models\Model;

use Core\Controllers\DefaultController;

class Controller extends DefaultController{
    protected $model;

    public function __construct(){
        $this->model = new Model();
    }
    public function renderPage(string $pageName){
        $page = new DefaultController();
        return $page->render($pageName);
    }
}


