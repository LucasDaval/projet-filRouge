<?php

namespace src\Controllers;

class ProfilController extends Controller{

    public function getUserInfos(string $email){
        $infosUser = $this->model->getUserInfos("users", $email);
        return $this->renderPage('profil-page', compact("infosUser"));
    }

}


