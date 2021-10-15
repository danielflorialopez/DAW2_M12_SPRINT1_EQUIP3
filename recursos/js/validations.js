/*function showmsg(text, element){ crear hide */

    /*amagar botó:       document.getElementById("sent").disabled= true;     */
    function thumnaild(file) {
        console.log(file);
        document.getElementById('img').src = window.URL.createObjectURL(file);
    }
    function on() {
        document.getElementById("overlay").style.display = "block";
        setTimeout(
            function () {
                this.off();
            }, 4000
        );
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }

function showmsg(text, element){

    document.getElementById(text).innerText="La longitud del nom es incorrecta";
    document.getElementById(element).classList.add("invalid");
 

}

function hidemsg(text, element){

    document.getElementById(text).innerText=" ";
    document.getElementById(element).classList.remove("invalid");


}

function categoriamsg(text, element){

    document.getElementById(text).innerText="La longitud de la categoria es incorrecta";
    document.getElementById(element).classList.add("invalid");
}

function localitzaciomsg(text, element){

    document.getElementById(text).innerText="La longitud de la localització es incorrecta";
    document.getElementById(element).classList.add("invalid");
}

function descripciomsg(text, element){

    document.getElementById(text).innerText="La longitud de la descripció es incorrecta";
    document.getElementById(element).classList.add("invalid");
}

function datemsg(date, element){
    document.getElementById(date).innerText="Data incorrecta"; 
    document.getElementById(element).classList.add("invalid");
//    moment(document.getElementById(date).value).isValid().innerText = "paco";
}

function tornahome() {
    window.location.href = '/home/axel/M06_practiques/proves/HTML/index.html';
}

//indow.location.href = /home/axel/M06_practiques/proves/HTML
//window.go(-1)
/*
var c = 1;
console.log("HOLA"+c);
console.log(`${c} test`);
*/

const MIN_LENGTH = 3;
const MAX_LENGTH = 9;
const MAX_DESC = 120;
var date_regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[1-9]|2[1-9])$/;
var testDate = "03/17/21";

/* condicions
|| una de les dos
&& s'han de complir les dos
*/
function isEmpty(){
    //moment().format("YYYY-MM-DD");
    let date = document.getElementById("date").value;
    let name = document.getElementById("name").value;
    let categoria = document.getElementById("categoria").value;
    let localitzacio = document.getElementById("localitzacio").value;
    let descripcio = document.getElementById("descripcio").value;
  
    /*Longituds incorrectes*/
    if (name.length < MIN_LENGTH || name.length > MAX_LENGTH){
        showmsg("error", "name");
    } else {
        hidemsg("error", "name");
    }

    if (categoria.length < MIN_LENGTH || categoria.length > MAX_LENGTH){
        categoriamsg("errorcategoria", "categoria");
        
    } else {
        hidemsg("errorcategoria", "categoria");
    }

    if (localitzacio.length < MIN_LENGTH || localitzacio.length > MAX_LENGTH){
        localitzaciomsg("errorlocalitzacio", "localitzacio");
    } else {
        hidemsg("errorlocalitzacio", "localitzacio");
    }

    if (descripcio.length < MIN_LENGTH || descripcio.length > MAX_LENGTH){
        descripciomsg("errordescripcio", "descripcio");
    } else {
        hidemsg("errordescripcio", "descripcio");
    }

    if (date == false){
        datemsg("errordate", "date");
    } else {
        hidemsg("errordate", "date");
    }


    
}
