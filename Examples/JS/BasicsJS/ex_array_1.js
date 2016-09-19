/*
 * För att vi ska slippa så många alertrutor och ändå hålla oss till korrekt 
 * W3C-standard för DOM och händelsehantering så krävs lite trick
 * som vi ännu inte gått igenom på kursen.
 * Så därför står den för exemplet ntressanta koden i funktionen example()
 * och vi behöver biblioteksfunktionerna newLine och addEvent. 
 * Du hittar biblioteksfunktionerna i filen library_study_material.js
 * om du är intresserad och inte vill vänta.
 */

function example(){
  var myGames = new Array(4); //ny array med 4 element numrerade 0-3
  //elementen har nu inga värden utan vi måste fylla dem med något
  myGames[0] = "Spacehulk";
  myGames[1] = "Red Alert";
  //element 0 och 1 har nu värden medan 2 och 3 inte är definierade
  var arrayLength = myGames.length;
  //variabeln arrayLength har nu värdet 4

  var meddelande = "Arrayen har "+ arrayLength +" element.";
  newLine("mainText", meddelande); //skriv ut texten i variabeln meddelande

  meddelande = "Det första elementet har innehållet: " + myGames[0];
  newLine("mainText", meddelande);

  meddelande = "Det andra elementet har innehållet: " + myGames[1];
  newLine("mainText", meddelande);

  meddelande = "Det tredje elementet har inget innehåll och då blir det så här: " + myGames[2];
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);