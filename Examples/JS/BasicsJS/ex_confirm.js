function Greeting(name) {
  alert("Hej, " + name);
}

Greeting("Eudora");
Greeting("Testa");
response = confirm("Vill du h�lsa p� fler?");
if(response){
  Greeting("Eliza");
}
