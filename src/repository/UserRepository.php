<?php
namespace  App\repository;

use App\Database;
use App\model\UserModel;

class UserRepository extends Database{

    private function buildObject(array $row): UserModel 
    {
        $user = new UserModel;
        $user->setNom($row['nom']);
        $user->setPrenom($row['prenom']);
        $user->setPassword($row['password']);
        return $user;
    }

    public function checkUserExists(array $data = []){
            $result = $this->createQuery(
                'SELECT id FROM users WHERE Nom = :postNom and Prenom = :postPrenom and Password = :postPassword',
                [
                    'postNom' => $data['nom'],
                    'postPrenom' => $data['prenom'],
                    'postPassword'=> $data['password'],
                ]
            );
         
            if(empty($result->fetch())){
                return False;
            }else{
                      return TRUE;
                     
           }
            
        
    }

    public function inscrire(array $data = []){
        $this->createQuery(
            'INSERT INTO users (nom, prenom, password) VALUES(:nom, :prenom, :password)',
            [
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'password'=> $data['password'],
            ]
    );
    }
}
?>