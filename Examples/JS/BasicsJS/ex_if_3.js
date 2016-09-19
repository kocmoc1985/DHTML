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
  var resultat;
  var meddelande;

  resultat = prompt("Ange resultat", "");
  if((resultat<0) || (resultat>60)){
    meddelande = "Du har inte angivit ett giltigt resultat.";
  }
  else if(resultat<30){
    meddelande = resultat + " po�ng ger betyget U";
  }
  else if(resultat<40){
    meddelande = resultat + " po�ng ger betyget G";
  }
  else if(resultat<50){
    meddelande = resultat + " po�ng ger betyget VG";
  }
  else { //resultatet m�ste nu ligga mellan 50 och 60
    meddelande = resultat + " po�ng ger betyget MVG";
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);