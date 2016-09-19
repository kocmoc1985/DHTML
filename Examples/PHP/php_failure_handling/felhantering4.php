<?php
// h�r definierar vi en egen felhanterare
function felhanterare($type, $msg, $file, $line, $context)
{
echo "<h1>Det blev ett fel!</h1>";
echo "Ett fel uppstod vid k�rningen av denna webbaplikationen. Var god kontakta <a
href=mailto:webmaster@minsida.n�tt>webmaster</a> f�r att rapportera detta fel.";
echo "<p>";
echo "H�r visas ytterligare information om felet:";
echo "<hr><pre>";
echo "Fel kod: $type<br>";
echo "Fel meddelande: $message<br>";
echo "Skript-namn och radnummer d�r felet troligen uppkom: $file:$line<br>";
echo "Variabelns l�ge n�r felet uppstod: <br>";
print_r($context);
echo "</pre></p><hr>";
}
// h�r definierar vi en egen felhanterare
set_error_handler("felhanterare");
// string s�tts till n�got...
$string = "Det var en g�ng en tomte som";

// kommer att generera en E_WARNING
join('', $string);
?>
