/*
 * För att vi ska slippa så många alertrutor och ändå hålla oss till korrekt 
 * W3C-standard för DOM och händelsehantering så krävs lite trick
 * som vi ännu inte gått igenom på kursen.
 * Så därför står den för exemplet intressanta koden i funktionen example()
 * och vi behöver biblioteksfunktionerna newLine och addEvent. 
 * Du hittar biblioteksfunktionerna i filen library_study_material.js
 * om du är intresserad och inte vill vänta.
 */

function example(){
  var namn;
  var meddelande;

  namn = prompt("Ange ditt namn", "");
  if(namn=="Orvar"){
    meddelande = "Grattis du har namnsdag idag!";
  }
  else{
    meddelande = "Du har inte namnsdag idag.";
  }
  newLine("mainText", meddelande)
}

addEvent(window, "load", example);