<!DOCTYPE html>
<html>
    <head>
        <title>PIZZANANAS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css">
        <script language="javascript" type="text/javascript" src="validemail.js"></script>
    </head>
    <body>
        <header >
            <h1>Pizzananas Ciné</h1>
        </header>

        <nav>
            <ul> 
                <li><a href="index.php">Accueil</a></li>
                <li class="deroulant">Catégorie de film
                    <ul class="sous">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Comédie</a></li>
                        <li><a href="#">Thriler</a></li>
                    </ul>
                </li>
                <li><a href="src/view/inscrire.php">Inscription</a></li>
                <li><a href="src/view/seconnecter.php">Se connecter</a></li>
            </ul>
        </nav>
        <br><br>
        <main>
            <p>
                PizzananasCiné, le site de référence du cinéma et des séries tv ! Découvrez notre recherche de films, 
                le programme tv de vos séries préférées, l'actualité ciné et séries, les émissions AccroCiné, les dernières bandes-annonces, 
                et plus encore. Laissez vous émerveiller et allez à la rencontre de nouveaux films.
                </p>
        </main>
        <ul>
            <button> <a href="src/view/ajouterFilmForm.php" class="csw-btn-button"> un nouveau film </a></button>
        </ul>
        <?php
 
        use App\Router;

        require 'vendor/autoload.php';

        $routeur = new Router();
        $routeur->run();
        ?>
        <div class="d1"></div>
        <div class="conteneur">
            <div class="d2"></div>
        </div>
    </body>
</html>
        
 