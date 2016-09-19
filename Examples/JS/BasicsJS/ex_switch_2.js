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
var val;
var meddelande;

  val = prompt('Ange vad du vill g�ra', "");
  switch (val)  {
    case '1':
	  meddelande = 'Ett utm�rkt val!';
      break;
    case '2':
      meddelande = 'Underbart att l�sa!';
      break;
    case '3':
      meddelande = 'Fredagsfavoriten!';
      break;
    default:
      meddelande = 'Du r�kade trycka p� en felaktig tangent!';
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);