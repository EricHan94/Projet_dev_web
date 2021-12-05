<?php

namespace App\controller;

use App\repository\FilmRespository;
 
class FilmController{
    private FilmRespository $filmRespository; 

    public function __construct()
    {
        $this->filmRepository = new FilmRespository();
    }

    public function ajouter(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->filmRepository->ajouter($_POST);
        }
    }
}