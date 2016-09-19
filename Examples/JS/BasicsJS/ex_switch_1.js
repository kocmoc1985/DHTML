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
  var betyg;
  var meddelande;

  betyg = prompt("Ange betyg", "");
  switch (betyg)  {
    case "3":
      meddelande = 'Bra';
      break;
    case "4":
      meddelande = 'Jättebra';
      break;
    case "5":
      meddelande = 'Superbra';
      break;
    default:
      meddelande = 'Omtentamen går till Jul';
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);