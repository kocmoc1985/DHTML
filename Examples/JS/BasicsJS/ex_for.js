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
  var myArray = new Array(15);
  var meddelande1 = "R�knar fr�n 10 ner till 1: ";
  var meddelande2 = "Element i arrayen: ";

  for(i = 0; i<15; i++){
    myArray[i]= i; //ger varje element samma v�rde som sitt index
  }
  for(count = 10; count > 0; count--) {
    meddelande1 += count + " "; //skriver 10 till 1
  }
  for (i in myArray){ //f�r alla element i myArray oavsett antal
    // skriver ut varje elements v�rde
    meddelande2 += myArray[i] + " ";
  }
  
  newLine("mainText", meddelande1);
  newLine("mainText", meddelande2);
}

addEvent(window, "load", example);