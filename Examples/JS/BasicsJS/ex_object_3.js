function Sat(name){
    this.name=name;
    this.meow = meow;
}

function meow(){
    alert("Mjau, jag heter "+this.name+".");
}


var Knas = new Sat("Knas");
var Tass = new Sat("Tass");

Knas.meow();
Tass.meow();