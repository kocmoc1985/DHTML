<?php

function include_form() {

    echo"<form action=index.php method=post id =loginForm>
                Username:  <input type=text name=username id=username><br>
                Password: <input type=password name=pass id=pass><br><br>
                <input type=submit value=send id=submit>
            </form>";
}

?>



<!--some Examples form lab3-->
<?php

function include_news1(){
    echo " <div class=news>
            <u>Italiens premiärminister Silvio Berlusconi</u> lovar att avgå
            när landets ekonomiska reformpaket har antagits.
            Det uppger italienske presidentens kansli.

            Berlusconis beslut följer efter voteringen om fjolårets budget
            tidigare på tisdagen, en omröstning som den kontroversielle premiärministern
            visserligen vann, men som också visade att hans parlamentariska stöd sviktar
            betänkligt. Majoriteten han kunnat förlita sig på finns inte där längre.

            Då oppositionen valde att bojkotta voteringen blev det totala antalet
            lagda röster bara 308, av 630 möjliga. Röster inom Berlusconis parti
            talade om ”åtta förrädare” efter det att voteringssegern som samtidigt var
            ett nederlag var ett faktum.

            <p><a href=http://www.dn.se>Hämtat från dn.se</a>

        </div>";
}

?>

<?php

define("id", "welcomeC");

if (isset($_SESSION['loggin'])) {
    $loggin = $_SESSION['loggin'];
} else {
    $loggin = "0";
}

if ($loggin == "0") {//notLoggedIn
    writeWelcome();

    echo "<div id =login>";
    include_form();
    echo " </div>";

} else if ($loggin == "1") {// loggedIn
    $usrname = $_SESSION['name'];

    echo "<div id=" . id . "><h1>Welcome $usrname!</h1></div>";
    echo "<div id=loggedIn>";
    echo "<h3>Your are now logged in as: <u>$usrname</u></h3>";
    echo "<a href=index.php?loggout=1>click hier to loggout</a>";
    echo "</div>";

} else if ($loggin == "2") { // loginFailedd
    writeWelcome();

    echo "<div id =loginFailed>";
    echo "<p>Failed to loggin</p>";
    include_form();
    echo " </div>";

    $_SESSION['loggin'] = "0"; //!
}

function writeWelcome() {
    echo "<div id=" . id . "><h1>Welcome!</h1></div>";
}

?>

