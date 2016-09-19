var antalVeckor;
var veckoBelopp;
var kapital;
antalVeckor = prompt("Ange hur många veckor du tänker spara");
veckoBelopp = prompt("Ange vilket belopp(kr) du tänker spara varje vecka");
kapital = antalVeckor*veckoBelopp;

resultat = "Om du sparar "+veckoBelopp+" kr i "+antalVeckor+" veckor \nså kommer du att spara totalt "+kapital + " kr.";
alert(resultat);