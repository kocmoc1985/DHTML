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
  ord = window.prompt("Skriv ett särskrivet ord t.ex \"kaffe kokare\" som du vill ha ihopskrivet.", "Skriv ett särskrivet ord här");
  splitord = ord.split(" ");
  newLine("mainText", "Ordet " + ord + " blir korrekt skrivet: " + splitord[0] + splitord[1]);
}

addEvent(window, "load", example);