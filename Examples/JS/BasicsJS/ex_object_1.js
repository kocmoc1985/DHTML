var Cat = new Object(); // Like class declaration
Cat.name; // attribute declaration
Cat.gender; // attribute declaration
Cat.born;
Cat.color;


Cat.meow = function(){
  alert("Mjau, jag heter "+this.name+"." + this.gender );
}

Cat.setName = function(name){
    this.name = name;
}

Cat.setGender = function(gender){
    this.gender = gender;
}


Cat.setGender("Pers");
Cat.setName("Bars");



Cat.meow();



//var Cat = new Object();
//Cat.name = "Knas";
//
//Cat.meow = function(){
//  alert("Mjau");
//}
//
///*
//Cat.meow = function(){
//  alert("Mjau, jag heter "+this.name+".");
//}
//*/
//
//Cat.meow();