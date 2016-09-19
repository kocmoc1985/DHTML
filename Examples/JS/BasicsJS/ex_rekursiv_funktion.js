function fakultet(tal){ //7-fakultet innebär matematiskt 1*2*3*4*5*6*7
  if (tal==0){
    return 1;
  }
  else{
    return tal*fakultet(tal-1); //här sker anropet till funktionen igen
  }
}

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
  var inputText = prompt("Ange ett positivt heltal att beräkna fakultet för", "");
  var tal = parseInt(inputText);
  var resultat = fakultet(tal);
  newLine("mainText", tal + "-fakultet är "+resultat);
}

addEvent(window, "load", example);