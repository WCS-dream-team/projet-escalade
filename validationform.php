<?php 
$nom=$_POST['nom']; 
$mail=$_POST['mail']; 
$objet=$_POST['objet']; 
$message=$_POST['message']; 
$subject="$objet"; 
$destinataire="webmaster@escalade-a-bleau.com";
$body="$message"; 
var_dump($_POST); die();

if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; } 
else { 
echo "Une erreur s'est produite"; 
} ?> 