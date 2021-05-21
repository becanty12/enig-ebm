//La seconde page ex.:envoi.php

<?php 
$message="jhjhdjh";
$Nomr = $_POST['nom']; 
$msg = "Nom:\t$Nomr\n";
//$msg .= "E-mail:\t $_POST['email'] \n";
//$msg .= "Message:\t $message\n\n";

$recipient = "konatenhamed@mail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon site web<> \n";
$mailheaders .= "Reply-To: $recipient\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $Nomr </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?> 