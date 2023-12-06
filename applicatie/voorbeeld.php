<?php

if(!isset($_GET['voornaam'])AND !isset($_GET['achternaam']))
{
    $naam = "Onbekend.";
} 
else
{
    $naam = $_GET['voornaam'].' '.$_GET['achternaam'];
}

$vandaag = date_create('now');
$datum = $vandaag->format('d-m-Y');

$sinterklaas = date_create('23-12-05');
$verschil = date_diff($vandaag, $sinterklaas);
$dagentotsint = $verschil->format('days');

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.
    Nog <?= $dagentotsint ?> tot Sinterklaas.
</body>
</html>