<?php

namespace src\Controllers;

class ProfilController extends Controller{

    /**
     * Get user Infos and display they
     * But compact don't so use $_SESSION on profil-page.php
     *
     * @param string $email
     * @return void
     */
    public function getUserInfos(string $email){
        $infosUser = $this->model->getUserInfos("users", $email);
        return $this->renderPage('profil-page', compact("infosUser"));
    }

}


