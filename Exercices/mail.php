<?php

$to = "charlotte.tusset@gmail.com";
$subject = "Hi Babe!";
$body = "Salut Babe! Je t'envoie un e-mail via un script PHP :)";
if (mail($to, $subject, $body)) {
echo("<p>Email successfully sent!</p>");
} else {
echo("<p>Email delivery failed…</p>");
}
?>