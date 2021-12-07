<?php
namespace  App\repository;

use App\Database;
use App\model\UserModel;
use App\view\View;

class UserRepository extends Database{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }


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
        var_dump("connecter");
    }

    public function inscrire(array $data = []){
        //var_dump("inscrire");
        $this->createQuery(
            'INSERT INTO users (nom, prenom, password) VALUES(:nom, :prenom, :password)',
            [
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'password'=> $data['password'],
            ]
    );
    //$this->view->render('src.view.ajouterFilmForm', $data);
    //return $this->view->render('src.view.ajouterFilmForm', $data);
    //header('Location: src/view/WelcomePage.php');
    require_once('src/view/WelcomePage.php');
    }
}
?>