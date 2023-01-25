function readInput(){
    return document.getElementById(`inputName`).value;
}

function writeConsole(name){
    console.log(`Hello, ${name}!`);
}

function greeting(){
    const name = readInput()
    return writeConsole(name)
}