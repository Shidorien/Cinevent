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

function createThumbnail(sFile, sId) {
    var oReader = new FileReader();
    oReader.addEventListener(
      "load",
      function () {
        var oImgElement = document.createElement("img");
        oImgElement.classList.add("imgPreview");
        oImgElement.src = this.result;
        document.getElementById("preview-" + sId).appendChild(oImgElement);
      },
      false
    );
  
    oReader.readAsDataURL(sFile);
  } //function
  function changeInputFil(oEvent) {
    var oInputFile = oEvent.currentTarget,
      sName = oInputFile.name,
      aFiles = oInputFile.files,
      aAllowedTypes = ["png", "jpg", "jpeg", "gif"],
      imgType;
    document.getElementById("preview-" + sName).innerHTML = "";
    for (var i = 0; i < aFiles.length; i++) {
      imgType = aFiles[i].name.split(".");
      imgType = imgType[imgType.length - 1];
      if (aAllowedTypes.indexOf(imgType) != -1) {
        createThumbnail(aFiles[i], sName);
      } //if
    } //for
  } //function
  
  document.addEventListener("DOMContentLoaded", function () {
    var aFileInput = document.forms["ajout_film"].querySelectorAll("[type=file]");
    for (var k = 0; k < aFileInput.length; k++) {
      aFileInput[k].addEventListener("change", changeInputFil, false);
    } //for
  });

