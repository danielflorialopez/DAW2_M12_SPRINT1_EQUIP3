const MIN_LENGTH = 3;
const MAX_LENGTH = 50;
const MIN_LENGTH_FORMULARI = 20;


function isNameEmpty(){
    let name = document.getElementById("nomprojecte").value;
    if (name.length < MIN_LENGTH || name.length > MAX_LENGTH) {
        document.getElementById("errorprojecte").innerText ="Nom del projecte incorrecte. El nom no compleix els requisits de longitud.";
    } else {
        document.getElementById("errorprojecte").innerText ="";
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

function isNameEmpty2(){
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