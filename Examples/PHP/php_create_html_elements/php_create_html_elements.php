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
            <u>Italiens premi�rminister Silvio Berlusconi</u> lovar att avg�
            n�r landets ekonomiska reformpaket har antagits.
            Det uppger italienske presidentens kansli.

            Berlusconis beslut f�ljer efter voteringen om fjol�rets budget
            tidigare p� tisdagen, en omr�stning som den kontroversielle premi�rministern
            visserligen vann, men som ocks� visade att hans parlamentariska st�d sviktar
            bet�nkligt. Majoriteten han kunnat f�rlita sig p� finns inte d�r l�ngre.

            D� oppositionen valde att bojkotta voteringen blev det totala antalet
            lagda r�ster bara 308, av 630 m�jliga. R�ster inom Berlusconis parti
            talade om ��tta f�rr�dare� efter det att voteringssegern som samtidigt var
            ett nederlag var ett faktum.

            <p><a href=http://www.dn.se>H�mtat fr�n dn.se</a>

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

