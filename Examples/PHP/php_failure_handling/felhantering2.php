<?php
//error_reporting(0); //Om man skriver error_reporting(0) visas ej felmeddelandena
// Skriver ut vad som helst
echo "Hej";
// Kallar p� en funktion som ej deklarerats och d�rmed ej existerar.
// Det genereras ett s.k. E_ERROR
someFunction();

// Denna rad och rader under denna kommer aldrig att exekveras.
echo "Jag fick inte vara med...";
?>