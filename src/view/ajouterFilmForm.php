<!DOCTYPE html>

<html>
<head>
<title>Ajouter un nouveua film</title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="#">
	
</script>
<body>
    
        <h1>Ajouter Nouveau Film</h1>
        <form action = "../../index.php?controller=AjoutFilm&action=AjouterFilm" method="post" >

        <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="varchar" name="titre" class="form-control" id="titre">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Alias</label>
                <input type="varchar" name="alias" class="form-control" id="alias">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">En Affiche</label>
                <input type="tinyint" name="enAffiche" class="form-control" id="enAffiche">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titre Original</label>
                <input type="varchar" name="titreOriginal" class="form-control" id="titreOriginal">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Réalisateur</label>
                <input type="varchar" name="realisateur" class="form-control" id="realisateur">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Acteurs</label>
                <input type="text" name="acteurs" class="form-control" id="acteurs">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Synopsis</label>
                <input type="text" name="synopsis" class="form-control" id="synopsis">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">En VO</label>
                <input type="tinyint" name="enVO" class="form-control" id="enVO">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Durée en minutes</label>
                <input type="int" name="dureeMinutes" class="form-control" id="dureeMinutes">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">ID genres</label>
                <input type="int" name="genres_id" class="form-control" id="genres_id">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Age minimum</label>
                <input type="int" name="ageMiniPublic" class="form-control" id="ageMiniPublic">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Date de sortie</label>
                <input type="date" name="dateSortie" class="form-control" id="dateSortie">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Affiche</label>
                <input type="varchar" name="affiche" class="form-control" id="affiche">
            </div>
        
        <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
        </div>   
        </form>
        
    </div>
</body>
</head>
</html>
