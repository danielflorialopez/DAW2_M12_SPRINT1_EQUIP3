//1. Declaració de les constants/variables
const MIN_LENGTH = 3;
const MAX_LENGTH = 50;
const MIN_LENGTH_FORMULARI = 20;

//2. Funció que ens serveix per a comprovar que l'usuari ha posat correctament en els camps del formulari
//si la longitud del que ha posat l'usuari compleix amb els requisits establerts i en cas contrari que li 
//mostri mitjançant JavaScript un text informatiu.

function checkProposition(){
    let name = document.getElementById("nomproposta").value;
    if (name.length < MIN_LENGTH || name.length > MAX_LENGTH) {
        document.getElementById("errorproposta").innerText ="Nom de la proposta incorrecte. El nom no compleix els requisits de longitud.";
    } else {
        document.getElementById("errorproposta").innerText ="";
    }
    let localitat = document.getElementById("localitat").value;
    if(localitat.length < MIN_LENGTH || localitat.length > MAX_LENGTH){
        document.getElementById("errorlocalitat").innerText ="Localitat incorrecte. La localitat no compleix els requisits de longitud.";
    }else{
        document.getElementById("errorlocalitat").innerText ="";
    }
    let descripcion = document.getElementById("descripcio").value;
    if(descripcion.length < MIN_LENGTH_FORMULARI){
        document.getElementById("errordescripcio").innerText ="Descripcio incorrecte. La descripcio no compleix els requisits de longitud.";
    }else{
        document.getElementById("errordescripcio").innerText ="";
    }
}

function checkRecurs(){
    let recurs = document.getElementById("nomrecurs").value;
    if (recurs.length < MIN_LENGTH || recurs.length > MAX_LENGTH) {
        document.getElementById("errorrecurs").innerText ="Recurs incorrecte. El recurs no compleix els requisits de longitud.";
    }else{
        document.getElementById("errorrecurs").innerText ="";
    }
    let aportat = document.getElementById("aportatper").value;
    if (aportat.length < MIN_LENGTH || aportat.length > MAX_LENGTH) {
        document.getElementById("erroraportat").innerText ="Aportació incorrecte. El nom de qui a aportat el recurs no compleix els requisits de longitud.";
    }else{
        document.getElementById("erroraportat").innerText ="";
    }
}

function checkUser() {
    let email = document.getElementById("email").value;
    var validEmail = false;
    var validPass = false;

    if (/^[a-zA-Z0-9]+@[a-zA-Z0-9~]+\.[a-zA-Z]{2,4}$/.test(email)) {
        document.getElementById("erroremail").innerText ="";
        validEmail = true;
    }else{
        document.getElementById("erroremail").innerText ="L'email no compleix els requisits vàlids per ser un correu electrònic. Revisa-ho.";
        validEmail = false;
    }
    
    let password = document.getElementById("password").value;

    if (password.length < MIN_LENGTH || password.length > MAX_LENGTH) {
        document.getElementById("errorpassword").innerText ="La contrasenya no compleix els requisits de longitud.";
        validPass = false;
    }else{
        document.getElementById("errorpassword").innerText ="";
        validPass = true;
    }

    if(validEmail && validPass){
        document.forms[0].submit();
    }
}