/*
 * En egendefinierad funktion som r�knar ut kuben p� ett angivet tal.
 */
function talIKubik(tal){
  return tal*tal*tal;
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
  for (i=1;i<=5;i++){
    var kubik = talIKubik(i);
    var new_text = i+" i kubik blir: "+kubik;
	newLine("mainText", new_text);
  }
}

addEvent(window, "load", example);