<?php

namespace src\Controllers;

use src\Models\Model;
use Core\Tools\Session;

class UsersController extends Controller{

    /**
     * Add user in db
     *
     * @param array $infos
     * @return void
     */
    public function newUser(array $infos){
        $this->model->insert("users", $infos);
        $this->renderPage('home-page');
    }

    /**
     * Verify and connect if user exist
     *
     * @param array $infosLog
     * @return void
     */
    public function logUser(array $infosLog){
        $infos = $this->model->find("users", $infosLog["email"]);
        if($infos){
            if($infos["password"] === $infosLog["password"]){
                Session::set($infos);
                $this->renderPage('profil-page');
            }else{
                echo "Mot de passe incorrect";
            }
        }else{
            echo "Cet email n'existe pas";
        }        
    }

    /**
     * Log out user and destroy session
     *
     * @return void
     */
    public function logOut(){
        if($_SESSION){
            session_destroy();
        }   
        $this->renderPage('home-page');     
    }
}