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
  /* De två olika typerna av loopar
   * nedan ger samma resultat.
   */

  //while-loop
  // byt denna rad mot början på en blockkommentar senare
  inputText = prompt("Ange ett heltal: ", "");
  tal = parseInt(inputText);
  while(tal>=0) {
    inputText = prompt("Ange ett heltal: ", "");
    tal = parseInt(inputText);
  }
  // byt denna rad mot slutet på en blockkommentar senare
			
  //do-loop
  // ta bort blockkommentarerna runt do-loopen och
  // sätt blockkommentarer runt while-loopen istället
  /*
  do {
    inputText = prompt("Ange ett heltal: ", "");
    tal = parseInt(inputText);
  } while(tal>=0);
  */
}

addEvent(window, "load", example);