<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Titel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <?php
        /*
          For att den har programsnutten ska fungera sa maste en katalog "test" vara
          skapad i den katalog dar denna fil ligger.
         */
        

      

            //detta �r en flerstegssida s� vi kontrollerar om vi har ett filnamn satt att ladda upp
        if (isset($_FILES["userfile"]) && ($_FILES["userfile"]["name"] != "")) { //isset funktionen returnerar true om filen �r satt eller definierad
            /*
              Filen sparas p� serverns plats f�r temor�ra filer n�r vi laddar upp den.
              Detta �r f�ga intressant f�r anv�ndaren men d�remot f�r en utvecklare.
              S� du b�r vara medveten om att det sker p� det h�r s�ttet.
              F�r demonstrationens skull s� skriver vi ut det tempor�ra filnamnet.
             */
            echo("<p>Filen laddades upp med det temorara namnet: " . $_FILES["userfile"]["tmp_name"] . "<br>");

            //Vi skriver ut vad filen hette p� den lokala maskinen d�r den h�mtades
            echo("Filnamnet pa den lokala maskinen: " . $_FILES["userfile"]["name"] . "<br>");

            /*
              D� vi vanligtvis vill beh�lla filnamnet fr�n den lokala maskinen och spara filen
              n�gon annanstans �n serverns tempor�ra yta s� m�ste vi ordna detta sjalva.
              Vi anvander funktionen copy far att flytta den uppladdade filen med det temporara namnet
              till en vald plats och ger kopian samma namn som filen hade lokalt.
              Den valda platsen ar i det har fallet en katalog med namnet test som ligger pa samma plats
              som denna script-fil:
              "./test/".$_FILES["selectedFile"]["name"]
              Den inledande punkten i sokvagen anger aktuell katalog - det vill saga
              samma katalog som script-filen ligger i.

              move_uploaded_file innebar samam sak som en cpoy foljt av en unlink

             */
            move_uploaded_file($_FILES["userfile"]["tmp_name"], "./test/" . $_FILES["userfile"]["name"]);
            //copy($_FILES["selectedFile"]["tmp_name"],"./test/".$_FILES["selectedFile"]["name"]);
            echo ("Kopierade filen med filnamnet: " . $_FILES["userfile"]["tmp_name"] .
            " till en fil med filnamnet " . $_FILES["userfile"]["name"] . "<br>");
            echo("Filens sokvag relativt detta script ar test/" . $_FILES["userfile"]["name"] . "<br>");
            /*
              Observera att ingen kontroll sker om filen fanns eller inte.
              Om det redan fanns en fil med samma namn s� kommer denna att skrivas �ver.
             */


            /*
              Vi vill ju inte lusa ner servern med en massa tempor�ra filer
              som inte avses anv�ndas igen s� d�rf�r tar vi bort den temor�ra
              filen nu n�r vi kopierat den. beh�vs inte om vi anv�nder move_uploaded_files.

              Observera att ingen kontroll gjort av att kopieringen fungerade.
              S� vi riskerar att ta bort filen utan att den finns sparad n�gon annastans.
             */
            //unlink($_FILES["selectedFile"]["tmp_name"]);
            // vi g�r en l�nk till den uppladdade filen
            echo("<a href='test/" . $_FILES["userfile"]["name"] . "'>Las den uppladdade filen fran servern</a></p>");
        } else {
            echo("<p>Inget filnamn fanns annu</p>");
        }
        ?>
        <!--
          $PHP_SELF �r en inbyggd variabel till det exekverande scriptets filnamn.
          Denna �r bra att anv�nda d� det inneb�r att om du �ndrar filnamn s� beh�ver
          du inte g� in och g�ra �ndringar i koden ocks�. Det finns dock vissa
          nackdelar med denna variabel som du kan l�sa om p� php.net.

	Observera att vi anv�nder attributet enctype f�r multipart/form-data.
          Detta �r n�dv�ndigt n�r vi hanterar filer f�r att inneh�llet i filen som
          laddas upp till servern inte skall �ndras.
        -->

        <form method="POST" action="<?php $PHP_SELF?>" enctype="multipart/form-data" name="fileform">
            <p>Ladda upp fil:
                <input type="file" name="userfile" ><br><!-- Notera att det namn man ger filen nar man refererar till den genereras har -->
                <input type="submit" value="ladda upp">
            </p>
        </form>
    </body>
</html>