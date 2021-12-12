<?php

namespace App\controller;

use App\repository\FilmRespository;
use App\view\View;
 
class FilmController{
    private FilmRespository $filmRepository;
    private View $view; 

    public function __construct()
    {
        $this->filmRepository = new FilmRespository();
        $this->view = new View();
    }

    public function ajouter(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->filmRepository->ajouter($_POST);
            echo "Vous avez ajouté un nouveau film !";
        }
    }

    public function filmsCategorie(int $genre)
    {
        $this->view->render('/genreFilm', [
            'films' => $this->filmRepository->getFilmParGenre($genre),
        ]);
       
    }
}