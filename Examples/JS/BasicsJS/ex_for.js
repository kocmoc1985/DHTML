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
  var myArray = new Array(15);
  var meddelande1 = "Räknar från 10 ner till 1: ";
  var meddelande2 = "Element i arrayen: ";

  for(i = 0; i<15; i++){
    myArray[i]= i; //ger varje element samma värde som sitt index
  }
  for(count = 10; count > 0; count--) {
    meddelande1 += count + " "; //skriver 10 till 1
  }
  for (i in myArray){ //för alla element i myArray oavsett antal
    // skriver ut varje elements värde
    meddelande2 += myArray[i] + " ";
  }
  
  newLine("mainText", meddelande1);
  newLine("mainText", meddelande2);
}

addEvent(window, "load", example);