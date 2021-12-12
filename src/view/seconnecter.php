<!DOCTYPE html>

<html>
<head>
<title>Connexion</title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="seConnecter.css">
</script>
<body>
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
        <h1>connexion</h1>
        <form action = "../../index.php?controller=Connection&action=Connecter" method="post" >
        
            <div class="mb-3">
                <label for="title" class="form-label">NOM</label>
                <input type="text" name="nom" class="form-control" id="nom">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password">            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Connexion</button>
            </div>
        </form>
        
    </div>
</body>
</head>
</html>
