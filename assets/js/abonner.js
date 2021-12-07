function vérifier(){

	var name = document.getElementById("Nom").value;
	var mail = document.getElementById("Email").value;
	var motdepasse = document.getElementById("mdp").value;
	var motdepasse2 = document.getElementById("mdp2").value;
	
	
	if (name ==""){
		alert("Veuillez entrer votre username");
		document.getElementById("Nom").focus;
		return false;
	}
	else if (!mail.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)){
				alert("Votre adresse mail n'est pas valide");
				document.getElementById("Email").focus();
				return false;
    }
	else if(!motdepasse.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)){
		alert("Le mot de passe doit contenir au moins 8 caractères dont:un chiffre et une majuscule.");
		document.getElementById("mdp").focus;
		return false;
	}
	else if(motdepasse2==""){
		alert("Veuillez retaper le même mot de passe");
		document.getElementById("mdp2").focus;
		return false;
		
	}
	else if(motdepasse2!=motdepasse){
		alert("Ce nest pas le même mot de passe");
		document.getElementById("mdp2").focus;
		return false;
		
	} else{
		document.location.href="index.html";
		alert("vous aller être rediriger vers la page d'acceuil");
	}
	return true;
	
}











