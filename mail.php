<?php
$to = "1301.rizki.m@gmail.com.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: navigatorz@live.com" . "\r\n" .
"CC: cintax002@yahoo.com";

mail($to,$subject,$txt,$headers);
?>