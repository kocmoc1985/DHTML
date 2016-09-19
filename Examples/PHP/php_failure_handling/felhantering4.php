<?php
// här definierar vi en egen felhanterare
function felhanterare($type, $msg, $file, $line, $context)
{
echo "<h1>Det blev ett fel!</h1>";
echo "Ett fel uppstod vid körningen av denna webbaplikationen. Var god kontakta <a
href=mailto:webmaster@minsida.nått>webmaster</a> för att rapportera detta fel.";
echo "<p>";
echo "Här visas ytterligare information om felet:";
echo "<hr><pre>";
echo "Fel kod: $type<br>";
echo "Fel meddelande: $message<br>";
echo "Skript-namn och radnummer där felet troligen uppkom: $file:$line<br>";
echo "Variabelns läge när felet uppstod: <br>";
print_r($context);
echo "</pre></p><hr>";
}
// här definierar vi en egen felhanterare
set_error_handler("felhanterare");
// string sätts till något...
$string = "Det var en gång en tomte som";

// kommer att generera en E_WARNING
join('', $string);
?>
