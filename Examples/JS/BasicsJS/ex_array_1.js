/*
 * F�r att vi ska slippa s� m�nga alertrutor och �nd� h�lla oss till korrekt 
 * W3C-standard f�r DOM och h�ndelsehantering s� kr�vs lite trick
 * som vi �nnu inte g�tt igenom p� kursen.
 * S� d�rf�r st�r den f�r exemplet ntressanta koden i funktionen example()
 * och vi beh�ver biblioteksfunktionerna newLine och addEvent. 
 * Du hittar biblioteksfunktionerna i filen library_study_material.js
 * om du �r intresserad och inte vill v�nta.
 */

function example(){
  var myGames = new Array(4); //ny array med 4 element numrerade 0-3
  //elementen har nu inga v�rden utan vi m�ste fylla dem med n�got
  myGames[0] = "Spacehulk";
  myGames[1] = "Red Alert";
  //element 0 och 1 har nu v�rden medan 2 och 3 inte �r definierade
  var arrayLength = myGames.length;
  //variabeln arrayLength har nu v�rdet 4

  var meddelande = "Arrayen har "+ arrayLength +" element.";
  newLine("mainText", meddelande); //skriv ut texten i variabeln meddelande

  meddelande = "Det f�rsta elementet har inneh�llet: " + myGames[0];
  newLine("mainText", meddelande);

  meddelande = "Det andra elementet har inneh�llet: " + myGames[1];
  newLine("mainText", meddelande);

  meddelande = "Det tredje elementet har inget inneh�ll och d� blir det s� h�r: " + myGames[2];
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);