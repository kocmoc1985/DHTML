<?php
// string
//error_reporting(0); //Om man skriver error_reporting(0) visas ej felmeddelandena. Testa med detta ocks�.
$string = "En textstr�ng";

// Ett f�rs�k att anv�nda metoden join() med denna str�ng
// kommer att generera en E_WARNING
// f�r att det andra argumentet till join() metoden m�ste vara en vektor
join('', $string);

// Eftersom detta �r ett s� kallat "non-fatal error" s�
// kommer programmexekveringen att g� vidare och skriva ut n�sta sats.
echo "Programmet g�r vidare trots detta fel";

?>