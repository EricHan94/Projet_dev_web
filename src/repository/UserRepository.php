<?php
namespace  App\repository;

use App\Database;
use App\model\UserModel;

class UserRepository extends Database{
    public function getId(){
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM user');
    }

    public function buildObject(array $row): UserModel 
    {
        $user = new UserModel;
        $user->setNom($row['nom']);
        $user->setPrenom($row['prenom']);
        $user->setPassword($row['password']);
        return $user;
    }

    public function connecter(array $data = []){
        var_dump("hello");
    }
}
?>