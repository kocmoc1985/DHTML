var antalVeckor;
var veckoBelopp;
var kapital;
antalVeckor = prompt("Ange hur m�nga veckor du t�nker spara");
veckoBelopp = prompt("Ange vilket belopp(kr) du t�nker spara varje vecka");
kapital = antalVeckor*veckoBelopp;

resultat = "Om du sparar "+veckoBelopp+" kr i "+antalVeckor+" veckor \ns� kommer du att spara totalt "+kapital + " kr.";
alert(resultat);