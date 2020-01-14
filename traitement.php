<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'tester.php'; ?>
<?php
function random($min = 1, $max = 10) {
    return rand($min,$max); }

$mult=$random1*$random2;
echo "<br>";
echo $random1."*"."".$random2."="."?";
echo "<input type=\"number\" id=\"saisie\" value=\"\" >";

echo"<input type=\"submit\" onclick=\"getValue();\"value=\"Valider\" >";
if((int)$_POST['reponse']===$mult ){
echo"Bonne reponse";
}
?>  
</body>
</html>