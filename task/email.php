<?php
$email = $_POST['email'];
$message = $_POST['message'];
$mailheader = "From:".$email."<".$email.">\r\n";
$recipient = "office@theorigamicorporation.com";


mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
    <div class="container">
        <h1>Благодаря, че се свързахте с мен. Ще се свържа с вас възможно най-скоро!</h1>
        <p class="back">Върнете се към <a href="index.html">началната страница</a>.</p>      
    </div>
';
?>
