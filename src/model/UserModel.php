<?php
namespace App\model;

class UserModel{

    private int $id;
    private String $nom;
    private String $prenom;
    private String $password;

    public function getId(){
            return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
}
?>