<?php

namespace App\controller;

use App\repository\UserRepository;

class ConnectionController{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }


    public function connecter(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->connecter($_POST);
        }
    }
}
?>