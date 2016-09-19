
1.### This is a very very useful example about how to have a variable
 so it not resets each time the php page is loaded

<?php
session_start(); // Note the session data is loaded when this method is called
// so it doesnt mean that the session is restarted each time
if (isset($_SESSION['nr'])) { // $_SESSION['nr'] this is how the variable for
    //the session is stored
    $_SESSION['nr']++;
} else {
    $_SESSION['nr'] = 1;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <h2>Visits: <?php echo $_SESSION['nr']; ?></h2>
    </body>
</html>

/////////////////////////////////////////////////////////////////////////

2.###Tar imot det som skickas från en "form"
<?php
echo "Namnet är: " . $_POST['fornamn'] . " " . $_POST['efternamn'];
?>

3.#Skriver ut en rad i browsern
<?php
echo "<p><em>Hello World!</em></p>";
?>

4.#Function exists exampel
<?php
if (function_exists("rand")) {
    $tarning = rand(1, 8);
    echo "Din tarning stannade pa $tarning";
} else {
    echo "Nopes, kan inte slumpa saker ";
}
?>

