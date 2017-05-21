/**
 * Created by miguel on 8/05/17.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {
    // Make quick references to our fields
    var nom = document.getElementById('nom');
    var telefon = document.getElementById('telefon');
    var email = document.getElementById('email');
    var poblacio = document.getElementById('poblacio');

    var validation = true;

    if(document.getElementById('file')){
        var fichero = document.getElementById('file');
        if (!isFile(fichero)) {
            validation = false;
        }
    }

    if (!isAlphabet(poblacio)) {
        validation = false;
    }
    if (!emailValidator(email)) {
        validation = false;
    }
    if (!isNumeric(telefon)) {
        validation = false;
    }
    if (!isAlphabet(nom)) {
        validation = false;
    }
    return validation;
}

function isFile(elem){
    var resultat=validatorIsFile(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsFile(str){
    if(!str.length==0){
            return true;
        }else{
            return false;
        }
}

function isAlphabet(elem){
    var resultat=validatorIsAlphabet(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsAlphabet(str) {
    var alphaExp = /^[a-zA-Z]+$/;
    return str.match(alphaExp);
}

function isNumeric(elem){
    var resultat=validatorIsNumeric(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsNumeric(str) {
    // var numericExpression = /^[0-9]+$/;
    var numericExpression = /^[0-9]{9}$/;
    return str.match(numericExpression);
}

function emailValidator(elem){
    var resultat=validatorEmailValidator(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorEmailValidator(str) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    return str.match(emailExp);
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