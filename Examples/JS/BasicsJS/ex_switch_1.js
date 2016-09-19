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
  var betyg;
  var meddelande;

  betyg = prompt("Ange betyg", "");
  switch (betyg)  {
    case "3":
      meddelande = 'Bra';
      break;
    case "4":
      meddelande = 'J�ttebra';
      break;
    case "5":
      meddelande = 'Superbra';
      break;
    default:
      meddelande = 'Omtentamen g�r till Jul';
  }
  newLine("mainText", meddelande);
}

addEvent(window, "load", example);