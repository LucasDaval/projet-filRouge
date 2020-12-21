var connexionMsg = document.getElementById('connexionMsg');
var btnClose = document.getElementById('btnClose');

var logoPSG = document.getElementById('logo');
var overlay = document.getElementById('overlay');

var btnConnexion = document.getElementById('btnConnexion');
var formConnexion = document.getElementById('formConnexion');
var btnSign = document.getElementById('btnSign');
var formSign = document.getElementById('formSign');



/*----------------------------------- Appel des fonctions ------------------------------------------------ */
if(connexionMsg){
    connexionMsg.addEventListener('click', displayOverlay);
}
btnClose.addEventListener('click', closeOverlay);

btnConnexion.addEventListener('click', displayConnexionForm);
btnSign.addEventListener('click', displaySignForm);



/*----------------------------------- Fonctions au chargement de la page ---------------------------------- */
window.addEventListener("load", function(event) {
    if(connexionMsg){
        connexionMsg.classList.add("neon");
    }
});


/*----------------------------------- Fonctions au clic --------------------------------------------------- */

function displayOverlay(){
    overlay.style.display = "block";
    connexionMsg.style.display = "none";
}

function closeOverlay(){
    overlay.style.display = "none";
    connexionMsg.style.display = "flex";
}

function displayConnexionForm(){
    formSign.style.display = "none";
    formConnexion.style.display = "block";
}

function displaySignForm(){
    formSign.style.display = "block";
    formConnexion.style.display = "none";
}