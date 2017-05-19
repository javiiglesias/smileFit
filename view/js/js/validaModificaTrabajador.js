/**
 * Created by miguel on 17/05/17.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {

    var nom = document.getElementById('name');
    var apellido = document.getElementById('lastname');
    var fechaNacimiento = document.getElementById('fechaNacimiento');
    var email = document.getElementById('email');
    var telefono = document.getElementById("telefono");

    var validation = true;

    if (!isNumeric(telefono)) {
        validation = false;
    }

    if (!emailValidator(email)) {
        validation = false;
    }

    if (!isDate(fechaNacimiento)) {
        validation = false;
    }

    if (!isAlphabet(apellido)) {
        validation = false;
    }

    if (!isAlphabet(nom)) {
        validation = false;
    }
    return validation;
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

function isAlphabet(elem){
    var resultat=validatorIsAlphabet(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsAlphabet(str) {
    var alphaExp = /^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/;
    return alphaExp.test(str);
    // return str.match(alphaExp);
}

function isDate(elem){
    var resultat=validatorIsDate(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsDate(str){
    var alphaExp = /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
    // var alphaExp = /^\d{4}-\d{2}-\d{2}$/;;
    return alphaExp.test(str);
}

function emailValidator(elem){
    var resultat=validatorEmailValidator(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorEmailValidator(str) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    return emailExp.test(str);
    //return str.match(emailExp);
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