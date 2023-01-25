function readInput(){
    return document.getElementById(`inputTemp`).value;
}

function clearInput(){
    return document.getElementById(`inputTemp`).value = ``;
}

function writeAlert(text){
    alert(`Temperature in Fahrenheit: ${text}`);
}

function convert(){
    const tempCel = parseFloat(readInput())
    clearInput()
    return writeAlert(((9 / 5) *  tempCel + 32).toPrecision(3))
}