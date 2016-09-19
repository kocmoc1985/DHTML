function fakultet(tal){ //7-fakultet inneb�r matematiskt 1*2*3*4*5*6*7
  if (tal==0){
    return 1;
  }
  else{
    return tal*fakultet(tal-1); //h�r sker anropet till funktionen igen
  }
}

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
  var inputText = prompt("Ange ett positivt heltal att ber�kna fakultet f�r", "");
  var tal = parseInt(inputText);
  var resultat = fakultet(tal);
  newLine("mainText", tal + "-fakultet �r "+resultat);
}

addEvent(window, "load", example);