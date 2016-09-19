function Greeting(name) {
  alert("Hej, " + name);
}

Greeting("Eudora");
Greeting("Testa");
response = confirm("Vill du hälsa på fler?");
if(response){
  Greeting("Eliza");
}
