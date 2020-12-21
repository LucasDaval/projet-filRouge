<?php
session_start();
// session_destroy ();


use src\Controllers\{
    Controller,
    AllSurveysController,
    HomeController,
    RankingController,
    TheSurveyController,
    UsersController,
    ProfilController
};

$controller = new Controller();

if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {

        // Méthode GET => affichage de page
        case 'allsurveys':
            $controller->renderPage('allSurveys-page');
            break;
        case 'home':
            $controller->renderPage('home-page');
            break;
        case 'ranking':
            $controller->renderPage('ranking-page');
            break;
        case 'thesurvey':
            $controller->renderPage('theSurvey-page');
        break;

        case 'profil':
            $profilUser = new ProfilController();
            $profilUser->getUserInfos($_SESSION['email']);
        break;



        case 'signIn':
            $controller = new UsersController();
            $controller->newUser($_POST);
            break;
            
        case 'logIn':
            $controller = new UsersController();
            $controller->logUser($_POST);
            break;
        case 'logOut':
            $controller = new UsersController();
            $controller->logOut();
            break;
            
        default:
            echo "Error 404: vous avez perdu 0.404 de QI";
            break;
    }
} else{
    $controller->renderPage('home-page');
}