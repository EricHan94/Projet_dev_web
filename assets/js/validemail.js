
function validemail(){
    var text;
    var y=document.getElementById("email").value;
    if (!y.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)){
        alert("l'addresse mail n'est pas bonne");
        return false;
    }
    else{
        alert("l'addresse mail est bonne");
        return false;
    }

    return true;
}


