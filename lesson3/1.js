const element = document.getElementById(`buttonConvert`);
element.addEventListener(`click`, convert);

function readInput() {
    return document.getElementById(`inputTemp`).value;
};

function clearInput() {
    document.getElementById(`inputTemp`).value = ``;
};

function writeAlert(fahrenheit) {
    alert(`Temperature in Fahrenheit: ${fahrenheit}`);
};

function convert() {
    const tempCel = Number.parseFloat(readInput());
    clearInput();
    return writeAlert(((9 / 5) *  tempCel + 32).toPrecision(3));
};
