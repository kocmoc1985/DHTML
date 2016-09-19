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
  var count;
  var meddelande1 = "R�knar fr�n 10 ner till 1 men hoppar �ver att skriva ut 4: ";
  var meddelande2 = "Vill g�ra 10 iterationer men avbryts efter 3 iterationer: "

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