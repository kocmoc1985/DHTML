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
  ord = window.prompt("Skriv ett s�rskrivet ord t.ex \"kaffe kokare\" som du vill ha ihopskrivet.", "Skriv ett s�rskrivet ord h�r");
  splitord = ord.split(" ");
  newLine("mainText", "Ordet " + ord + " blir korrekt skrivet: " + splitord[0] + splitord[1]);
}

addEvent(window, "load", example);