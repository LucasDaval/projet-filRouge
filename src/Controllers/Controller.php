<?php

namespace src\Controllers;
use src\Models\Model;

use Core\Controllers\DefaultController;

class Controller extends DefaultController{
    protected $model;

    /**
     * Initialize const to PDO connexion
     */
    public function __construct(){
        $this->model = new Model();
    }

    /**
     * General function to display pages
     *
     * @param string $pageName
     * @return void
     */
    public function renderPage(string $pageName){
        $page = new DefaultController();
        return $page->render($pageName);
    }
}


