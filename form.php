<?php

if (isset($_POST['submit'])){
    $username = $_POST['email'];
    if(isset($_POST['comment'])){
        $comment = $_POST['comment'];
    }if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
    }
    if(!$captcha){
        echo '<h2>Check the captcha please.</h2>';
        exit;
    }
    $secretKey = "6LdsrtgZAAAAAKG6YhYiTwNPfXiwCHqROkCnxpjW";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response, true);
    if ($response['success']) {
        echo "<h2>Verified and the name is: $username</h2>";
        exit;
    } else{
        echo "<h2>Verification Failed</h2>";
        exit;
    }
}
?>