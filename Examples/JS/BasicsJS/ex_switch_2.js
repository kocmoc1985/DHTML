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
var val;
var meddelande;

  val = prompt('Ange vad du vill göra', "");
  switch (val)  {
    case '1':
	  meddelande = 'Ett utmärkt val!';
      break;
    case '2':
      meddelande = 'Underbart att läsa!';
      break;
    case '3':
      meddelande = 'Fredagsfavoriten!';
      break;
    default:
      meddelande = 'Du råkade trycka på en felaktig tangent!';
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);