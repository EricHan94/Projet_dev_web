<?php

namespace App;

use App\controller\ConnectionController;
use App\controller\UserController;
use App\controller\FilmController;

class Router
{
    public function run()
    {
        $route = $_GET['controller'] ?? null;
        $action = $_GET['action'] ?? null;

        if (isset($_GET['controller'])) {
            if ('user' === $route && $action) {
                $user = new UserController();
                if ('lister' === $action) {
                    return $user->lister();
                } 
            }else if('Connection' === $route && $action){
                $connection = new ConnectionController();
                if('Connecter' === $action){
                    return $connection->connecter();
                }elseif('Inscrire' === $action){
                    return $connection->inscrire();
                }
            }else if('AjoutFilm' === $route && $action){
                $ajoutFilm = new FilmController();
                if('AjouterFilm' === $action){
                    return $ajoutFilm->ajouter();
                }
            }
        } else {
            require_once 'index.php';
        }
    }
}
?>