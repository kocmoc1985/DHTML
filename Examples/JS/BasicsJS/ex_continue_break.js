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
  var count;
  var meddelande1 = "Räknar från 10 ner till 1 men hoppar över att skriva ut 4: ";
  var meddelande2 = "Vill göra 10 iterationer men avbryts efter 3 iterationer: "

  for(count = 10; count > 0; count--) {
    if(count==4){ //skriver inte ut 4
      continue;
    }
    meddelande1 += count + " "; //skriver 10 till 1 men inte 4
  }

  for(count = 10; count > 0; count--) {
    if(count==7){ //avbryter vid 7
      break;
    }
    meddelande2 += count + " "; //avser att skriva ut 10 till 1 men avbryts vid 7
  }

  newLine("mainText", meddelande1);
  newLine("mainText", meddelande2);
}

addEvent(window, "load", example);