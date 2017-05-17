/**
 * Created by miguel on 15/05/17.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {
    // Make quick references to our fields
    var validation = true;
    if(document.getElementById('nuevo_Trabajador')) {
        var trabajador = document.getElementById('nuevo_Trabajador');
        if (!isAlphabet(trabajador)) {
            validation = false;
        }
    }
    if(document.getElementById('pass')) {
        var pass = document.getElementById('pass');
        if (!lengthRestriction(pass, 4, 15)) {
            validation = false;
        }
    }
    if(document.getElementById('pass2')) {
        var pass2 = document.getElementById('pass2');
        if (!passwordIsTheSame(pass, pass2)) {
            validation = false;
        }
    }

    if(document.getElementById('nombre')){
        var nombre = document.getElementById('nombre');
        if (!isAlphabetUser(nombre)) {
            validation = false;
        }
    }
    if(document.getElementById('apellidos')){
        var apellidos = document.getElementById('apellidos');
        if (!isAlphabetUser(apellidos)) {
            validation = false;
        }
    }
    if(document.getElementById('email')){
        var email = document.getElementById('email');
        if (!emailValidator(email)) {
            validation = false;
        }
    }
    if(document.getElementById('telf')){
        var telefono = document.getElementById('telf');
        if (!isNumeric(telefono)) {
            validation = false;
        }
    }
    if(document.getElementById('fechaNacimiento')){
        var fechaNacimiento = document.getElementById('fechaNacimiento');
        if(!isDate(fechaNacimiento)){
            validation = false;
        }
    }

    // var validation = true;



    return validation;
}

function isDate(elem){
    var resultat=validatorIsDate(elem.value);
    marcaError(elem, resultat);
    return resultat;
}

function validatorIsDate(str){
    var alphaExp = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
    return alphaExp.test(str);
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

function isAlphabetUser(elem){
    var resultat=validatorIsAlphabetUser(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsAlphabetUser(str) {
    //var alphaExp = /^[a-zA-Z0-9]+$/;
    var alphaExp = /^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/;
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
}

function isAlphabet(elem){
    var resultat=validatorIsAlphabet(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsAlphabet(str) {
    var alphaExp = /^[a-zA-Z0-9]+$/;
    //var alphaExp = /^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/;
    return alphaExp.test(str);
}

function lengthRestriction(elem, min, max){
    var resultat=validatorLengthRestriction(elem.value, min, max);
    marcaError(elem, resultat);
    return resultat;
}
function validatorLengthRestriction(str, min, max) {
    return (str.length >= min && str.length <= max);
}

function passwordIsTheSame(pass, pass2){
    var resultat= validatorPassword(pass.value, pass2.value);
    marcaError(pass2, resultat);
    return resultat;
}
function validatorPassword(str, str2){
    if(str==str2){
        return true;
    }else {
        return false;
    }
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