
function verifier(){
	var name = document.getElementById("nom").value;
	var surname = document.getElementById("prenom").value;
	var motdepasse = document.getElementById("password").value;
	
	if (name ==""){
		alert("Veuillez entrer votre nom");
		document.getElementById("nom").focus;
		return false;
	}
	else if (surname ==""){
		alert("Veuillez entrer votre prenom");
		document.getElementById("nom").focus;
		return false;
	}
	else if(!motdepasse.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)){
		alert("Le mot de passe doit contenir au moins 8 caractères dont:un chiffre et une majuscule.");
		document.getElementById("password").focus;
		return false;
	}
	alert("vous aller être rediriger vers la page d'acceuil")

		


}




