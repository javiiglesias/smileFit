/**
 * Created by miguel on 10/05/17.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {
    // Make quick references to our fields
    // var nom = document.form.name.value;//.getElementById('name');
    // var apellido = document.form.lastname.value;//.getElementById('lastname');
    // var edad = document.form.age.value;//getElementById('age');
    // var email = document.form.email.value;//getElementById('email');
    // var telefono = document.form.telefono.value;//getElementById('telefono');
    var nom = document.getElementById('name');
    var apellido = document.getElementById('lastname');
    var edad = document.getElementById('age');
    var email = document.getElementById('email');
    var telefono = document.getElementById("telefono");

    var validation = true;

    if (!isNumeric(telefono)) {
        validation = false;
    }

    if (!emailValidator(email)) {
        validation = false;
    }

    if (!edadValidator(edad)) {
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

function isNumeric(elem){
    var resultat=validatorIsNumeric(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorIsNumeric(str) {
    // var numericExpression = /^[0-9]+$/;
    var numericExpression = /^[0-9]{9}$/;
    //return str.match(numericExpression);
    return numericExpression.test(str);

}

function edadValidator(elem){
    var resultat=validatorEdadValidator(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorEdadValidator(str) {
    // var numericExpression = /^[0-9]+$/;
    var numericExpression = /^[0-9]{1,2}$/;
    return numericExpression.test(str);
    // return str.match(numericExpression);
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