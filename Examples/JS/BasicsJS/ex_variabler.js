var insertInElement = document.getElementById('mainText');
var lejon = 5;
var meddelande1 = "Antal lejon: " + lejon + "";
lejon = "Leo Lejonsson";
var meddelande2 = "V�rt lejon heter: " + lejon + "";
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
  var lion = 5;
  var meddelande1 = "Antal lejon: " + lion + "";
  lion = "Leo Lejonsson";
  var meddelande2 = "V�rt lejon heter: " + lion + "";
  var lionFood = "Ig�r �t Leo " + 3 + " tigrar.";
  //lionFood inneh�ller nu texten "Ig�r �t Leo 3 tigrar."

  newLine("mainText", meddelande1);
  newLine("mainText", meddelande2);
  newLine("mainText", lionFood);

  lionMenu = "tiger\\puma\\huskatt";
  /* ger textstr�ngen tiger\puma\huskatt vid utskrift*/
  leoLikes = "Leo s�ger: \"huskatt �r gott men lite lite mat.\"";
  /* ger textstr�ngen "Leo s�ger: huskatt �r gott men lite lite mat." vid utskrift*/

  newLine("mainText", "Leo �ter: "+lionMenu);
  newLine("mainText", leoLikes);
}

addEvent(window, "load", example);