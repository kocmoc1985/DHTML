/*
 * En egendefinierad funktion som räknar ut kuben på ett angivet tal.
 */
function talIKubik(tal){
  return tal*tal*tal;
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
  for (i=1;i<=5;i++){
    var kubik = talIKubik(i);
    var new_text = i+" i kubik blir: "+kubik;
	newLine("mainText", new_text);
  }
}

addEvent(window, "load", example);