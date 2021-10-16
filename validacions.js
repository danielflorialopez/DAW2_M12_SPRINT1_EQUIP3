const MIN_LENGTH = 3;
const MAX_LENGTH = 50;
const MIN_LENGTH_FORMULARI = 20;


function isNameEmpty(){
    let username = document.getElementById("nomprojecte").value;
    if (username.length < MIN_LENGTH || username.length > MAX_LENGTH) {
        document.getElementById("errorprojecte").innerText ="Nom del projecte incorrecte. El nom no compleix els requisits de longitud.";
    } else {
        document.getElementById("errorprojecte").innerText ="";
    }
    let name = document.getElementById("localitat").value;
    if(name.length < MIN_LENGTH || name.length > MAX_LENGTH){
        document.getElementById("errorlocalitat").innerText ="Localitat incorrecte. La localitat no compleix els requisits de longitud.";
    }else{
        document.getElementById("errorlocalitat").innerText ="";
    }
    let surname = document.getElementById("descripcio").value;
    if(surname.length < MIN_LENGTH_FORMULARI){
        document.getElementById("errordescripcio").innerText ="Descripcio incorrecte. La descripcio no compleix els requisits de longitud.";
    }else{
        document.getElementById("errordescripcio").innerText ="";
    }
}