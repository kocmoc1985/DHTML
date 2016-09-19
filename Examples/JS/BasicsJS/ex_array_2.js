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
  var myGames = new Array(4); //ny array med 4 element numrerade 0-3
  //elementen har nu inga värden utan vi måste fulla dem med något
  myGames[0] = "Spacehulk";
  myGames[1] = 2000; //året jag köpte spelet
  myGames[2] = "Red Alert";
  myGames[3] = 2003;
  //vi har nu blandat tal och strängar i arrayen

  var arrayLength = myGames.length;
  //variabeln arrayLength har nu värdet 4
			
  var meddelande = "Arrayen har "+ arrayLength +" element.";
  newLine("mainText", meddelande);

  meddelande = "Det första spelet är : " + myGames[0] + " som köptes " + myGames[1];
  newLine("mainText", meddelande);

  meddelande = "Det andra spelet är : " + myGames[2] + " som köptes " + myGames[3];
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);