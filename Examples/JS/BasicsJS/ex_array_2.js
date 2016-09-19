/*
 * F�r att vi ska slippa s� m�nga alertrutor och �nd� h�lla oss till korrekt 
 * W3C-standard f�r DOM och h�ndelsehantering s� kr�vs lite trick
 * som vi �nnu inte g�tt igenom p� kursen.
 * S� d�rf�r st�r den f�r exemplet intressanta koden i funktionen example()
 * och vi beh�ver biblioteksfunktionerna newLine och addEvent. 
 * Du hittar biblioteksfunktionerna i filen library_study_material.js
 * om du �r intresserad och inte vill v�nta.
 */

function example(){
  var myGames = new Array(4); //ny array med 4 element numrerade 0-3
  //elementen har nu inga v�rden utan vi m�ste fulla dem med n�got
  myGames[0] = "Spacehulk";
  myGames[1] = 2000; //�ret jag k�pte spelet
  myGames[2] = "Red Alert";
  myGames[3] = 2003;
  //vi har nu blandat tal och str�ngar i arrayen

  var arrayLength = myGames.length;
  //variabeln arrayLength har nu v�rdet 4
			
  var meddelande = "Arrayen har "+ arrayLength +" element.";
  newLine("mainText", meddelande);

  meddelande = "Det f�rsta spelet �r : " + myGames[0] + " som k�ptes " + myGames[1];
  newLine("mainText", meddelande);

  meddelande = "Det andra spelet �r : " + myGames[2] + " som k�ptes " + myGames[3];
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);