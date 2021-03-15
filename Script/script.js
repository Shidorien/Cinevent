function verif(inscription1) {
    if (document.getElementById("name").value == "") {
        alert("Tapez un nom valable");
        document.getElementById("name").focus();
        return false;
    }
    if (document.getElementById("dateNais").value == "") {
        alert("indiquez une date de naissance valable");
        document.getElementById("dateNais").focus();
        return false;
    }
    if (document.getElementById("email").value == "") {
        alert("Tapez un email valable");
        document.getElementById("email").focus();
        return false;
    }
    if (document.getElementById("motDePasse").value == "") {
        alert("Tapez un mot de passe valable");
        document.getElementById("motDePasse").focus();
        return false;
    }
    if (document.getElementById("verifMotDePasse").value == "") {
        alert("Veuillez confirmer votre mot de passe");
        document.getElementById("verifMotDePasse").focus();
        return false;
    }
        inscription1.submit();  
}   

