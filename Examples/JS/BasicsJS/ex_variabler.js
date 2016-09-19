var insertInElement = document.getElementById('mainText');
var lejon = 5;
var meddelande1 = "Antal lejon: " + lejon + "";
lejon = "Leo Lejonsson";
var meddelande2 = "Vårt lejon heter: " + lejon + "";
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
  var lion = 5;
  var meddelande1 = "Antal lejon: " + lion + "";
  lion = "Leo Lejonsson";
  var meddelande2 = "Vårt lejon heter: " + lion + "";
  var lionFood = "Igår åt Leo " + 3 + " tigrar.";
  //lionFood innehåller nu texten "Igår åt Leo 3 tigrar."

  newLine("mainText", meddelande1);
  newLine("mainText", meddelande2);
  newLine("mainText", lionFood);

  lionMenu = "tiger\\puma\\huskatt";
  /* ger textsträngen tiger\puma\huskatt vid utskrift*/
  leoLikes = "Leo säger: \"huskatt är gott men lite lite mat.\"";
  /* ger textsträngen "Leo säger: huskatt är gott men lite lite mat." vid utskrift*/

  newLine("mainText", "Leo äter: "+lionMenu);
  newLine("mainText", leoLikes);
}

addEvent(window, "load", example);