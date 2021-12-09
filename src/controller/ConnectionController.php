<?php

namespace App\controller;

use App\repository\UserRepository;
use App\view\View;

class ConnectionController{
    private UserRepository $userRepository;
    private View $view;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->view = new View();
    }


    public function connecter(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $check=$this->userRepository->checkUserExists($_POST);
            if($check === FALSE)
            {
                echo "Vous n'avez pas encore de compte.Inscrivez vous d'abord";
                require_once('src/view/home.php');
                
            }else{
                $this->userRepository->connecter($_POST);
                $this->view->render('/WelcomePage', [
                    'texte' => 'Bon retour parmi nous',
                    'nomPer' => $_POST['nom'],
                    'prenomPer' => $_POST['prenom']
                ]);
            }
            
        }
       
    }

    public function inscrire(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $check=$this->userRepository->checkUserExists($_POST);
        }
        if($check === FALSE) {
                $this->userRepository->inscrire($_POST);
                $this->view->render('/WelcomePage', [
                    'texte' => 'Vous êtes bien inscrit',
                    'nomPer' => $_POST['nom'],
                    'prenomPer' => $_POST['prenom']
                ]);
        }else{
                echo "Vous avez déja un compte. Connectez vous";
                require_once('src/view/home.php');
                
        }
            
    }
       
}

?>