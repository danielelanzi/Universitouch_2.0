<?php
$miamail = "Jonathan_87@live.it";
$successo = $_POST['successo'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$citta = $_POST['citta'];
$eta = $_POST['eta'];
$messaggio = "Nome: " . $nome . "\nCognome: " . $cognome . "\nEmail: " . $email . "\nCittà: " . $citta . "\nEtà: " . $eta;
$headers = "From: " . $miamail . "\r\n" . "Reply-To: " . $miamail;
mail($miamail,"Messaggio dal sito",$messaggio,$headers);
header("location: " . $successo);
?>
