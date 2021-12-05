<!DOCTYPE html>

<html>
<head>
<title>Inscription</title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="seConnecter.css">
	<script  type="text/javascript" src="seConnecter.js" >
</script>
<body>
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
        <h1>Inscription</h1>
        <form action = "../../index.php?controller=Connection&action=Inscrire" method="post" >
        
            <div class="mb-3">
                <label for="title" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="Nom">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Mot de pass</label>
                <input type="password" name="motdepass" class="form-control" id="mdp">            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Inscrire</button>
            </div>
        </form>
        
    </div>
</body>
</head>
</html>
