<?php
// string
//error_reporting(0); //Om man skriver error_reporting(0) visas ej felmeddelandena. Testa med detta också.
$string = "En textsträng";

// Ett försök att använda metoden join() med denna sträng
// kommer att generera en E_WARNING
// för att det andra argumentet till join() metoden måste vara en vektor
join('', $string);

// Eftersom detta är ett så kallat "non-fatal error" så
// kommer programmexekveringen att gå vidare och skriva ut nästa sats.
echo "Programmet går vidare trots detta fel";

?>