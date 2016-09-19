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
  /* De tv� olika typerna av loopar
   * nedan ger samma resultat.
   */

  //while-loop
  // byt denna rad mot b�rjan p� en blockkommentar senare
  inputText = prompt("Ange ett heltal: ", "");
  tal = parseInt(inputText);
  while(tal>=0) {
    inputText = prompt("Ange ett heltal: ", "");
    tal = parseInt(inputText);
  }
  // byt denna rad mot slutet p� en blockkommentar senare
			
  //do-loop
  // ta bort blockkommentarerna runt do-loopen och
  // s�tt blockkommentarer runt while-loopen ist�llet
  /*
  do {
    inputText = prompt("Ange ett heltal: ", "");
    tal = parseInt(inputText);
  } while(tal>=0);
  */
}

addEvent(window, "load", example);