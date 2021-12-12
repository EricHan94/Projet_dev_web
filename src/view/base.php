<!DOCTYPE html>
<html>
    <head>
        <title>AccroCine</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="src/view/index.css">
        <script language="javascript" type="text/javascript" src="assets/js/validemail.js"></script>
    </head>
    <body>
        <header >
            <h1>AccroCine</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="deroulant">Catégorie de film
                <ul class="sous">
                    <li><a href="index.php?controller=CategorieFilm&action=1">Comédie</a></li>
                        <li><a href="index.php?controller=CategorieFilm&action=2">Fantastique</a></li>
                        <li><a href="index.php?controller=CategorieFilm&action=3">Thriler</a></li>
                        <li><a href="index.php?controller=CategorieFilm&action=4">Drame</a></li>
                        <li><a href="index.php?controller=CategorieFilm&action=7">Comédie dramatique</a></li>
                    </ul>
                </li>
                <li><a href="src/view/ajouterFilmForm.php">Ajouter Nouveau Film</a></li>
                <!--
                <li><a href="src/view/inscrire.php">Inscription</a></li>
                <li><a href="src/view/seconnecter.php">Se connecter</a></li>
-->
            </ul>
        </nav>

        <br><br>
        <main>
            <p>
                AccroCiné, le site de référence du cinéma et des séries tv ! Découvrez notre recherche de films, 
                le programme tv de vos séries préférées, l'actualité ciné et séries, les émissions AccroCiné, les dernières bandes-annonces, 
                et plus encore. Laissez vous émerveiller et allez à la rencontre de nouveaux films.
                </p>
        </main>

        <div class="container">
            <?=  $content ?>
        </div>

    </body>
</html>
        