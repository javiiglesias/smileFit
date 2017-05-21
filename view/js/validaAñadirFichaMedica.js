/**
 * Created by Miguel on 21/05/2017.
 */
window.onload = function() {
    document.getElementById('form').onsubmit = formValidator;
}

function formValidator() {

    var imc = document.getElementById('IMC');
    var peso = document.getElementById('Peso');
    var altura = document.getElementById('Altura');
    var metabolismo = document.getElementById('Metabolismo');

    var validation = true;

    if (!isAlphabet(Metabolismo)) {
        validation = false;
    }

    if (!isNumeric(Altura)) {
        validation = false;
    }

    if (!pesoValidator(Peso)) {
        validation = false;
    }

    if (!isNumeric(IMC)) {
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
    var numericExpression = /^[0-9]{3}$/;
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

function pesoValidator(elem){
    var resultat=validatorPeso(elem.value);
    marcaError(elem, resultat);
    return resultat;
}
function validatorPeso(str) {
    var numericExpression = /^[0-9]{2,3}$/;
    return numericExpression.test(str);
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