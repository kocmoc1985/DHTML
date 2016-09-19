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
  var resultat;
  var meddelande;

  resultat = prompt("Ange resultat", "");
  if((resultat<0) || (resultat>60)){
    meddelande = "Du har inte angivit ett giltigt resultat.";
  }
  else if(resultat<30){
    meddelande = resultat + " poäng ger betyget U";
  }
  else if(resultat<40){
    meddelande = resultat + " poäng ger betyget G";
  }
  else if(resultat<50){
    meddelande = resultat + " poäng ger betyget VG";
  }
  else { //resultatet måste nu ligga mellan 50 och 60
    meddelande = resultat + " poäng ger betyget MVG";
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);