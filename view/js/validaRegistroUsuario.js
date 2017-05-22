/**
 * Created by miguel on 8/05/17.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {
    // Make quick references to our fields
    var nuevo_usuario = document.getElementById('nuevo_usuario');
    var password = document.getElementById('pass');

    var validation = true;

    if (!lengthRestriction(password, 4, 15)) {
        validation = false;
    }

    if (!isAlphanumeric(nuevo_usuario)) {
        validation = false;
    }
    return validation;
}

function lengthRestriction(elem, min, max){
    var resultat=validatorLengthRestriction(elem.value, min, max);
    marcaError(elem, resultat);
    return resultat;
}
function validatorLengthRestriction(str, min, max) {
    return (str.length >= min && str.length <= max);
}

function isAlphanumeric(elem){
    var resultat=validatorIsAlphaNumeric(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsAlphaNumeric(str) {
    var alphaExp = /^[a-zA-Z0-9]+$/;
    return str.match(alphaExp);
}

function marcaError(elem, result) {
    if (result) {
        document.getElementById(getIdMsg(elem)).style.display = 'none';
    }else{
        document.getElementById(getIdMsg(elem)).style.display = 'inline';
        elem.focus();
    }
}

function getIdMsg(element){
    if(element.id){
        return element.id+"_error";
    }else{
        return element.name+"_error";
    }
}